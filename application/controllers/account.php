<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class account extends CI_Controller{
	function __construct()
        {
                parent::__construct();
		$this->load->library('session');
		$sessionData = $this->session->all_userdata();
		$logged_in = $this->session->userdata('is_logged_in');
		//If the user is not logged in, prompt them to log in or sign up.
		if(!$logged_in){
		    $prompt = array('prompt_log_in' => 1);
		    $this->session->set_userdata($prompt);
		    redirect('welcome/home'); 
		}
		    //Else continue to load profile.
		else{
		require_once(dirname(__FILE__) . '/config.php');
		
		
		// Tested on PHP 5.2, 5.3

		// This snippet (and some of the curl code) due to the Facebook SDK.
		if (!function_exists('curl_init')) {
		throw new Exception('Stripe needs the CURL PHP extension.');
		}
		if (!function_exists('json_decode')) {
		throw new Exception('Stripe needs the JSON PHP extension.');
		}
		if (!function_exists('mb_detect_encoding')) {
		throw new Exception('Stripe needs the Multibyte String PHP extension.');
		}

		// Stripe singleton


		// Utilities
		require(dirname(__FILE__) . '/Stripe/Util.php');
		require(dirname(__FILE__) . '/Stripe/Util/Set.php');

		// Errors
		require(dirname(__FILE__) . '/Stripe/Error.php');
		require(dirname(__FILE__) . '/Stripe/ApiError.php');
		require(dirname(__FILE__) . '/Stripe/ApiConnectionError.php');
		require(dirname(__FILE__) . '/Stripe/AuthenticationError.php');
		require(dirname(__FILE__) . '/Stripe/CardError.php');
		require(dirname(__FILE__) . '/Stripe/InvalidRequestError.php');
		require(dirname(__FILE__) . '/Stripe/RateLimitError.php');

		// Plumbing
		require(dirname(__FILE__) . '/Stripe/Object.php');
		require(dirname(__FILE__) . '/Stripe/ApiRequestor.php');
		require(dirname(__FILE__) . '/Stripe/ApiResource.php');
		require(dirname(__FILE__) . '/Stripe/SingletonApiResource.php');
		require(dirname(__FILE__) . '/Stripe/AttachedObject.php');
		require(dirname(__FILE__) . '/Stripe/List.php');
		
		// Stripe API Resources
		require(dirname(__FILE__) . '/Stripe/Account.php');
		require(dirname(__FILE__) . '/Stripe/Card.php');
		require(dirname(__FILE__) . '/Stripe/Balance.php');
		require(dirname(__FILE__) . '/Stripe/BalanceTransaction.php');
		require(dirname(__FILE__) . '/Stripe/Charge.php');
		require(dirname(__FILE__) . '/Stripe/Customer.php');
		require(dirname(__FILE__) . '/Stripe/Invoice.php');
		require(dirname(__FILE__) . '/Stripe/InvoiceItem.php');
		require(dirname(__FILE__) . '/Stripe/Plan.php');
		require(dirname(__FILE__) . '/Stripe/Subscription.php');
		require(dirname(__FILE__) . '/Stripe/Token.php');
		require(dirname(__FILE__) . '/Stripe/Coupon.php');
		require(dirname(__FILE__) . '/Stripe/Event.php');
		require(dirname(__FILE__) . '/Stripe/Transfer.php');
		require(dirname(__FILE__) . '/Stripe/Recipient.php');
		require(dirname(__FILE__) . '/Stripe/Refund.php');
		require(dirname(__FILE__) . '/Stripe/ApplicationFee.php');
		
		$this->load->library('path');
		}
		
		
        }
	public function myaccount_accountinfo(){
	
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
                $this->load->model('model_users');
            	$data = $this->model_users->get_info($this->session->userdata('email'));
                
                $account_data = $this->get_account_info();
                
            	  $nav_data = $this->session->all_userdata();
                $result = array_merge($path,$data,$nav_data, $account_data);
                
                
                $this->load->view('Create_Wrevel_View',$result);
                 $this->load->view('myaccount_accountinfo',$result);
	}
	public function myaccount_eventlisting(){
	
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
            	$this->load->model('model_users');
                $this->load->model('model_events');
                $data['random_placeholder'] = 'hello';
                $email = $this->session->userdata('email');
                $user_id = $this->model_users->get_userID($email);
                $all_events = $this->model_users->get_my_events($user_id);
                for($i = 0; $i < count($all_events); $i++) {
                    $temp_event = $this->model_events->find_event($all_events[$i]['event_id']);
                    $data['attending_events'][$i]['event_id'] = $temp_event[0]['event_id'];
                    $data['attending_events'][$i]['e_name'] = $temp_event[0]['e_name'];
                    $data['attending_events'][$i]['e_date'] = $temp_event[0]['e_date'];
                    $data['attending_events'][$i]['e_price'] = $temp_event[0]['e_pricetemp'];
                    $data['attending_events'][$i]['e_is_address_hide'] = $temp_event[0]['e_is_address_hide'];
                }
            	  $nav_data = $this->session->all_userdata();
                $result = array_merge($path, $data, $nav_data);

                $this->load->view('Create_Wrevel_View',$result);
                 $this->load->view('myaccount_eventlisting',$result);
	}
	public function myaccount_eventattending(){
	
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
            	$this->load->model('model_users');
                $this->load->model('model_events');
                $this->load->model('model_tickets');
                $data['random_placeholder'] = 'hello';
                $email = $this->session->userdata('email');
                $user_id = $this->model_users->get_userID($email);
                $all_events = $this->model_users->get_attending_events($user_id);
                for($i = 0; $i < count($all_events); $i++) {
                    $temp_event = $this->model_events->find_event($all_events[$i]['event_id']);
                    $data['attending_events'][$i]['event_id'] = $temp_event[0]['event_id'];
                    $data['attending_events'][$i]['e_name'] = $temp_event[0]['e_name'];
                    $data['attending_events'][$i]['e_date'] = $temp_event[0]['e_date'];
                    $data['attending_events'][$i]['e_price'] = $temp_event[0]['e_pricetemp'];
		    $data['attending_events'][$i]['ticket'] = $this->model_tickets->get_ticket($all_events[$i]['event_id'], $user_id);
                }
            	  $nav_data = $this->session->all_userdata();
                $result = array_merge($path, $data, $nav_data);

                $this->load->view('Create_Wrevel_View',$result);
                 $this->load->view('myaccount_eventattending',$result);
	}
	
	public function myaccount_ticketmanagement(){
	
		$this->load->library('path');
            	$path = $this->path->getPath();
            	$this->load->library('session');
            	$this->load->model('model_users');
                $this->load->model('model_events');
                $this->load->model('model_tickets');
                $email = $this->session->userdata('email');
                $user_id = $this->model_users->get_userID($email);
                $all_events = $this->model_users->get_my_events($user_id);
                for($i = 0; $i < count($all_events); $i++) {
                    $temp_event = $this->model_events->find_event($all_events[$i]['event_id']);
                    $data['attending_events'][$i]['event_id'] = $temp_event[0]['event_id'];
                    $ticket_data = $this->model_tickets->get_ticket_owner($data['attending_events'][$i]['event_id']);
                    for($j = 0; $j < count($ticket_data); $j++) {
                    	$data['attending_events'][$i]['tickets'][$j] = $ticket_data[$j];
                    }
                    $data['attending_events'][$i]['e_name'] = $temp_event[0]['e_name'];
                    $data['attending_events'][$i]['e_date'] = $temp_event[0]['e_date'];
                    $data['attending_events'][$i]['e_price'] = $temp_event[0]['e_pricetemp'];
                    $data['attending_events'][$i]['e_is_address_hide'] = $temp_event[0]['e_is_address_hide'];
                }
            	  $nav_data = $this->session->all_userdata();
            	if(isset($data)) {
                $result = array_merge($path, $data, $nav_data);
                }
                else
                	$result = array_merge($path, $nav_data);
		
		
                $this->load->view('Create_Wrevel_View',$result);
                 $this->load->view('myaccount_ticketmanagement',$result);
	}
	//change various account information.
	public function edit_account_info() {
            $this->load->library('path');
            $this->load->library('session');
            $this->load->model('model_users');
            $this->load->library('form_validation');
            $path = $this->path->getPath();
            $this->form_validation->set_rules('email','Email Address','valid_email');
            $current_email = $this->session->userdata('email');
            
            if($this->form_validation->run()){
                $this->model_users->edit_info($current_email);
                /*if($this->input->post('email')){
                    $this->session->set_userdata(array('email' => $this->input->post('email')));
                }*/
                //if location or phone changed.
                if($this->input->post('location') || $this->input->post('phone')){
                	$this->session->set_flashdata('message','Your account information has changed! Please make sure everything is correct.' );
                }
                redirect('account/myaccount_accountinfo/');
            }
            else
                $data = $this->model_users->get_info($current_email);
                $nav_data = $this->session->all_userdata();
                $result = array_merge($path, $data, $nav_data);
                $this->load->view('myaccount_accountinfo', $result);
                echo "<script type='text/javascript'> ";
                echo "window.onload = function() {";
                echo "$('#edit').modal('show');}</script>";
        }
        //Check if the email the user is changing to already exists in the database.
        public function check_exists() {
            $this->load->library('session');
            $this->load->model('model_users');
            $condition = $this->model_users->is_email($this->input->post('email'));
            
            if(!$condition){
                return true;
            }
            else {
                $this->form_validation->set_message('check_exists', 'The email you have entered already exists, please enter another email.');
                return false;
            }
        }
        //change password form/ THIS DOES NOT CHECK IF 'NEW PASSWORD' IS THE SAME AS 'CONFIRM PASSWORD'. WILL USE JAVASCRIPT TO CHECK BEFORE SUBMITTING.
        public function change_password() {
            $this->load->library('path');
            $this->load->library('session');
            $this->load->model('model_users');
            $this->load->library('form_validation');
            $path = $this->path->getPath();
            $this->form_validation->set_rules('old_password', 'Password', 'required|md5|callback_checkPW');
            $email = $this->session->userdata('email');
            $data = $this->model_users->get_info($email);
            $nav_data = $this->session->all_userdata();
            $result = array_merge($path, $data, $nav_data);

            if($this->form_validation->run()) {
                //need feedback page here.
                $this->session->set_flashdata('message','Your password has been changed!' );
                redirect('account/myaccount_accountinfo/');
            }
            else {
            	$this->session->set_flashdata('message','You have entered an incorrect password. Please try again.' );
                redirect('account/myaccount_accountinfo');
                echo "<script type='text/javascript'> ";
                echo "window.onload = function() {";
                echo "$('#changePassword').modal('show');}</script>";
            }
            
        }
        //check if password is correct.
        public function checkPW(){
            $this->load->model('model_users');
            $this->load->library('session');
            $email = $this->session->userdata('email');
                        
            $old_password = $this->input->post('old_password');
            $new_password = $this->input->post('new_password');
            $confirm_new_password = $this->input->post('confirm_new_password');
            
            $condition = $this->model_users->can_change_password($email, $old_password, $new_password);
            if($condition) {
                return true;
            }
            else {
                $this->form_validation->set_message('checkPW','You have entered the wrong password. Please try again.');
                return false;
            }
        }
        //remove event check
        public function remove_event($event_id) {
            $this->load->library('session');
            $this->load->model('model_events');
            $this->load->model('model_users');
            
            if($this->model_events->remove_event($event_id)) {
                $this->session->set_flashdata('message','You have successfully removed the event.' );
                redirect('account/myaccount_eventlisting');
            }
            else {
                echo 'something is wrong';
            }
        }
        
        //Get account information like Bank information and Card information here.
        public function get_account_info() {
        	$this->load->library('session');
        	$email = $this->session->userdata('email');
        	$this->load->model('model_users');
        	$c_user = $this->model_users->get_info($email);
        	$data = array();
        	try {
	        	if($c_user['recip_id'] != "") {
		        	$recipient = Stripe_Recipient::retrieve($c_user['recip_id']);
		        	$bank_data = array('bank_name' => $recipient['active_account']['bank_name'],
		        			   'last4'     => $recipient['active_account']['last4']);
		        	$data['bank_data'] = $bank_data;
		        }
		        if($c_user['cust_id'] != "") {
		        	$customer = Stripe_Customer::retrieve($c_user['cust_id']);
		        	$card_data = array('name' => $customer['cards']['data'][0]['name'],
		        			   'last4'     => $customer['cards']['data'][0]['last4'],
		        			   'exp_month' => $customer['cards']['data'][0]['exp_month'],
		        			   'exp_year' => $customer['cards']['data'][0]['exp_year']);
		        	$data['card_data'] = $card_data;
		        }
		}
		catch(Exception $e) {
			$data = array();
		}
	        return $data;
	        
        }
        
        public function update_account() {
        	$this->load->library('session');
        	$email = $this->session->userdata('email');
        	$this->load->model('model_users');
        	$c_user = $this->model_users->get_info($email);
        	if($c_user['recip_id'] != "") {
        		try {
	        		$recipient = Stripe_Recipient::retrieve($c_user['recip_id']);
	        		$bank_account = array(
	        					'country' => 'US',
	        			      		'account_number' => $this->input->post('accountingNumber'),
	        			      		'routing_number' => $this->input->post('routingNumber')
	        			      	);
	     			//echo '<pre>', print_r($bank_account, true), '</pre>';
	   			$recipient->bank_account = $bank_account;
	   			$recipient->save();
	   		}
	   		catch(Exception $e){
	   			$this->session->set_flashdata('message','Bank Account Denied. Please enter a valid Bank Account.' );
	   		}
	        }
	        else {
	        	try {
	        		$recipient = Stripe_Recipient::create(array(
	        		'description' => 'Recipient email: '.$email,
				'type' => $this->input->post('bank_type'),
				'name' => $this->input->post('name_on_bank'),
				'tax_id' => $this->input->post('ssn_ein'),
				"bank_account" => array(
							"country" => "US",
					      		'account_number' => $this->input->post('accountingNumber'),
					      		'routing_number' => $this->input->post('routingNumber')
							),
				));
				$this->model_users->add_bank_info($c_user['user_id'], $recipient->id);
			}
			catch(Exception $e) {
				$this->session->set_flashdata('message','Bank Account Denied. Please enter a valid Bank Account.' );
			}
	        }
	        redirect('account/myaccount_accountinfo');
        }
        
        //unhide event address
        public function unhide_event($event_id) {
        	$this->load->library('session');
        	$this->load->model('model_users');
        	$this->load->model('model_events');
        	$this->load->model('model_friend_request');
        	$email = $this->session->userdata('email');
        	$user_data = $this->model_users->get_info($email);
        	
        	$this->model_events->show_address($event_id);
        	$event_data = $this->model_events->find_event($event_id);
        	$event_name = $event_data[0]['e_name'];
        	$all_attendees = $this->model_events->get_attendees($event_id);
        	$message = 'has revealed the event address for '.$event_name.'! You are now on the finalized list of attendees for this event. Check it out!';
        	$email_to = array();
        	for($i = 0; $i < count($all_attendees); $i++) {
        		$this->model_friend_request->notify_other($user_data['user_id'], $all_attendees[$i]['user_id'], $message);
                        $temp_info = $this->model_users->get_email($all_attendees[$i]['user_id']);
        		$email_to[] = $temp_info[0]['email'];
        	}
        	$this->load->library('email',array('mailtype'=>'html'));
		$this->email->from('donotreply@wrevel.com', "Wrevel, Inc.");
		$this->email->to($email_to);
		$this->email->subject("Event Address Revealed!");
		//message to user confirms see load library email, 2nd argument is setting to html not default text
		$message = "<p> Hello! </p><p>Congratulations! The creator of the hidden event ".$event_name ." has revealed the event address! You are now on the finalized list of attendees for this event. Check out the link below!</p>";
		$message .= "<p><a href='".base_url()."event/event_info/latest/".$event_id."'>Here</a></p><p>________________________________</p><p>Copyright 2014 Wrevel, Inc.,<i> All Rights Reserved.</i></p><div>Connect with us!</div>";
		$message .= "<div>www.wrevel.com</div>";
		$message .= "<div>Facebook: www.facebook.com/wrevelinc</div>";
		$message .= "<div>Twitter: www.twitter.com/wrevelco</div>";
		$message .= "<div>Instagram: www.instagram.com/wrevel</div>";
		$message .= "<div>Tumblr: wrevel.tumblr.com</div>";
		$message .= "<div>E-mail: support@wrevel.com</div>";
		$this->email->message($message);
		$this->email->send();
        	$this->session->set_flashdata('message', "(Event id = ".$event_id.") is now revealed to everyone. Notifications are sent you and it's address will now be shown.");
        	redirect('account/myaccount_eventlisting');
        }
        // Dont need this anymore. Kept just for reference and incase we actually do need.
        /*public function view_order($event_id) {
        	$this->load->library('path');
        	$this->load->library('session');
        	$this->load->model('model_users');
       		$this->load->model('model_events');
        	$this->load->model('model_tickets');
        	$path = $this->path->getPath();
        	$user_email = $this->session->userdata('email');
        	$user_data = $this->model_users->get_info($user_email);
        	$user_id = $user_data['user_id'];
        	$event_data = $this->model_events->find_event($event_id);
        	$data = $this->model_tickets->get_ticket($event_id, $user_id);
        	if($data) {
        		$remapped_data = array('e_name' => $event_data[0]['e_name'],
        				       'fullname' => $user_data['fullname'],
        				       'ticket_type' => $data[0]['ticket_type'],
        				       'ticket_price' => sprintf("%01.2f",$data[0]['ticket_price']),
        				       'fees' => sprintf("%01.2f",$data[0]['fees']),
        				       'total_price' => sprintf("%01.2f",$data[0]['total_price']),
        				       'e_description' => $event_data[0]['e_description'],
        				       'e_date' => $event_data[0]['e_date'],
        				       'e_start_time' => $event_data[0]['e_start_time'],
        				       'e_address' => $event_data[0]['e_address'],
        				       'e_city' => $event_data[0]['e_city'],
        				       'e_state' => $event_data[0]['e_state'],
        				       'e_zipcode' => $event_data[0]['e_zipcode']
        				       );
        		$result = array_merge($remapped_data, $path);
        		$this->load->view('view_order', $result);
        	}
        	else {
        		$this->session->set_flashdata('message', "You have not purchased a ticket for this event. Click the event name to start your purchase.");
        		redirect('account/myaccount_eventattending');
        	}
        }*/
        public function add_stripe_card() {
        	$this->load->library('session');
        	$email = $this->session->userdata('email');
        	$this->load->model('model_users');
        	$c_user = $this->model_users->get_info($email);
        	if($c_user['cust_id'] != "") {
        		$cu = Stripe_Customer::retrieve($c_user['cust_id']);
        	}
        	try{
        		$cust_id = Stripe_Customer::create(array(
  				"description" => "Customer = ".$email,
 				"card" => array(
 						'name' => $this->input->post('name_on_card'),
 						'number' => $this->input->post('credit_card_number'),
 						'exp_month' => $this->input->post('exp_month'),
 						'exp_year' => $this->input->post('exp_year'),
 						'cvc' => $this->input->post('cvc')
						)
			));
			$this->model_users->add_card_info($c_user['user_id'], $cust_id->id);
			if(isset($cu)) {
				$cu->delete();
			}
		}
		catch(Exception $e) {
			$this->session->set_flashdata('message','Credit/Debit Card Denied. Please enter a valid credit/debit card number.' );
		}
        	redirect('account/myaccount_accountinfo');
        }
        
        public function remove_card() {
            $this->load->library('session');
            $this->load->model('model_users');
            $email = $this->session->userdata('email');
            $this->model_users->delete_card_info($email);
            $this->session->set_flashdata('message','Your card information has been removed.' );
            redirect('account/myaccount_accountinfo');
        }
        
        public function view_ticket($event_id, $ticket_id) {
        	$this->load->library('path');
        	$this->load->model('model_events');
        	$this->load->model('model_tickets');
                //$this->load->library('barcode');
                //$remapped_data['barcode'] = $this->barcode->Barcode39("123456789", 320, 200, 100, "PNG", 1);
                //echo $data;
        	$path = $this->path->getPath();
        	$event_data = $this->model_events->find_event($event_id);
        	$data = $this->model_tickets->get_ticket_with_id($event_id, $ticket_id);
        	if($data) {
                    for($i = 0; $i < count($data); $i++) {
        		$remapped_data['ticket'][$i]= array('e_name' => $event_data[0]['e_name'],
                                                            'id' => sprintf("%08d",$data[$i]['id']),
                                                            'fullname' => $data[$i]['fullname'],
                                                            'ticket_type' => $data[$i]['ticket_type'],
                                                            'ticket_price' => sprintf("%01.2f",$data[$i]['ticket_price']),
                                                            'fees' => sprintf("%01.2f",$data[$i]['fees']),
                                                            'total_price' => sprintf("%01.2f",$data[$i]['total_price']),
                                                            'e_description' => $event_data[0]['e_description'],
                                                            'e_date' => $event_data[0]['e_date'],
                                                            'e_start_time' => $event_data[0]['e_start_time'],
                                                            'e_address' => $event_data[0]['e_address'],
                                                            'e_city' => $event_data[0]['e_city'],
                                                            'e_state' => $event_data[0]['e_state'],
                                                            'e_zipcode' => $event_data[0]['e_zipcode'],
                                                            'barcode' => $data[$i]['barcode']
        				       );
                    }
      			$result = array_merge($remapped_data, $path);
        		$this->load->view('view_order', $result);
        	}
        	else {
        		$this->session->set_flashdata('message', "This link has expired. Ticket has either been refunded or the event is over.");
        		redirect('main/mywrevs');
        	}
        }
        
        public function cancel_order() {
        	$this->load->library('session');
        	$email = $this->session->userdata('email');
        	if(isset($_POST['submit'])){
	 		$to = "wrevelco@gmail.com";
	    		$from = $this->session->userdata('email');
	    		$eName = $this->input->post('eventName');
	    		$eID = $this->input->post('eventID');
	    		$reason = $this->input->post('reason');
	    		$subject = "Cancellation Request: ";
	 	    	$comments = $this->input->post('message');
	    
	    		$headers = "From: $from";
	    		$message ="Ticket Cancellation Request \r\n
	   			   User Email: $from\r\n
	    			   Event Name: $eName\r\n
	    			   Event ID: $eID\r\n
	    			   Reason for Cancelling: $reason\r\n
	    			   Additional Comments: $comments" ;
	    
	    		mail($to, $subject, $message, $headers);
	    		$this->load->library('email',array('mailtype'=>'html'));
			$this->email->from('donotreply@wrevel.com', "Wrevel, Inc.");
			$this->email->to($email);
			$this->email->subject("Cancel Order:");
			//message to user confirms see load library email, 2nd argument is setting to html not default text
			$message = "<p> Hello! </p><p>You have just requested to cancel your ticket order for the event ".$eName." We are currently reviewing your cancellation request and will notify/update you within 24-48 hours. Thank you! </p>";
			$message .= "<p>________________________________</p><p>Copyright 2014 Wrevel, Inc.,<i> All Rights Reserved.</i></p><div>Connect with us!</div>";
			$message .= "<div>www.wrevel.com</div>";
			$message .= "<div>Facebook: www.facebook.com/wrevelinc</div>";
			$message .= "<div>Twitter: www.twitter.com/wrevelco</div>";
			$message .= "<div>Instagram: www.instagram.com/wrevel</div>";
			$message .= "<div>Tumblr: wrevel.tumblr.com</div>";
			$message .= "<div>E-mail: support@wrevel.com</div>";
			$this->email->message($message);
			$this->email->send();
		}
		$this->session->set_flashdata('message', "Ticket cancellation request received. We will review it and get back to you soon.");
		redirect('account/myaccount_eventattending');
	}
	
	public function issue_refund() {
        	$this->load->library('session');
        	$email = $this->session->userdata('email');
        	if(isset($_POST['submit'])){
	 		$to = "wrevelco@gmail.com";
	    		$from = $this->session->userdata('email');
	    		$eName = $this->input->post('eventName');
	    		$eID = $this->input->post('eventID');
	    		$reason = $this->input->post('reason');
	    		$subject = "Issue Refund Request: ";
	 	    	$comments = $this->input->post('message');
	 	    	$customer = $this->input->post('customer');
	    
	    		$headers = "From: $from";
	    		$message ="Refund Issue Request\r\n
	   			   User Email: $from\r\n
	   			   Customer to be refunded: $customer\r\n
	    			   Event Name: $eName\r\n
	    			   Event ID: $eID\r\n
	    			   Reason for Refund: $reason\r\n
	    			   Additional Comments: $comments" ;
	    
	    		mail($to, $subject, $message, $headers);
	    		$this->load->library('email',array('mailtype'=>'html'));
			$this->email->from('donotreply@wrevel.com', "Wrevel, Inc.");
			$this->email->to($email);
			$this->email->subject("Issue Refund:");
			//message to user confirms see load library email, 2nd argument is setting to html not default text
			$message = "<p> Hello! </p><p>You have just requested to issue a ticket refund for the event ".$eName." We are currently reviewing your refund request and will notify/update you within 24-48 hours. Thank you! </p>";
			$message .= "<p>________________________________</p><p>Copyright 2014 Wrevel, Inc.,<i> All Rights Reserved.</i></p><div>Connect with us!</div>";
			$message .= "<div>www.wrevel.com</div>";
			$message .= "<div>Facebook: www.facebook.com/wrevelinc</div>";
			$message .= "<div>Twitter: www.twitter.com/wrevelco</div>";
			$message .= "<div>Instagram: www.instagram.com/wrevel</div>";
			$message .= "<div>Tumblr: wrevel.tumblr.com</div>";
			$message .= "<div>E-mail: support@wrevel.com</div>";
			$this->email->message($message);
			$this->email->send();
		}
		$this->session->set_flashdata('message', "Ticket refund request received. We will review it and get back to you soon.");
		redirect('account/myaccount_ticketmanagement');
	}
        public function barcode_test() {
            $this->load->library('barcode');
            $data = $this->barcode->Barcode39("123456789", 320, 200, 100, "PNG", 1);
            echo $data;
        }
}