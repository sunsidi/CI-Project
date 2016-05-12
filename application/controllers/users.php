<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users extends CI_Controller{
	public function index(){
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
            	$this->load->model('model_users');
            	$users = array();
 
            	$active_users = $this->model_users->order_by_reputation();
            	$eaner_users = $this->model_users->order_by_posting();
            	$buyer_users = $this->model_users->order_by_attending();
            	
            	$data['active_users'] = $active_users;
            	$data['eaner_users'] = $eaner_users;
            	$data['buyer_users'] = $buyer_users;
   
		$nav_data = $this->session->all_userdata();
				
                $result = array_merge($data,$path,$nav_data);
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('Users',$result);     
	}
	
	
	public function signup(){
		$this->load->library('path');
            	$path = $this->path->getPath();
	 $this->load->view('Tech_day _User_signup',$path); 
	
	}
	
	public function signupRegister(){
            	
            	  	
        if(!$this->input->post('email_signup') || !$this->input->post('first_name')){
        
        echo "Required field can not be empty!&nbsp;&nbsp;&nbsp;<a href='https://wrevel.com/users/signup'>Go Back</a>";
        
        }else{
        
        $this->load->library('session'); 
    	//for some reason not emails are being recevied now....not sure what it is
    	$this->load->library('path');
    	$path = $this->path->getPath();
    	$this->load->model('model_users');

				$pwd = substr(md5(date('Y-m-d H:i:s')),10);
			
//				echo $this->input->post('first_name')."   ".$this->input->post('email_signup');   	
				//When user clicks confirm email, the key will be in the url to distinguish unique users
				$key = md5(uniqid());
				$this->load->library('email',array('mailtype'=>'html'));
				$this->email->from('donotreply@wrevel.com', "Wrevel, Inc.");
				$this->email->to($this->input->post('email_signup'));
				$this->email->subject("Welcome to NY TechDay! Please confirm your Wrevel account");
				//message to user confirms see load library email, 2nd argument is setting to html not default text
				$message ="<p> Hello!</p><p>Thank you for signing up at Wrevel.com. We are super excited to have you on board and can’t wait for you to start using Wrevel! Your temporary password is <span style='color:blue'>".$pwd."</span>. Please confirm your account by clicking on the link below and then change your password as soon as possible.</p>";
				$message .= "<p><a href='".base_url()."main/register_user/$key'>Confirm Email</a></p><p>________________________________</p><p>Copyright 2014 Wrevel, Inc.,<i> All Rights Reserved.</i></p><div>Connect with us!</div>";
				$message .= "<div><a href='www.wrevel.com'>www.wrevel.com</a></div>";
				$message .= "<div>Facebook: <a href='www.facebook.com/wrevelinc'>www.facebook.com/wrevelinc</a></div>";
				$message .= "<div>Twitter: <a href='www.twitter.com/wrevelco'>www.twitter.com/wrevelco</a></div>";
				$message .= "<div>Instagram: <a href='www.instagram.com/wrevel '>www.instagram.com/wrevel </a></div>";
				$message .= "<div>Tumblr: <a href='wrevel.tumblr.com'>wrevel.tumblr.com</a></div>";
				$message .= "<div>E-mail: <a href='support@wrevel.com'>support@wrevel.com</a></div>";
				$this->email->message($message);
				$fullname = $this->input->post('first_name');
				$data = array(
    					'username'=> $this->input->post('email_signup'),
    					'gender'=> 'M',
                                        'email'=> $this->input->post('email_signup'),
                                        'fullname'=>$fullname,
                                        'password'=> md5($pwd),
                                        'key' => $key,
                                        'business' => 0);

				if($this->model_users->add_temp_users($data))
				{
					if($this->email->send())
					{
						echo "Sign up successfully! &nbsp;&nbsp;&nbsp;<a href='https://wrevel.com/users/signup'>Go Back</a>"; 
					}
					else
					{
							echo "failed! &nbsp;&nbsp;&nbsp;<a href='https://wrevel.com/users/signup'>Go Back</a>";
					}
			}
		
	   }
	}

	public function user_search(){
   $this->load->library('path');
    $this->load->library('hashmap_cata');
    $this->load->library('session');
    $eventMap = $this->hashmap_cata->get_EventMap();
    $path = $this->path->getPath();
    $this->load->model('model_events');
    $this->load->model('model_page_visits');

    $this->load->model('model_users');
    $this->model_page_visits->update_page_visits('latestwrevs');

    //$search = $this->input->post('search');
    $search = $this->input->post('user_search');

    $search_user=trim($search); 
    
    		if($search_user != "" && $search_user!= " ") {
			$users_search = $this->model_users->search_by_name($search_user);
		}else{
			redirect('users');
		}
		
		if($users_search['size']>100){  // more than 100 users in result
			$size=$users_search['size'];
			$users_search = $this->model_users->search_by_name_limit($search_user,100);
			$users_search['total_size']=$size;
		}
 
    $active_users = $this->model_users->order_by_reputation();
    $eaner_users = $this->model_users->order_by_posting();
    $buyer_users = $this->model_users->order_by_attending();
     
    $data['active_users'] = $active_users;
    $data['eaner_users'] = $eaner_users;
    $data['buyer_users'] = $buyer_users;
    $data['users_search'] = $users_search;
    $nav_data = $this->session->all_userdata();
    $all = array_merge($data,$eventMap,$nav_data);

      //echo "<pre> ",print_r($all,true) ,"</pre>";
    $this->load->view('Create_Wrevel_View', $path);
    $this->load->view('Users',$all);
		
	}
	
      } 
      