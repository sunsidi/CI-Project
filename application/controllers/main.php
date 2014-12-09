<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	
public function index()
	{
		$this->load->library('session');
		$this->load->library('path');
		$data = $this->path->getPath();
		$session_counter = $this->session->userdata('is_logged_in');
		if ($session_counter > 0){
                    redirect('showroom/profile');
		}
                else{
                    redirect('welcome/home');
		}	
	}
        //Transfer database commented out for until we need to transfer again. Type in the url to start the transfer.
	/*public function this_is_not_a_test() {
		$this->load->model('model_transfer_data');
		$number = $this->model_transfer_data->lastcheck();
		echo $number;
	}*/
        
	//Delete your friend off your friends list.
	public function delete_friend($friend_user_id) {
		$this->load->library('session');
		$this->load->model('model_users');
		$this->load->model('model_friend_request');
		$email = $this->session->userdata('email');
		
		$user_id = $this->model_users->get_userID($email);
		$friend_data = $this->model_users->get_email($friend_user_id);
		
		$this->model_friend_request->delete_friend($user_id, $friend_user_id);
		
		$this->session->set_flashdata('message', $friend_data[0]['fullname'].'has been deleted from your friends list.');
		
		redirect('showroom/profile');
	}
	
	//notification
	public function friend_request($friend_user_id) {
            $this->load->helper('url');
            $this->load->library('session');
            $this->load->model('model_users');
            $this->load->model('model_friend_request');
            $email = $this->session->userdata('email');
            $my_name = $this->model_users->get_name($email);
            
            $my_user_id = $this->model_users->get_userID($email);
            $friend_data = $this->model_users->get_email($friend_user_id);
            $friend_email = $friend_data[0]['email'];
            if($this->model_friend_request->add_friend_request($my_user_id, $friend_user_id)) {
                $this->session->set_flashdata('message', 'A friend request has been sent. Please wait for confirmation.');
                $this->load->library('email',array('mailtype'=>'html'));
                $this->email->from('donotreply@wrevel.com', "Wrevel, Inc.");
                $this->email->to($friend_email);
                $this->email->subject("Friend Request Received!");
                //message to user confirms see load library email, 2nd argument is setting to html not default text
                $message ="<p> Hello ".$friend_data[0]['fullname']."!"."</p><p>You have just received a friends request from ".$my_name.". You can click on the link below to Accept or Decline. </p>";
                $message .= "<p><a href='".base_url()."showroom/profile'>Please check your notifications to accept.</a></p><p>________________________________</p><p>Copyright 2014 Wrevel, Inc.,<i> All Rights Reserved.</i></p><div>Connect with us!</div>";
                $message .= "<div>www.wrevel.com</div>";
                $message .= "<div>Facebook: www.facebook.com/wrevelinc</div>";
                $message .= "<div>Twitter: www.twitter.com/wrevelco</div>";
                $message .= "<div>Instagram: www.instagram.com/wrevel</div>";
                $message .= "<div>Tumblr: wrevel.tumblr.com</div>";
                $message .= "<div>E-mail: support@wrevel.com</div>";
                $this->email->message($message);
                $this->email->send();
            }
            else {
                $this->session->set_flashdata('message', 'You have already sent a friend request or already friends with this person.');
            }
                
            redirect('public_profile/user/'.$friend_user_id);
	}
	
	public function accept_decline($sender_temp, $sender_email, $note_id){
		$this->load->model('model_users');
		$this->load->model('model_friend_request');
		$this->load->library('session');
		$accepter = $this->session->userdata('email');
                $accepter_id = $this->model_users->get_userID($accepter);
		$sender = trim($sender_temp . "@" . $sender_email);
		$sender_fullname = $this->model_users->get_name($sender);
                $sender_user_id = $this->model_users->get_userID($sender);
		$formSubmit = $this->input->post('submit');
		if( $formSubmit == 'Accept' ) {
                    $this->session->set_flashdata('message','You are now friends with '. $sender_fullname);
                    $this->model_friend_request->add_friend($note_id);
                    $this->model_friend_request->remove_notification($note_id);
                    redirect('showroom/notify2/');

		}
                else {
                    if( $formSubmit == 'Decline' )  {
                        $this->session->set_flashdata('message','You declined a friend request from '. $sender_fullname);
			$this->model_friend_request->remove_notification($note_id);
                        redirect('showroom/notify2/');
                    }
		}
	}
	
	public function remove_notification($note_id) {
		$this->load->library('session');
		$this->load->model('model_friend_request');
		$this->model_friend_request->remove_notification($note_id);
		$this->session->set_flashdata('message','Notification removed.');
		redirect('showroom/notify2');
	}
	
	public function forgot_password() {
		$this->load->model('model_users');
		$email_data = $this->model_users->get_info($this->input->post('email_reset'));
		$key = $this->model_users->forgot_password($email_data);
		$key = $key['key'];
		$id = $email_data['user_id'];
		$this->load->library('email',array('mailtype'=>'html'));
                $this->email->from('donotreply@wrevel.com', "Wrevel, Inc.");
                $this->email->to($this->input->post('email_reset'));
                $this->email->subject("Password Reset");
                //message to user confirms see load library email, 2nd argument is setting to html not default text
                $message ="<p> Hello! </p><p>You have recently requested to reset your password. Click the link below to receive a temporary password. If you did not request a new password, please ignore this email and discard it.</p>";
                $message .= "<p><a href='".base_url()."main/password_reset/".$key."/".$id."'>Reset Password.</a></p><p>________________________________</p><p>Copyright 2014 Wrevel, Inc.,<i> All Rights Reserved.</i></p><div>Connect with us!</div>";
                $message .= "<div>www.wrevel.com</div>";
                $message .= "<div>Facebook: www.facebook.com/wrevelinc</div>";
                $message .= "<div>Twitter: www.twitter.com/wrevelco</div>";
                $message .= "<div>Instagram: www.instagram.com/wrevel</div>";
                $message .= "<div>Tumblr: wrevel.tumblr.com</div>";
                $message .= "<div>E-mail: support@wrevel.com</div>";
                $this->email->message($message);
                $this->email->send();
                redirect('main/email_reset');
	}
	
        //Job applications.
        public function job_application() {
            $this->load->library('session');
            $this->load->library('email',array('mailtype'=>'html'));
            $this->email->from($this->input->post('job_email'));
            $this->email->to('jobs@wrevel.com');
            $this->email->subject("Job Application");
            //message to user confirms see load library email, 2nd argument is setting to html not default text
            $message ="<p>Job Category: ".$this->input->post('category')."</p>";
            $message .= "<p>Name: ".$this->input->post('f_name')." ". $this->input->post('l_name')."</p>";
            $message .= "<p>Phone: ".$this->input->post('phone_number')."</p>";
            $message .= "<p>Email: ".$this->input->post('job_email')."</p>";
            $message .= "<p>Description: ".$this->input->post('description')."</p>";
            $message .= "<p>Website: ".$this->input->post('website')."</p>";
            
            $this->email->message($message);
            $uniqid = md5(uniqid());
            mkdir('./uploads/'.$uniqid,'0777',true);
            chmod('./uploads/'.$uniqid, 0777);
            $config['upload_path']='./uploads/'.$uniqid;
            $config['allowed_types']= 'doc|docx|rtf|txt|pdf|tif';
            $config['max_size']	= '10000';
            //$config['file_name'] = md5(uniqid());
            //echo $image_name;
            $this->load->library('upload',$config);
            
            if ($this->upload->do_upload('cover_letter')) {
                $cover_letter = $this->upload->data();
                //echo print_r($cover_letter, TRUE);
                $cover_letter_path = $cover_letter['full_path'];
            }
            else {
                $this->session->set_flashdata('message', 'Please make sure you entered all the required fields and attached a cover letter in the form of .doc, .docx, .txt, .pdf');
                redirect('info/careers_apply');
            }
            if($this->upload->do_upload('resume')) {
                $resume = $this->upload->data();
                //echo print_r($resume, TRUE);
                $resume_path = $resume['full_path'];
            }
            else {
                $this->session->set_flashdata('message', 'Please make sure you entered all the required fields and attached a resume in the form of .doc, .docx, .txt, .pdf');
                redirect('info/careers_apply');
            }
            $this->email->attach($cover_letter_path);
            $this->email->attach($resume_path);
            $this->email->send();
            $this->session->set_flashdata('message', 'We have received your email and you will hear from us shortly. Thanks for your interest in Wrevel!');
            redirect('info/careers_apply');
        }
        
    public function login_validation()
    {
	
	$this->load->library('session');
	$this->load->library('form_validation');
	$this->form_validation->set_rules('email','Email Address','required|valid_email|');
        $this->form_validation->set_rules('password','Password','required|md5|callback_PWcheck');
        
	
	
	
	if($this->form_validation->run())
	 {
		$data = array(
                        'email'=> $this->input->post('email'),
                        'is_logged_in'=>1                          
                    );
	
		$this->session->set_userdata($data);
		//redirect('profile');
		redirect('showroom/profile');
	 }
	 else
	 {
                $this->load->library('path');
                $this->load->library('facebook');
		$data = $this->path->getPath();
		$data['login_url'] = $this->facebook->login_url();
                $data['user'] = $this->facebook->get_user();
		$this->load->view('home',$data);
                echo "<script type='text/javascript'> ";
                echo "window.onload = function() {";
                echo "$('#sign-in').modal('show');}</script>";
		
	 }
	 
    }
    
    //MARKED FOR DELETION.
	public function myusers()
	{
		$this->load->model('model_friend_request');
		$this->load->model('model_users');
		$this->load->library('session');
		$this->load->library('path');
		$path = $this->path->getPath();
	

		$email = $this->session->userdata('email');

			$data1 = array(
                       'user123'=> $this->input->post('user'),
                  		'sender_email' => $this->session->userdata('email')
                    );	
		 $this->session->set_userdata($data1);

		 
		 $FID   = $this->session->userdata('user123');

	

	
		 if($this->model_users->is_user($FID)){

		 
        					redirect('showroom/friend');

        		

		 	//$this->load->view('possible_user',$path);
			 }else if ($this->model_users->is_email($FID)){
			 	
			 		$data2 = $this->model_users->get_info($FID);
        			$data2['PATH_IMG'] = $path['PATH_IMG'];
	    			$data2['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];
        			$data2['PATH_PROFILE'] = $path['PATH_PROFILE'];
        			//echo "debug: This is a email \n";
        			echo 'User receiving: '. $FID;
        			echo 'debug: User sending ' . $email;
        			//file is to write that the user sending sent a friend request (update fr database)

				

        					redirect('showroom/friend');
        			
			 }else{
		 	echo 'could not find a username or email';
		 	}

		


	}

		public function isFriend($user1, $user2)
		{
			$this->load->model('model_friend_request');
			$file_for_user1 = $this->model_friend_request->get_friendlists($user1);

			/*
				Parse the file, if we find user2 in user1's file, return true
			*/	
				$file = fopen("$file_for_user1/file.txt");
				$f = fopen($file,'r');
				if( strpos(file_get_contents("$file"),$user1) !== false) {
					return true;
					}else{
					 return false;}
		}
        
	public function PWcheck()
	{
		$this->load->model('model_users');
		$condition = $this->model_users->can_log_in();
                if($condition == 2)
		{
                    return true;
		}
                else if($condition == 3)
                {
                    $this->form_validation->set_message('PWcheck', 'Please make sure you have confirmed your email.');
                    return false;
                }
                else if($condition == 4)
                {
                    $this->form_validation->set_message('PWcheck', 'Please make sure you entered the correct password.');
                    return false;
                }
                else if(count($condition) >= 5)
                {
                	$id = $condition['user_id'];
                	$key = $condition['key'];
                	$this->load->library('email',array('mailtype'=>'html'));
	                $this->email->from('donotreply@wrevel.com', "Wrevel, Inc.");
	                $this->email->to($this->input->post('email'));
	                $this->email->subject("Password Reset");
	                //message to user confirms see load library email, 2nd argument is setting to html not default text
	                $message ="<p> Hello! </p><p>We at Wrevel have recently transferred all our data over to this new and improved site! As a result we require all old users to change their password. Click the link below to receive a temporary password. If you did not try to log into our site, please ignore this email and discard it.</p>";
	                $message .= "<p><a href='".base_url()."main/password_reset/".$key."/".$id."'>Reset Password.</a></p><p>________________________________</p><p>Copyright 2014 Wrevel, Inc.,<i> All Rights Reserved.</i></p><div>Connect with us!</div>";
	                $message .= "<div>www.wrevel.com</div>";
	                $message .= "<div>Facebook: www.facebook.com/wrevelinc</div>";
	                $message .= "<div>Twitter: www.twitter.com/wrevelco</div>";
	                $message .= "<div>Instagram: www.instagram.com/wrevel</div>";
	                $message .= "<div>Tumblr: wrevel.tumblr.com</div>";
	                $message .= "<div>E-mail: support@wrevel.com</div>";
	                $this->email->message($message);
	                $this->email->send();
	                redirect('main/email_reset');
                }
		else
		{
                    $this->form_validation->set_message('PWcheck','Incorrect Email/Password combination, Please sign up for a free account.');
                    return false;
		}
	}
	
	public function password_reset($key, $id) {
		$this->load->library('path');
		$path = $this->path->getPath();
		$this->load->model('model_users');
		$condition = $this->model_users->reset_password($key, $id);
		if($condition) {
			$this->load->library('email',array('mailtype'=>'html'));
	                $this->email->from('donotreply@wrevel.com', "Wrevel, Inc.");
	                $this->email->to($condition['email']);
	                $this->email->subject("Temporary Password");
	                //message to user confirms see load library email, 2nd argument is setting to html not default text
	                $message ="<p> Hello! </p><p>Your temporary password has been setup. Please log in with the password provided below. If you did not request a password reset, we recommend that you change your password or contact us immediately.</p>";
	                $message .= "<p>Your temporary password: ".$condition['password']."</p><p>Please log in and change your password as soon as possible.</p><p>________________________________</p><p>Copyright 2014 Wrevel, Inc.,<i> All Rights Reserved.</i></p><div>Connect with us!</div>";
	                $message .= "<div>www.wrevel.com</div>";
	                $message .= "<div>Facebook: www.facebook.com/wrevelinc</div>";
	                $message .= "<div>Twitter: www.twitter.com/wrevelco</div>";
	                $message .= "<div>Instagram: www.instagram.com/wrevel</div>";
	                $message .= "<div>Tumblr: wrevel.tumblr.com</div>";
	                $message .= "<div>E-mail: support@wrevel.com</div>";
	                $this->email->message($message);
	                $this->email->send();
		}
		$this->load->view('temporarypassword', $path);
	}
	
	public function email_reset() {
		$this->load->library('path');
		$path = $this->path->getPath();
		$this->load->view('resetpassword', $path);
	}
	
    public function test()
    {
	//$this->load->library('session');
    $data = array(
    					'username'=> $this->input->post('username'),
    					'gender'=> $this->input->post('gender'),
                        'email'=> $this->input->post('email'),
                        'full_name'=>$this->input->post('full_name'),
                        'password'=> $this->input->post('password'),
                        'cpassword'=> $this->input->post('cpassword')
                    );	
     $this->load->view('test',$data);
    }
    //MARKED FOR DELETION.
     public function test_search()
    {
	//$this->load->library('session');
    $data = array(
    					'username'=> $this->input->post('username'),
    					'gender'=> $this->input->post('gender'),
                        'email'=> $this->input->post('email'),
                        'full_name'=>$this->input->post('full_name'),
                        'password'=> $this->input->post('password'),
                        'cpassword'=> $this->input->post('cpassword')
                    );	
     $this->load->view('test_search',$data);
    }
    
	public function signup()
	{
		$this->load->library('path');
		$path = $this->path->getPath();
		$this->load->view('signup', $path);
		
	}

	public function update_profile(){
		{
			$this->load->model('model_users');
			$this->load->library('session');
		//if($this->session->userdata('is_logged_in') == 1){
				$email = $this->session->userdata('email');

		
		$config['upload_path']='./uploads/'; //change it to a user specific directory
		//if user specific directory does not exist...then create one and then upload
		$config['allowed_types']= 'gif|jpg|png|jpeg';

		$config['max_size']	= '10000';

		$config['file_name'] = md5(uniqid());
		//echo $image_name;
		$this->load->library('upload',$config);

		$data = array(
                        'email'=> $this->session->userdata('email'),
                        
                        'is_logged_in'=>1                          
                    );
	
		$this->session->set_userdata($data);
                
                        $this->model_users->edit_info($email);
			if (!$this->upload->do_upload("userprofile"))
                        {
                        	$error = array('error' => $this->upload->display_errors());

				$this->load->view('upload_form', $error);
                            	if($this->session->userdata('image_key') == 'default_profile.jpg'){
                                	$image_name = 'default_profile.jpg'; 
                            	}
                            	redirect('showroom/profile');
                            
                        }
			else{
				$upload_data = $this->upload->data();
				//$data = array('upload_data' => $this->upload->data());
				$image_name = $upload_data['file_name'];
                                $updateDB = $this->model_users->add_image($image_name);
                                if($updateDB){
                                    redirect('showroom/profile');
                                }
                                else{
                                    echo "could not update database";
                                }	
                        }
	}
        }

    public function registration_validation()
    {
    	//for some reason not emails are being recevied now....not sure what it is
    	$this->load->library('path');
    	$path = $this->path->getPath();
    	$this->load->model('model_users');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username-signup','Username','required|trim|is_unique[users.username]|is_unique[temp_users.username]');
		$this->form_validation->set_rules('email-signup','Email','required|trim|valid_email|is_unique[users.email]|is_unique[temp_users.email]');
		$this->form_validation->set_rules('password-signup','Password','required|min_length[7]|trim');
		$this->form_validation->set_rules('cpassword-signup', 'Confirm Password','required|trim|matches[password-signup]' );
		$this->form_validation->set_rules('agreement-signup','Agreement','callback_check');


		//$this->form_validation->setmessage('is_unique',"The email address already exists");
			if($this->form_validation->run()){
				//When user clicks confirm email, the key will be in the url to distinguish unique users
				$key = md5(uniqid());
				$this->load->library('email',array('mailtype'=>'html'));
				$this->email->from('donotreply@wrevel.com', "Wrevel, Inc.");
				$this->email->to($this->input->post('email-signup'));
				$this->email->subject("Please confirm your account");
				//message to user confirms see load library email, 2nd argument is setting to html not default text
				$message ="<p> Hello!</p><p>Thank you for signing up at Wrevel.com. We are super excited to have you on board and can’t wait for you to start using Wrevel! Please confirm your account by clicking on the link below.</p>";
				$message .= "<p><a href='".base_url()."main/register_user/$key'>Confirm Email</a></p><p>________________________________</p><p>Copyright 2014 Wrevel, Inc.,<i> All Rights Reserved.</i></p><div>Connect with us!</div>";
				$message .= "<div><a href='www.wrevel.com'>www.wrevel.com</a></div>";
				$message .= "<div>Facebook: <a href='www.facebook.com/wrevelinc'>www.facebook.com/wrevelinc</a></div>";
				$message .= "<div>Twitter: <a href='www.twitter.com/wrevelco'>www.twitter.com/wrevelco</a></div>";
				$message .= "<div>Instagram: <a href='www.instagram.com/wrevel '>www.instagram.com/wrevel </a></div>";
				$message .= "<div>Tumblr: <a href='wrevel.tumblr.com'>wrevel.tumblr.com</a></div>";
				$message .= "<div>E-mail: <a href='support@wrevel.com'>support@wrevel.com</a></div>";
				$this->email->message($message);
				$fullname = $this->input->post('first_name-signup').' '.$this->input->post('last_name-signup');
				    $data = array(
    					'username'=> $this->input->post('username-signup'),
    					'gender'=> $this->input->post('gender-signup'),
                        'email'=> $this->input->post('email-signup'),
                        'fullname'=>$fullname,
                        'password'=> md5($this->input->post('password-signup')),
                        'key' => $key
                        //'icon' => null;
                    );

				if($this->model_users->add_temp_users($data))
				{
					if($this->email->send())
					{
						$this->load->view('aftersignup', $path);
					}
					else
					{
							echo "failed";
					}
			}
		} else {
		//echo gettype(validation_errors()). "\n";
			/*echo validation_errors();
			echo "\n";
			echo "Please try to sign up again.";*/
			$this->load->view('home', $path);
			echo "<script type='text/javascript'> ";
                    	echo "window.onload = function() {";
                    	echo "$('#sign-up').modal('show');}</script>";
		}
		
	}
	public function register_user($key)
	{
		//load  application/model/model_users.php
		$this->load->model('model_users');
		$this->load->library('session');
		$this->load->library('path');
		$path = $this->path->getPath();
		
		if($this->model_users->key_valid($key))
		{
			//call add_user from model_users.php
			if($newemail = $this->model_users->add_user($key))
			{
				//echo "success!";
				//create directory
				//mkdir("./uploads/".$newemail);
				$data = array
				(
					'email' => $newemail,
					'is_logged_in' => 1
				);
				$this->session->set_userdata($data);
				$this->load->view('afterconfirm', $path);
				//redirect('main/members');
				//change to redirect to profile
			}
			else echo "failed"; 
		}

		else
		{
			echo "fail";
		}
		
	}
	public function check()
	{
		if ($this->input->post('agreement-signup') != null) return true;
		
		else
		{ 
			$this->form_validation->set_message('check','You need to agree to the terms of use!');
			return false;
		}

	}
	//things added
	public function logout(){
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect('main/index');
	}
	public function pictures(){
		$this->load->view('pictures');
	}
	
	
	public function add_mywrev(){
		$this->load->library('session');
		
	}
	public function mywrevs()
	{
    $this->load->library('path');
    $this->load->model('model_users');
    $path = $this->path->getPath();
    $this->load->library('session');
    $email = $this->session->userdata('email');
    $info = $this->model_users->get_info($email);
    
    //This loads all the necessary data for the nav bar.
    $nav_data = $this->session->all_userdata();
    $info = $this->model_users->get_info($email);
    $result = array_merge($info,$nav_data,$path);
    //echo "<pre> ",print_r($result,true) ,"</pre>";
    $this->load->view('Create_Wrevel_View',$path);
    $this->load->view('mywrevs',$result);
    
	}
//MARKED FOR DELETION.
	public function myusers2()
	{
		$this->load->model('model_users');
		$this->load->library('session');
		$this->load->library('path');
		$path = $this->path->getPath();


				
		 $FID   = $this->input->post('user');
		$this->session->set_userdata($FID);
		 if($this->model_users->is_user($FID)){

		 	//DEBUG -- working


        	//get email from session
        	
        	
        	
                //array_push($data,$this->model_users->get_events($userID));
        		
        			//if the inout was not an email than it should be a user
        			$data2 = $this->model_users->get_info_with_user($FID);
        			$data2['PATH_IMG'] = $path['PATH_IMG'];
	    			$data2['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];

        			$data2['PATH_PROFILE'] = $path['PATH_PROFILE'];
        			echo 'debug: This is a username';
        			$this->load->view('friend_view_showroom',$data2);

        		

		 	//$this->load->view('possible_user',$path);
			 }else if ($this->model_users->is_email($FID)){
			 		$data2 = $this->model_users->get_info($FID);
        			$data2['PATH_IMG'] = $path['PATH_IMG'];
	    			$data2['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];

        			$data2['PATH_PROFILE'] = $path['PATH_PROFILE'];
        			echo 'debug: This is a email';
        			$this->load->view('friend_view_showroom',$data2);


			 }else{
		 	echo 'could not find a username or email';
		 	}

		


	}
	public function get_users($user)
	{
		/*Use case of mywrevs
			1. User clicks mywrevs in showroom with a href to main/mywrevs
			2. User clicks a wrev such as culture,
			 it calls main/get_related_events/ with the category as the final path argument

		*/

			/*
				1. User enters a name in showroom and hits enter with a view to possible users
				if FID is connected to a username in the database, show view of possible users

				if fid is not connected, load no possible user view
				---No front end: so create a simple view and echo all the possible users from the database
				2. User clicks a user, it has a path of get_users/$username

			*/

	}
public function get_related_events($category)
  {
    //echo "category is: ".$category;
    $this->load->library('path');
    $this->load->library('hashmap_cata');
    $this->load->library('session');
    $eventMap = $this->hashmap_cata->get_EventMap();
    $path = $this->path->getPath();
    //get category from having clicked the link which acts as a submit button
    //          with value giving category
    //$category = $this->input->post('category');  //maybe use get? to show user category of event?
      $this->load->model('model_events');
      // get all events related to chosen category
      //$related_events = $this->model_events->get_events($category);


      $search = $this->input->post('search');
      $price = $this->input->post('price');
        $state = $this->input->post('state');
        $zipcode = $this->input->post('zipcode');
      $related_events= $this->model_events->get_latest_related_events($search,$category,$price,$state,$zipcode);



      $result = array_merge($related_events, $path);
      $data = array_merge($result,$eventMap);
      //pass what type of event we are looking for to allow the usage of just one html view for 
      //        the different pages
      $data['category'] = $category;
      //$events_states=$this->model_events->get_states();

      $events_states = $this->model_events->get_category_states($category);
        $data['states']= $events_states;

        /*TODO */
        $events_zipcode = $this->model_events->get_category_zipcode($category);
        $data['zipcode']=  $events_zipcode;
	$nav_data = $this->session->all_userdata();
    	$result = array_merge($data,$nav_data,$path);


      //print_r($result);
      //echo print_r($result);
      //echo "<pre> ",print_r($data,true) ,"</pre>";


         //echo "<pre> ",print_r($nav_data,true) ,"</pre>";

      //print_r($result);
      //echo print_r($result);
      $this->load->view('Create_Wrevel_View', $path);
      $this->load->view('event_template',$result);

      //$this->model_events->print_values();
  }
		public function get_related_events_search($category)
	{
		//echo "category is: ".$category;
		$this->load->library('path');
		$this->load->library('hashmap_cata');
		$eventMap = $this->hashmap_cata->get_EventMap();
		$path = $this->path->getPath();
		//get category from having clicked the link which acts as a submit button
		//					with value giving category
		//$category = $this->input->post('category');  //maybe use get? to show user category of event?
    	$this->load->model('model_events');
    	// get all events related to chosen category
    	//$related_events = $this->model_events->get_events($category);


    	$search = $this->input->post('search');
    	$price = $this->input->post('price');
        $state = $this->input->post('state');

        //CHECK THIS METHOD ITS CAUSING SOME REPETITTION!!!!!!
    	$related_events= $this->model_events->get_latest_related_events($search,$category,$price,$state);


    	//echo "<pre> ",print_r($related_events,true) ,"</pre>";

    	$result = array_merge($related_events, $path);
    	$data = array_merge($result,$eventMap);
    	//pass what type of event we are looking for to allow the usage of just one html view for 
    	//				the different pages
    	$data['category'] = $category;
    	//$events_states=$this->model_events->get_states();
        $events_states = $this->model_events->get_category_states($category);
        $data['states']= $events_states;



    	//print_r($result);
    	//echo print_r($result);
    	//echo "<pre> ",print_r($data,true) ,"</pre>";
    	$this->load->view('event_template',$data);

    	//$this->model_events->print_values();

	}
  public function get_latest_events(){
    $this->load->library('path');
    $this->load->library('hashmap_cata');
    $this->load->library('session');
    $eventMap = $this->hashmap_cata->get_EventMap();
    $path = $this->path->getPath();
    $this->load->model('model_events');



    //$search = $this->input->post('search');
    $search = $this->input->post('search');
      $price = $this->input->post('price');
        $state = $this->input->post('state');
        $zipcode = $this->input->post('zipcode');

        //echo $zipcode . "<br>";
        //echo $state. "<br>";
        //echo $price."<br>";

    $latest_events = $this->model_events->get_latest_events($search,$price,$zipcode,$state);
    
 

    $data = array_merge($latest_events,$path);
    $events_states = $this->model_events->get_states();
        $data['states']= $events_states;
        $events_zipcode = $this->model_events->get_zipcode();
        $data['zipcode'] = $events_zipcode;
    $nav_data = $this->session->all_userdata();
    $all = array_merge($data,$eventMap,$nav_data);

      //echo "<pre> ",print_r($all,true) ,"</pre>";
    $this->load->view('Create_Wrevel_View', $path);
    $this->load->view('latestwrevs',$all);

  }

	
	public function loginout()
{
	$this->load->library('session');
	$this->session->sess_destroy();
	redirect('welcome/home');
}
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */