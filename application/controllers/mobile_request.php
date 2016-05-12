<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mobile_request extends CI_Controller {

public function get_events_by_category()
  {
    //echo "category is: ".$category;
    $this->load->library('path');
    $this->load->library('hashmap_cata');
    $this->load->library('session');
    $this->load->model('model_page_visits');
    $eventMap = $this->hashmap_cata->get_EventMap();
    $path = $this->path->getPath();
    //get category from having clicked the link which acts as a submit button
    //          with value giving category
    //$category = $this->input->post('category');  //maybe use get? to show user category of event?
      $this->load->model('model_events');
      // get all events related to chosen category
      //$related_events = $this->model_events->get_events($category);
    
    		if(isset($_GET['category'])){ //request from mobile 
		    $category=$_GET['category'];

//			$result=$this->model_users->get_info($category);
//			echo json_encode($result);
			
//			return;
			//using this line, it works! https://wrevel.com/index.php/main/PWcheck?user_email=yuanshen.ncu@gmail.com&user_pw=$wrevelYS
		};
    
    
    
    if($category == 'culture') {
        $this->model_page_visits->update_page_visits('culture');
    }
    if($category == 'icebreakers') {
        $this->model_page_visits->update_page_visits('icebreakers');
    }
    if($category == 'hotspots') {
        $this->model_page_visits->update_page_visits('hotspots');
    }
    
if(isset($_GET['search'])){

	$search=$_GET['search'];
	$state =$search;
	$zipcode =$search;
}else{

$search=null;
$state =null;
$zipcode =null;
}
$price=null;
        
    	$related_events= $this->model_events->get_latest_related_events($search,$category,$price,$state,$zipcode);

array_pop($related_events);

echo json_encode($related_events);
  //    $data['category'] = $category;
      //$events_states=$this->model_events->get_states();


  }
    
    
      public function get_latest_events(){
    $this->load->library('path');
    $this->load->library('hashmap_cata');
    $this->load->library('session');
    $eventMap = $this->hashmap_cata->get_EventMap();
    $path = $this->path->getPath();
    $this->load->model('model_events');
    $this->load->model('model_page_visits');

    $this->model_page_visits->update_page_visits('latestwrevs');
    
if(isset($_GET['search']))
	$search=$_GET['search'];
else
$search=null;
if(isset($_GET['state']))
	$state=$_GET['state'];
else
$state=null;
if(isset($_GET['zipcode']))
	$zipcode=$_GET['zipcode'];
else
$zipcode=null;
if(isset($_GET['price']))
	$price=$_GET['price'];
else
$price=null;

    $latest_events= $this->model_events->get_latest_events($search,$price,$zipcode,$state);
    $this->model_events->update_views();
    array_pop($latest_events);
    echo json_encode($latest_events);

  }
  
  
  public function get_latest_events_main_search(){
    $this->load->library('path');
    $this->load->library('hashmap_cata');
    $this->load->library('session');
    $eventMap = $this->hashmap_cata->get_EventMap();
    $path = $this->path->getPath();
    $this->load->model('model_events');


if(isset($_GET['search']))
	$search=$_GET['search'];
else
$search=null;


    $latest_events = $this->model_events->get_latest_events_main_search_mobile($search);
    echo json_encode($latest_events);


  }

   public function email_unique_test(){
   	$email=$_GET['email'];
   	$this->load->model('model_users');
   	echo $this->model_users->check_email_exists($email);
   }
   
   public function registration_validation()
    {
     	$username=$_GET['username'];
   	$first_name=$_GET['first_name'];
   	$lastname=$_GET['lastname'];
   	$email=$_GET['email'];
   	$pwd=$_GET['pwd'];
		
	$this->load->library('session'); 
    	$this->load->library('path');
    	$path = $this->path->getPath();
    	$this->load->model('model_users');
    	
    	// email needs unique check!
//		$this->load->library('form_validation');
//		$this->form_validation->set_rules('username-signup','Username','required|trim|is_unique[users.username]|is_unique[temp_users.username]');
//		$this->form_validation->set_rules('email-signup','Email','required|trim|valid_email|is_unique[users.email]|is_unique[temp_users.email]');
//		$this->form_validation->set_rules('password-signup','Password','required|min_length[7]|trim');
//		$this->form_validation->set_rules('cpassword-signup', 'Confirm Password','required|trim|matches[password-signup]' );
//		$this->form_validation->set_rules('agreement-signup','Agreement','callback_check');

				//When user clicks confirm email, the key will be in the url to distinguish unique users
				$key = md5(uniqid());
				$this->load->library('email',array('mailtype'=>'html'));
				$this->email->from('donotreply@wrevel.com', "Wrevel, Inc.");
				$this->email->to($email);
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
				$fullname = $first_name.' '.$lastname;
				$data = array(
    					'username'=> $username,
    					'gender'=>'M',
                                        'email'=> $email,
                                        'fullname'=>$fullname,
                                        'password'=> md5($pwd),
                                        'key' => $key,
                                        'business' => 0);

				if($this->model_users->add_temp_users($data))
				{
					if($this->email->send())
					{
						echo "email_sent";  // email confirmation page
					}
					else
					{
							echo "failed";
					}
			}
		
	}
      
      	public function forgot_password() {
      		
      		$email=$_GET['email'];
		$this->load->model('model_users');

		 if($this->model_users->check_email_exists($email)=='1'){
		 $email_data = $this->model_users->get_info($email);
		$key = $this->model_users->forgot_password($email_data);
		$key = $key['key'];
		$id = $email_data['user_id'];
		$this->load->library('email',array('mailtype'=>'html'));
                $this->email->from('donotreply@wrevel.com', "Wrevel, Inc.");
                $this->email->to($email);
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
                echo "email_reset_succeed";
		 }else{	
		echo "email_not_exist";

		 }
		
	}
	
	
	
	
	public function user_search(){

	    $this->load->model('model_users');
    
    $user_search=trim($_GET['user_search']);
    
    		if($user_search!= "" && $user_search!= " ") {
			$users_search = $this->model_users->search_by_name($user_search);	
			if($users_search['size']>50){  // more than 50 users in result
				$users_search = $this->model_users->search_by_name_limit($user_search,50);
				array_pop($users_search);
				array_pop($users_search);
				$user_search_result=array("SizeExceeded"=>true,"result"=>$users_search);
			}else{
				array_pop($users_search);
				$user_search_result=array("SizeExceeded"=>false,"result"=>$users_search);
			}
		}else{

			$user_search_result=array("SizeExceeded"=>"roll_back");
		}
		
		echo json_encode($user_search_result);
		
	}
        
}