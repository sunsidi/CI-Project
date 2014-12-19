<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class wrevenues extends CI_Controller{
    
    public function wrevenues_main() {
        $this->load->library('path');
        $this->load->model('model_wrevenues');
        $this->load->model('model_users');
        $this->load->model('model_events');
        $path = $this->path->getPath();
        $this->load->library('session');
        $data['wrevenues'] = $this->model_wrevenues->get_wrevenues();
        for($i = 0; $i < count($data['wrevenues']); $i++) {
            $data['events'] = $this->model_users->get_my_events_by_date($data['wrevenues'][$i]['creator_id']);
            $data['wrevenues'][$i]['total_likes'] = 0;
            for($j = 0; $j < count($data['events']); $j++) {
                $data['wrevenues'][$i]['total_likes'] += $data['events'][$j]['e_likes'];
            }
            $day_array = array('mon', 'tues', 'wed', 'thurs', 'fri', 'sat', 'sun');
            for($j = 0; $j < 7; $j++) {
                if(!empty($data['wrevenues'][$i][$day_array[$j]])) {
                    $temp_hours = explode('|', $data['wrevenues'][$i][$day_array[$j]]);
                    $data['wrevenues'][$i]['day'][$j] = $day_array[$j];
                }
                else {
                    $data['wrevenues'][$i]['day'][$j] = false;
                }
            }
        }
        $result = array_merge($path,$data);
        $this->load->view('Create_Wrevel_View',$result);
        $this->load->view('wrevenues_main',$result);     
    }

    public function wrevenues_fullview($id) {
        $this->load->library('path');
        $this->load->model('model_wrevenues');
        $this->load->model('model_users');
        $this->load->model('model_events');
        $path = $this->path->getPath();
        $this->load->library('session');
        $data['wrevenues'] = $this->model_wrevenues->find_wrevenue($id);
        $data['events'] = $this->model_users->get_my_events_by_date($data['wrevenues']['creator_id']);
        $this->load->helper('date');
        $datestring = "%Y-%m-%d";
        $time = time();
        $date1 = date_create(mdate($datestring, $time));
        $found_latest = false;
        $data['wrevenues']['total_likes'] = 0;
        for($i = 0; $i < count($data['events']); $i++) {
            $date2 = date_create($data['events'][$i]['e_date']);
            $diff = date_diff($date1, $date2);
            if($diff->format('%R%a') >= 0 && !$found_latest) {
                $data['latest_event'] = $data['events'][$i];
                $data['latest_event']['e_start_time'] = $this->model_events->convert_time($data['latest_event']['e_start_time']);
                $found_latest = true;
            }
            $data['wrevenues']['total_likes'] += $data['events'][$i]['e_likes'];
        }
        if($data['wrevenues'] !== 0) {
            $data['wrevenues']['photos'] = array_diff(scandir('./uploads/wrevenues/'.$data['wrevenues']['id'].'/photos/'), array('..', '.'));
            $result = array_merge($path,$data);
            //echo '<pre>', print_r($result, true), '</pre>';
            $this->load->view('Create_Wrevel_View',$result);
            $this->load->view('wrevenues_fullview',$result);     
        }
        else {
            redirect('wrevenues/wrevenues_main');
        }
    }
    
    public function create_wrevenue() {
        $this->load->library('path');
        $this->load->model('model_wrevenues');
        $this->load->model('model_users');
        $path = $this->path->getPath();
        $this->load->library('session');
        $email = $this->session->userdata('email');
        $user_id = $this->model_users->get_userID($email);
        $insert_id = $this->model_wrevenues->create_wrevenue($user_id);
        if($insert_id) {
            //FIRST THE WREVENUE MAIN IMAGE.
            if(!mkdir('./uploads/wrevenues/'.$insert_id, '0777', true)) {
                $this->session->set_flashdata('message', 'There was an error making the directory. Please try again.');
                redirect('wrevenues/wrevenues_main');
            }
            else {
                chmod('./uploads/wrevenues/'.$insert_id, 0777);
            }
            $config['upload_path']='./uploads/wrevenues/'.$insert_id;
            $config['allowed_types']= 'gif|jpg|png|jpeg';
            $config['max_size']	= '10000';
            //echo $image_name;
            $this->load->library('upload',$config);
            if (!$this->upload->do_upload('wrevenue_file'))
            {
                $wrevenue_image = 'default_wrevenue_image.jpg';
            }
            else{
                $upload_data = $this->upload->data();
                $data = array('upload_data' => $this->upload->data());
                $image_name = $upload_data['file_name'];
                $wrevenue_image = 'wrevenues/'.$insert_id.'/'.$image_name;
            }
            $this->model_wrevenues->update_wrevenue_image($insert_id, $wrevenue_image);
            
            //AFTER GET THE MULTIPLE PHOTOS THAT YOU WANT.
            if(!mkdir('./uploads/wrevenues/'.$insert_id.'/photos/', '0777', true)) {
                $this->session->set_flashdata('message', 'There was an error making the directory. Please try again.');
                redirect('wrevenues/wrevenues_main');
            }
            else {
                chmod('./uploads/wrevenues/'.$insert_id.'/photos/', 0777);
            }
            $config2['upload_path'] ='./uploads/wrevenues/'.$insert_id.'/photos/';
            $config2['allowed_types'] = 'gif|jpg|png|jpeg';
            $config2['max_size'] = '10000';
            //echo $image_name;
            $this->load->library('upload', $config2);
            $this->upload->initialize($config2);
            if (!$this->upload->do_multi_upload('wrevenue_file_array'))
            {
                $this->session->set_flashdata('message', 'There was an error uploading one or more files. Check if your files are all there.');
            }
            $this->load->view('Create_Wrevel_View', $path);
            $this->load->view('wrevenues_posting_successful', $path);
            
        }
        else {
            $this->session->set_flashdata('message', 'There was an error creating your wrevenue. Please try again');
            redirect('wrevenues/wrevenues_main');
        }
    }
    
    public function edit_wrevenue($id) {
        $this->load->library('path');
        $this->load->model('model_wrevenues');
        $path = $this->path->getPath();
        $this->load->library('session');
        $config['upload_path']='./uploads/wrevenues/'.$id;
        $config['allowed_types']= 'gif|jpg|png|jpeg';
        $config['max_size']	= '10000';
        //echo $image_name;
        $this->load->library('upload',$config);
        if (!$this->upload->do_upload('wrevenue_file')){
            $temp = $this->upload->display_errors();
            $wrevenue_image = false;
        }
        else{
            $upload_data = $this->upload->data();
            $data = array('upload_data' => $this->upload->data());
            $image_name = $upload_data['file_name'];
            $wrevenue_image = 'wrevenues/'.$id.'/'.$image_name;
        }
        //AFTER GET THE MULTIPLE PHOTOS THAT YOU WANT.
        $config2['upload_path'] ='./uploads/wrevenues/'.$id.'/photos/';
        $config2['allowed_types'] = 'gif|jpg|png|jpeg';
        $config2['max_size'] = '10000';
        //echo $image_name;
        $this->load->library('upload', $config2);
        $this->upload->initialize($config2);
        if (!$this->upload->do_multi_upload('wrevenue_file_array')) {
            $this->session->set_flashdata('message', 'Some files were not uploaded please try again. <br>');
        }
        if($this->model_wrevenues->edit_wrevenue($id, $wrevenue_image)) {
            $this->session->set_flashdata('message', $this->session->flashdata('message').'Your wrevenue information has been changed! Please make sure everything is correct.');
        }
        else {
            $this->session->set_flashdata('message', $this->session->flashdata('message').'There was an error updating your wrevenue. Please try again');
        }
        redirect('wrevenues/wrevenues_fullview/'.$id);
    }
    //Search for specific wrevenues with name, city, state, zipcode.
    public function search_wrevenues() {
        $this->load->library('path');
        $this->load->library('session');
        $this->load->model('model_wrevenues');
        $this->load->model('model_events');
        $this->load->model('model_users');
        $path = $this->path->getPath();
        
        //the searched values.
        $search = $this->input->post('search_search');
        $state = $this->input->post('search_state');
        $city = $this->input->post('search_city');
        $zipcode = $this->input->post('search_zipcode');
        
        //Now do the search on the database.
        $data['wrevenues'] = $this->model_wrevenues->search_wrevenues($search, $state, $city, $zipcode);
        for($i = 0; $i < count($data['wrevenues']); $i++) {
            $data['events'] = $this->model_users->get_my_events_by_date($data['wrevenues'][$i]['creator_id']);
            $data['wrevenues'][$i]['total_likes'] = 0;
            for($j = 0; $j < count($data['events']); $j++) {
                $data['wrevenues'][$i]['total_likes'] += $data['events'][$j]['e_likes'];
            }
            $day_array = array('mon', 'tues', 'wed', 'thurs', 'fri', 'sat', 'sun');
            for($j = 0; $j < 7; $j++) {
                if(!empty($data['wrevenues'][$i][$day_array[$j]])) {
                    $temp_hours = explode('|', $data['wrevenues'][$i][$day_array[$j]]);
                    $data['wrevenues'][$i]['day'][$j] = $day_array[$j];
                }
                else {
                    $data['wrevenues'][$i]['day'][$j] = false;
                }
            }
        }
        
        //Now we're done. So load the view with the data.
        $result = array_merge($path,$data);
        $this->load->view('Create_Wrevel_View',$result);
        $this->load->view('wrevenues_main',$result);
    }
    // THIS IS FOR THE FEATURED SEARCH CLICKS. MAYBE THERES A BETTER WAY THAN COPYING THE ABOVE CODE.
    public function search_wrevenues_city($temp_city) {
        $this->load->library('path');
        $this->load->library('session');
        $this->load->model('model_wrevenues');
        $this->load->model('model_events');
        $this->load->model('model_users');
        $path = $this->path->getPath();
        
        //the searched values.
        $search = $state = $zipcode = "";
        $city_array = explode('_', $temp_city);
        $city = "";
        //Future proofed for when citys have more than 1 word.
        for($i = 0; $i < count($city_array); $i++) {
            $city .= $city_array[$i];
            $city .= " ";
        }
        $city = substr($city,0,strlen($city)-1);
        
        //Now do the search on the database.
        $data['wrevenues'] = $this->model_wrevenues->search_wrevenues($search, $state, $city, $zipcode);
        for($i = 0; $i < count($data['wrevenues']); $i++) {
            $data['events'] = $this->model_users->get_my_events_by_date($data['wrevenues'][$i]['creator_id']);
            $data['wrevenues'][$i]['total_likes'] = 0;
            for($j = 0; $j < count($data['events']); $j++) {
                $data['wrevenues'][$i]['total_likes'] += $data['events'][$j]['e_likes'];
            }
            $day_array = array('mon', 'tues', 'wed', 'thurs', 'fri', 'sat', 'sun');
            for($j = 0; $j < 7; $j++) {
                if(!empty($data['wrevenues'][$i][$day_array[$j]])) {
                    $temp_hours = explode('|', $data['wrevenues'][$i][$day_array[$j]]);
                    $data['wrevenues'][$i]['day'][$j] = $day_array[$j];
                }
                else {
                    $data['wrevenues'][$i]['day'][$j] = false;
                }
            }
        }
        
        //Now we're done. So load the view with the data.
        $result = array_merge($path,$data);
        $this->load->view('Create_Wrevel_View',$result);
        $this->load->view('wrevenues_main',$result);
    }
} 