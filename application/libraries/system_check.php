<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class System_check {
        
        function __construct()
        {
		$this->load->library('path');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('model_users');
        }
        
        public function login_check()
	{
		if($this->session->userdata('is_logged_in')==1)
		{
			//$this->load->view('showroom');
			echo 1;
			$this->load->view('test');
			return true;
		}
		else
		{
			$this->load->view('test');
			echo 0;
			return false;
		}
		
		
	}
    
}

?>