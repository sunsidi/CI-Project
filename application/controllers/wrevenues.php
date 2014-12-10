<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class wrevenues extends CI_Controller{
    
    public function wrevenues_main() {
        $this->load->library('path');
        $this->load->model('model_wrevenues');
        $path = $this->path->getPath();
        $this->load->library('session');
        $data['wrevenues'] = $this->model_wrevenues->get_wrevenues();
        $result = array_merge($path,$data);
        $this->load->view('Create_Wrevel_View',$result);
        $this->load->view('wrevenues_main',$result);     
    }

    public function wrevenues_fullview($id) {
        $this->load->library('path');
        $this->load->model('model_wrevenues');
        $path = $this->path->getPath();
        $this->load->library('session');
        $data['wrevenues'] = $this->model_wrevenues->find_wrevenue($id);
        if($data['wrevenues'] !== 0) {
            $result = array_merge($path,$data);
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
        if($this->model_wrevenues->create_wrevenue($user_id)) {
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