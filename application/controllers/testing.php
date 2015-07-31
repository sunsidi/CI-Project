<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class testing extends CI_Controller{
	public function toastofbrooklyn(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
		$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('toastofbrooklyn',$result);     
	}
	public function confirm_ticket(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
		$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('confirm-ticket',$result);     
	}
	public function createwrev(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
		$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('createwrev',$result);     
	}
	
}	
