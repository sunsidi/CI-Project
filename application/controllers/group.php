<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class group extends CI_Controller{
	public function index(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
		$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('group_temp',$result);     
	}
	
		public function groupfullview(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
		$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('group_full',$result);     
	}
      } 