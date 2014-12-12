<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class wrevenues extends CI_Controller{
    
    public function wrevenues_main() {
        $this->load->library('path');
        $this->load->model('model_wrevenues');
        $path = $this->path->getPath();
        $this->load->library('session');
        $data['wrevenues'] = $this->model_wrevenues->get_wrevenues();
        $result = array_merge($path,$data);
        //$this->load->view('Create_Wrevel_View',$result);
        $this->load->view('wrevenues_main',$result);     
    }

    public function wrevenues_fullview($id) {
        $this->load->library('path');
        $this->load->model('model_wrevenues');
        $path = $this->path->getPath();
        $this->load->library('session');
        $data['wrevenues'] = $this->model_wrevenues->find_wrevenue($id);
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
        if($this->model_wrevenues->edit_wrevenue($id)) {
            $this->session->set_flashdata('message', 'Your wrevenue information has been changed! Please make sure everything is correct.');
        }
        else {
            $this->session->set_flashdata('message', 'There was an error updating your wrevenue. Please try again');
        }
        redirect('wrevenues/wrevenues_fullview/'.$id);
    }
} 