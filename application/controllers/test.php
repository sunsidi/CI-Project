<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test extends CI_Controller{
	public function business_profile(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
		$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('business_profile',$result);     
	}
	public function business_public_profile(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
		$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('business_public_profile',$result);     
	}
}	