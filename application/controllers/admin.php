<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller{
	public function admin_account(){
	
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
            	$this->load->model('model_users');
            	$this->load->model('model_events');
            	$this->load->model('model_tickets');
            	
            	$data['all_users'] = $this->model_users->admin_get_users();
            	$data['all_events'] = $this->model_events->admin_get_events();
            	$data['all_tickets'] = $this->model_tickets->admin_get_tickets();
            	
            	  $nav_data = $this->session->all_userdata();
                $result = array_merge($path, $nav_data, $data);
                  $this->load->view('Create_Wrevel_View',$result);
                 $this->load->view('admin_account',$result);
	
        }
}