<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->model('model_users');
		$this->load->library('path');
		$path = $this->path->getPath();
		$this->load->view('Create_Wrevel_View',$path);
                $this->load->library('facebook');
                $this->load->library('session');
                $data = $this->path->getPath();
                $data['login_url'] = $this->facebook->login_url();
                $data['user'] = $this->facebook->get_user();
		 
                $this->load->view('Create_Wrevel_View',$path);
                if(isset($data['user']['email'])){
                
                 $this->add_facebook_user($data['user']);
                $this->model_users->add_reputation($data['user']['email'],1);
                    $activation_status=$this->model_users->get_activation_status($data['user']['email']);
                    $datatest = array(
                        'email'=> $data['user']['email'],
                        'is_logged_in'=>1,
                        'activation'=>$activation_status                          
                    );
                    $this->session->set_userdata($datatest);
                   
                    redirect('showroom/profile');
                }
                else {
                	//echo '<pre>', print_r($this->session->all_userdata(), true), '</pre>';
			
			$this->load->view('home',$data);
			
		}
		
	}
	
	public function home()
	{
		$this->load->model('model_users');
		$this->load->library('path');
		$data = $this->path->getPath();
		$this->load->library('session');
		$this->load->library('facebook');
		$data['login_url'] = $this->facebook->login_url();
                $data['user'] = $this->facebook->get_user();
                
                
                if(isset($data['user']['email'])){
                	$this->add_facebook_user($data['user']);
                	$this->model_users->add_reputation($data['user']['email'],1);  // this line doesn't work, no idea why?
                    $activation_status=$this->model_users->get_activation_status($data['user']['email']);
                    $datatest = array(
                        'email'=> $data['user']['email'],
                        'is_logged_in'=>1,
                        'activation'=>$activation_status                          
                    );
                    $this->session->set_userdata($datatest);
                    
                    redirect('showroom/profile');
                }
                else {
			//echo '<pre>', print_r($this->session->userdata, true), '</pre>';
			$this->load->view('home',$data);
			//This is required for when user tries to go to the profile page without being logged in.
                	if($this->session->userdata('prompt_log_in')) {
                		$this->session->unset_userdata('prompt_log_in');
                    		echo "<script type='text/javascript'> ";
                    		echo "window.onload = function() {";
                   		echo "$('#sign-in').modal('show');";
                    		echo "alert('please log in or sign up')} </script>";
                    		//this is required when user logs out and is redirected to home page.
                    		
                	}
                	//$this->session->unset_userdata('prompt_log_in');
                }
                
	}
	
	public function PW_CHECK()
	{
		if($this->input->post("PW")== "pheonix2014")
			redirect("welcome/home");
	}
	
	
	
	public function test()
	{
		$this->load->helper('date');
		echo $this->input->post("date")."    ";
		echo $this->input->post("time");
		echo human_to_unix($this->input->post("date"));

	}
	public function add_facebook_user($user_data) {
		$this->load->model('model_users');
		$this->load->library('session');
		
		$this->model_users->add_facebook_user($user_data);
	}
	
        
       
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */