<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller{
	public function admin_account(){
            $this->load->library('session');
            $allowed_access = array('kelui92@gmail.com','sfoolgenius@gmail.com','abirashukur@gmail.com','cjbackintime@gmail.com','tshum741@gmail.com','sajidzaman39@hotmail.com');
            $keep_going = false;
            for($i = 0; $i < 6; $i++) {
                if($this->session->userdata('email') == $allowed_access[$i]) {
                    $keep_going = true;
                }
            }
            if(!$keep_going) {
                redirect('welcome');
            }
		$this->load->library('path');
                $this->load->helper('date');
            	$path = $this->path->getPath();
            	$this->load->library('session');
            	$this->load->model('model_users');
            	$this->load->model('model_events');
            	$this->load->model('model_tickets');
            	
            	$data['all_users'] = $this->model_users->admin_get_users();
            	$data['all_events'] = $this->model_events->admin_get_events();
            	$data['all_tickets'] = $this->model_tickets->admin_get_tickets();
                $datestring = "%Y-%m-%d %H:%i:%s";
                $time = time();
            	$data['today'] = mdate($datestring, $time);
                $date1 = date_create($data['today']);
                for($i = 0; $i < count($data['all_users']); $i++) {
                    $date2 = date_create($data['all_users'][$i]['join_stamp']);
                    $diff = date_diff($date1,$date2);
                    $data['all_users'][$i]['diff'] = $diff->format("%a");
                }
                for($i = 0; $i < count($data['all_events']); $i++) {
                    $date3 = date_create($data['all_events'][$i]['create_stamp']);
                    $diff = date_diff($date1,$date3);
                    $data['all_events'][$i]['diff'] = $diff->format("%a");
                }
            	  $nav_data = $this->session->all_userdata();
                $result = array_merge($path, $nav_data, $data);
                  $this->load->view('Create_Wrevel_View',$result);
                 $this->load->view('admin_account',$result);
	
        }
        
        //delete users that are checked.
        public function delete_users() {
            $this->load->library('session');
            $this->load->model('model_users');
            $this->model_users->admin_delete_users();
            redirect('admin/admin_account');
        }
        
        //delete events that are checked.
        public function delete_events() {
            $this->load->library('session');
            $this->load->model('model_events');
            $this->model_events->admin_delete_events();
            redirect('admin/admin_account');
        }
        
        //Feature events that are checked.
        public function feature_events() {
            $this->load->library('session');
            $this->load->model('model_events');
            $this->model_events->admin_feature_events();
            redirect('admin/admin_account');
        }
        //creates many events.
        public function create_multiple_events() {
            $this->load->library('session');
            $this->load->model('model_events');
            $insert_ids = $this->model_events->create_multi_event(77);
            if(isset($insert_ids)) {
                for($i = 0; $i < count($insert_ids); $i++) {
                    mkdir('./uploads/events/'.$insert_ids[$i].'/photos/', 0777, true);
                    chmod('./uploads/events/'.$insert_ids[$i].'/photos/', 0777);
                }
                $config['upload_path'] = './uploads/events/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '10000';
                //echo $image_name;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_multi_upload('multi_file_input'))
                {
                    $this->session->set_flashdata('message', 'There was an error uploading one or more files. Check if your files are all there.');
                }
                else {
                    $temp_data = $this->upload->get_multi_upload_data();
                    for($i = 0; $i < count($temp_data); $i++) {
                        rename('./uploads/events/'.$temp_data[$i]['file_name'], './uploads/events/'.$insert_ids[$i].'/'.$temp_data[$i]['file_name']);
                        $new_paths[$i] = 'events/'.$insert_ids[$i].'/'.$temp_data[$i]['file_name'];
                    }
                }
                if(isset($new_paths)) {
                    if($this->model_events->update_multi_images($new_paths, $insert_ids)) {
                        $this->session->set_flashdata('message', 'Your events have been created! Visit mywrevs to view them now.');
                    }
                }
            }
            redirect('admin/admin_account');
        }
        
        //Creates new News posts
        public function create_news() {
            $this->load->library('session');
            $this->load->model('model_news');
            if($this->model_news->post_news()) {
                $this->session->set_flashdata('message', 'Your news has been posted.');
            }
            redirect('admin/admin_account');
        }
}