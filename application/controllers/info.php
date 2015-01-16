<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class info extends CI_Controller{
	public function aboutus(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
		$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('aboutus',$result);     
	}
	
	public function blog(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
                $this->load->model('model_blogs');
                $data['blogs'] = $this->model_blogs->get_blogs();
                $result = array_merge($path,$data);
                //echo '<pre>', print_r($data, true), '</pre>';
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('blog',$result);
	}
	public function blog0(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
                $nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('blog0',$result);
	}
	public function blog1(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
                $nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('blog1',$result);
	}
	public function blog2(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
                $nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('blog2',$result);
	}
	
	public function press(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
                $nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('press',$result);
	}
	
	public function terms(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
            	$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('terms',$result);
	}
	
	public function privacy(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
            	$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('privacy',$result);
	}
	
	public function HowItWorks(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
            	$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('HowItWorks',$result);
	}
	
	public function pricing(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
            	$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('pricing',$result);
	}
	
	public function contactus(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
            	$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('contactus',$result);
	}
	public function careers(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
            	$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('careers',$result);
	}
	
	public function careers_apply(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
            	$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('careers_apply',$result);
	}
	
	public function FAQ(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
            	$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
               	$this->load->view('Create_Wrevel_View',$result);
                $this->load->view('FAQ',$result);
	}
	public function partners(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
            	$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('partners',$result);   
	}
	public function nation(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
            	$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('nation',$result);
	}
	public function ticketing_platform(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
            	$nav_data = $this->session->all_userdata();
                $result = array_merge($path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('ticketing_platform',$result);
	}
	
	public function contactWrevel(){
		$this->load->library('session');
		$this->load->library('email', array('mailtype'=>'html'));
		if (isset($_POST['submit'])){
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');
			$email = $this->input->post('email');
			$this->email->from($email);
			$this->email->to('wrevelco@gmail.com');
			$this->email->subject($subject);
			//message to user confirms see load library email, 2nd argument is setting to html not default text
		
			$this->email->message($message);
			$this->email->send();
		}
		$this->session->set_flashdata('message', "Thank you for submitting your message.<br> We will review it and get back to you soon.");
		redirect('info/contactus');
	
	}
	
	
} 