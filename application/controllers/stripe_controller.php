<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stripe_controller extends CI_Controller{

	function __construct()
        {
            session_start();
                parent::__construct();
		$this->load->library('session');
		$amount_seller = 0;
		$amount_wrevel = 0;
		$amount_stripe = 0;
		$sessionData = $this->session->all_userdata();
		
		require_once(dirname(__FILE__) . '/config.php');
		require_once(APPPATH.'controllers/event.php');
		
		
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
       
        public function load_stripe($event_id)
        {
        	$prev_page = $this->session->userdata('refresh_page');
		$this->load->model('model_events');

		$this->load->model('model_friend_request');
		$path = $this->path->getPath();
		$data['path'] = $this->path->getpath();
		$data['PATH_IMG'] = $path['PATH_IMG'];
                $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];
		//print_r($this->input->$_POST);
		
		$data['event'] = $this->model_events->find_event($event_id);

		//print_r($data['event']);		

		//echo '<pre>', print_r($data['event'], true), '</pre>';		
		
		$this->session->set_flashdata('message', 'Tickets have already been sold check if there are any left and try again.');
                redirect($prev_page.$event_id);
            
        }
        
        public function charge($event_id)
        {
        	$this->load->library('session');
		$this->load->model('model_events');
		$this->load->model('model_users');
		if($this->session->userdata('is_logged_in'))
			$my_email = $this->session->userdata('email');
		
		//echo '<pre>', print_r($this->session->All_userdata(), true), '</pre>';
		
		$data['event'] = $this->model_events->find_event($event_id);
		$c_email = $this->model_users->get_email($data['event'][0]['e_creatorID']);
		$c_email = $c_email[0]['email'];
		$billing = array(
			'event_id'        => $data['event'][0]['event_id'],
			'type'		  => $this->input->post('ticket_type'),
			'cost_per_ticket' => $this->input->post('e_price'), //need to be changed later
			'quantity'        => $this->input->post('quantity'),
			'print'		  => $this->input->post('print'),
			'mail'            => $this->input->post('mail'),
			'f_name'          => $this->input->post('f_name'),
			'l_name'	  => $this->input->post('l_name'),
			'email'		  => $this->input->post('email'),
			'address'	  => $this->input->post('address'),
			'city'		  => $this->input->post('city'),
			'state'		  => $this->input->post('state'),
			'zipcode'	  => $this->input->post('zip'),
			 
			'card'  => array(
				"number" => $this->input->post('card'),
				"exp_month" => (int)$this->input->post('exp_month'),
				"exp_year" => (int)$this->input->post('exp_year'),         
			)
		);
		
		
		$amount_seller = $billing['quantity']*$billing['cost_per_ticket']*100;
		
		$amount_wrevel = (int)(1.015 * $billing['quantity']*($billing['cost_per_ticket']*100 + 50)) - $amount_seller;
		
		$amount_stripe = (int)(($amount_wrevel+$amount_seller) * 2.4 / 100 + 49);
		
		if($billing['mail']=='mail')
		{
			$amount_wrevel+=345;
			//echo '<pre>', print_r($this->session->All_userdata(), true), '</pre>';
	        }
		if($this->input->post('approve')=="true")
		{
                        
                    if($this->session->userdata('session_expired') || !$this->session->userdata('ticket')) {
                        $this->session->unset_userdata('session_expired');
                        $prev_page = $this->session->userdata('refresh_page');
                        $this->session->set_flashdata('message', 'Your session has expired please reenter the required information.');
                        redirect($prev_page.$event_id);
                    }
			$data['event'] = $this->model_events->find_event($event_id);
			$c_email = $this->model_users->get_email($data['event'][0]['e_creatorID']);
			//echo '<pre>', print_r($data, true), '</pre>';
			$c_recip = $c_email[0]['recip_id'];
			$c_email = $c_email[0]['email'];
                        
			//set payment info
			$ticket = $this->session->userdata('ticket');
			$deduction_possible = $this->model_events->check_tickets($event_id, $ticket['type'],$ticket['quantity']);
			if($deduction_possible) {
				$billing = array(
					'cost_per_ticket' => $ticket['cost_per_ticket'],
					'type'		  => $ticket['type'],
					'e_price'	  => $ticket['e_price'],
					'quantity'        => $ticket['quantity'],
					'print'		  => $ticket['print'],
					'mail'            => $ticket['mail'],
					'f_name'          => $ticket['f_name'],
					'l_name'	  => $ticket['l_name'],
					'email'		  => $ticket['email'],
					'address'	  => $ticket['address'],
					'city'		  => $ticket['city'],
					'state'		  => $ticket['state'],
					'zipcode'	  => $ticket['zipcode'],
					'card'            => $ticket['card'],
					'ticket_price'	  => $ticket['ticket_price'],
					'fees'		  => $ticket['fees'],
					'total_price'	  => $ticket['total_price'],
					'cust_id'	  => $ticket['cust_id']
					);
                                
				//echo '<pre>Stuff', print_r($billing, true), '</pre><br>';
				
				/*$amount_seller = $billing['quantity']*$billing['e_price']*100;
		
				$amount_wrevel = round((1.015 * $billing['quantity']*($billing['e_price']*100 + 50)) - $amount_seller);
				$transfer_fee = 25;
				$amount_wrevel += $transfer_fee;
				// The "+30" is for the 30 cents stripe takes for processing.
				// .971 is reversing the 2.9% that stripe takes for processing.
				$amount_stripe = round((($amount_wrevel+$amount_seller + 30) / .971 - ($amount_wrevel + $amount_seller)));
				
				//The "57" is for the transfer fee that stripe takes for third party transfers. It's 25 but it is also processed.
				
		
				if($billing['mail']=='true')
				{
					$amount_wrevel+=345;
				}*/
		
				//$total =  $amount_stripe+$amount_wrevel+$amount_seller;
				$total = $billing['total_price']*100;

				if($total != 0) {
					// Changed so we don't have to save card to session. 
					/*if($billing['cust_id'] == "false") {
						$customer = Stripe_Customer::create(array(
							'email' => $billing['email'],
							'card'  => $billing['card']
							));
						$customer_id = $customer->id;
						//echo "hello";
					}
					else {*/
					$customer_id = $billing['cust_id'];
					try {
                                            $charge = Stripe_Charge::create(array(
                                                    'description' => 'Money will be transferred manually to: EMAIL = '. $c_email .' OR RECIP_ID = '.$c_recip.' AMOUNT TO TRANSFER = '.$billing['ticket_price'],
                                                    'customer' => $customer_id,
                                                    'amount'   => (int)($total),
                                                    'currency' => 'usd'
                                            ));
                                        }
                                        catch(Exception $e) {
                                            $prev_page = $this->session->userdata('refresh_page');
                                            $this->session->set_flashdata('message', 'Your card was declined or you may have entered an invalid card or you may have insufficient funds. Please try again.');
                                            redirect($prev_page.$billing['cost_per_ticket'][0]['event_id']);
                                        }
					//make payment THIS IS COMMENTTED OUT BECAUSE IT DOESN'T WORK FOR SOME REASON. WILL HAVE TO MANUALLY TRANSFER ALL MONEY.
					//$this->transfer($billing['ticket_price']*100, $c_email);
				
					//echo "Wrevel Take ".$amount_wrevel."<br />";
					//echo "Seller will get ".$amount_seller."<br />";
					//echo "Stripe get charge of ".$amount_stripe."<br/>";
				
					//$total =  $amount_stripe+$amount_wrevel+$amount_seller;
				}
				$this->model_events->deduct_tickets($event_id, $ticket['type'],$ticket['quantity']);		
				//echo "The Total Charge is ".$total."<br/>";
				
				//
				
				$return_data = $this->insert();
				if($this->session->userdata('is_logged_in')) {
					$user_id = $this->model_users->get_userID($my_email);
					$this->model_users->add_reputation($my_email, 5);
	        			$this->model_events->update_attending($user_id, $event_id);
	        		}
				redirect('stripe_controller/Processed_ticket/'.$return_data['event_id'].'/'.$return_data['ticket_id']);
			}
			else {
				redirect('stripe_controller/load_stripe/'.$billing['event_id']);
			}
		}
			
	
		else
		{
			//echo $this->input->post('approve');
			redirect('stripe_controller/load_stripe/'.$billing['event_id']);

		}
	
		$total =  $amount_stripe+$amount_wrevel+$amount_seller;

		$customer = Stripe_Customer::create(array(
			'email' => $billing['email'],
			'card'  => $billing['card']
			));

		$charge = Stripe_Charge::create(array(
			'customer' => $customer->id,
			'amount'   => (int)($total),
			'currency' => 'usd'
		));
		
		$this->transfer($amount_seller, $c_email);
		

		//echo "Wrevel Take ".$amount_wrevel."<br />";
		//echo "Seller will get ".$amount_seller."<br />";
		//echo "Stripe get charge of ".$amount_stripe."<br/>";

		//money being transfered to your account
		
		$total =  $amount_stripe+$amount_wrevel+$amount_seller;
		
		//echo "The Total Charge is ".$total."<br/>";
			//transfer notification
		redirect('stripe_controller/confirm');
	}
	
	public function insert()
	{
		$this->load->library('session');
		$ticket = $this->session->userdata('ticket');
		if($this->session->userdata('is_logged_in')) {
			$this->load->model('model_friend_request');
			$email = $this->session->userdata('email');
			$info = $this->model_users->get_info($email);
			$creator_id = $ticket['cost_per_ticket'][0]['e_creatorID'];
			$creator_info = $this->model_users->get_email($creator_id);
			$message = "Thank you for purchasing a ticket for my event, ".$ticket['cost_per_ticket'][0]['e_name']."!"; 
			$this->model_friend_request->notify_other($creator_id, $info['user_id'], $message);
			$email_message = "<p>You have just purchased a ticket! You can click on the link below to view your order and print your tickets.</p>";
		}
		else {
                        //GUEST USER.
			$info['user_id'] = -1;
			$info['fullname'] = $ticket['f_name'];
			$email = $ticket['email'];
			$email_message = "<p>You have just purchased a ticket on Wrevel.com! You can click on the link below to view your order and print your tickets.  Make sure you save this e-mail as you would need it to access your tickets in the future. You can also sign up for free at www.wrevel.com to save all of your future purchases on your Wrevel account.</p>";
		}
		$data = array(
			'event_id'      => $ticket['cost_per_ticket'][0]['event_id'],
			'user_id'       => $info['user_id'],
			'fullname'      => $info['fullname'],
			'delivery'      => $ticket['mail'],
			'ticket_type'   => $ticket['type'],
			'ticket_price'  => $ticket['ticket_price'],
			'fees'          => $ticket['fees'],
			'total_price'   => $ticket['total_price']
			
		);
		$this->load->model('model_tickets');
		$data['ticket_id'] = $this->model_tickets->add_ticket($data, $ticket['quantity']);
                $return_data = array('e_name' => $ticket['cost_per_ticket'][0]['e_name'], 
                                     'ticket_id' => $data['ticket_id'],
                                     'event_id' => $data['event_id'], 
                                     'send_email' => $email);
                $this->session->set_userdata(array('e_name' => $ticket['cost_per_ticket'][0]['e_name'], 'ticket_id' => $data['ticket_id'],'event_id' => $data['event_id'], 'send_email' => $email));
		$this->load->library('email',array('mailtype'=>'html'));
		$this->email->from('donotreply@wrevel.com', "Wrevel, Inc.");
		$this->email->to($email);
		$this->email->subject("Ticket Purchased!");
		//message to user confirms see load library email, 2nd argument is setting to html not default text
		$message = $email_message;
		$message .= "<p><a href='".base_url()."account/view_ticket/".$data['event_id'].'/'.$data['ticket_id']."'>Here</a></p><p>________________________________</p><p>Copyright 2014 Wrevel, Inc.,<i> All Rights Reserved.</i></p><div>Connect with us!</div>";
		$message .= "<div>www.wrevel.com</div>";
		$message .= "<div>Facebook: www.facebook.com/wrevelinc</div>";
		$message .= "<div>Twitter: www.twitter.com/wrevelco</div>";
		$message .= "<div>Instagram: www.instagram.com/wrevel</div>";
		$message .= "<div>Tumblr: wrevel.tumblr.com</div>";
		$message .= "<div>E-mail: support@wrevel.com</div>";
		$this->email->message($message);
		$this->email->send();
                return $return_data;
		//echo '<pre>', print_r($this->model_users->get_info($this->session->userdata('email')), true), '</pre>';
		
	}
	
	public function load_confirm($event_id)
	{
		$this->load->library('session');
		$this->load->model('model_events');
		$this->load->model('model_users');
		$this->load->model('model_tickets');
		$my_email = $this->session->userdata('email');
		$my_data = $this->model_users->get_info($my_email);
		
		$path = $this->path->getPath();
		
		$data['path'] = $this->path->getpath();
		$data['PATH_IMG'] = $path['PATH_IMG'];
                $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];
		
		
		$event = $this->model_events->find_event($event_id);
		$c_email = $this->model_users->get_email($event[0]['e_creatorID']);
		
		$ticket_type_temp = explode('|',$this->input->post('ticket_type'));

		$data['ticket'] = array(
			'cost_per_ticket' => $event, //need to be changed later
			'e_price'	  => strip_tags($this->input->post('ticket_price')),
			'type'		  => strip_tags($ticket_type_temp[0]),
			'quantity'        => strip_tags($this->input->post('quantity')),
			'print'		  => strip_tags($this->input->post('print')),
			'mail'            => strip_tags($this->input->post('mail')),
			'f_name'          => strip_tags($this->input->post('f_name')),
			'l_name'	  => strip_tags($this->input->post('l_name')),
			'email'		  => strip_tags($this->input->post('email')),
			'address'	  => strip_tags($this->input->post('address')),
			'city'		  => strip_tags($this->input->post('city')),
			'state'		  => strip_tags($this->input->post('state')),
			'zipcode'	  => strip_tags($this->input->post('zip')),
			'cust_id'	  => strip_tags($this->input->post('saved_card')),
			'card'  => array(
				"number" => strip_tags($this->input->post('card')),
				"exp_month" => (int)strip_tags($this->input->post('exp_month')),
				"exp_year" => (int)strip_tags($this->input->post('exp_year')),
				"cvc" => strip_tags($this->input->post('cvc'))           
				)
		);
                if($this->session->userdata('session_expired')) {
                    $prev_page = $this->session->userdata('refresh_page');
                    $this->session->set_flashdata('message', 'Your session has expired please reenter your information.');
                    redirect($prev_page.$data['ticket']['cost_per_ticket'][0]['event_id']);
                }
                   if($ticket_type_temp[5] == 0) {   //Yuan change it to 0  from 1
                    $prev_page = $this->session->userdata('refresh_page');
                    $this->session->set_flashdata('message', 'This ticket type is already expired. Please choose another type.');
                    redirect($prev_page.$data['ticket']['cost_per_ticket'][0]['event_id']);
                }
		if($data['ticket']['cust_id'] == "false" && $data['ticket']['card']['number'] == "" && $data['ticket']['e_price'] != 0) {
			
			redirect('stripe_controller/load_stripe/'.$data['ticket']['cost_per_ticket'][0]['event_id']);
		}
		if($data['ticket']['e_price'] != 0) {
			$data['ticket']['ticket_price'] = $amount_seller = $data['ticket']['quantity']*$data['ticket']['e_price'];
			$amount_wrevel = round((double)(1.015 * $data['ticket']['quantity']*($data['ticket']['e_price'] + 0.50)) - $data['ticket']['e_price']*$data['ticket']['quantity'],2);
			$amount_wrevel += .25;
			$amount_stripe = round((double)($amount_wrevel+$data['ticket']['e_price']*$data['ticket']['quantity'] + 0.30) / .971 -($amount_wrevel+$data['ticket']['e_price']*$data['ticket']['quantity']),2);
			if($data['ticket']['mail'] == "mail") 
				$amount_wrevel =+ 3.45;
				$total = $amount_stripe + $amount_wrevel;
			$data['ticket']['fees'] = $total;
			$data['ticket']['total_price'] = $amount_seller + $total;
		}
		else {
			$data['ticket']['ticket_price'] = 0;
			$data['ticket']['fees'] = 0;
			$data['ticket']['total_price'] = 0;
		}
		if(isset($data['ticket']['cust_id'])) {
			$data['ticket']['f_name'] = $my_data['fullname'];
		}
		else {
			try {
				$customer = Stripe_Customer::create(array(
								'email' => $data['ticket']['email'],
								'card'  => $data['ticket']['card']
				));
				$data['ticket']['cust_id'] == $customer->id;
			}
			catch(Exception $e) {
				$prev_page = $this->session->userdata('refresh_page');
				$this->session->set_flashdata('message', 'Your card was declined or you may have entered an invalid card. Please try again.');
				redirect($prev_page.$data['ticket']['cost_per_ticket'][0]['event_id']);
			}
			
		}
		$data['ticket']['card'] = "";
		$this->session->set_userdata($data);
		//echo '<pre>', print_r($this->session->All_userdata(), true), '</pre>';
		$this->load->view('Ticket_Confirm',$data);
	}
	
	public function transfer($amount_seller, $email)
	{
		
		// Set your secret key: remember to change this to your live secret key in production
		// See your keys here https://dashboard.stripe.com/account
		

	
		Stripe::setApiKey("sk_live_AJHUFwVnx9aiOOutcEz27HnE");

		//echo '<pre>printing info', print_r($c_info, true), '</pre>';

		//echo '<pre>', print_r($c_info, true), '</pre>';

		$this->load->model('model_events');
		$c_info = $this->model_users->get_info($email);
		
		$recipient = Stripe_Recipient::retrieve($c_info['recip_id']);
		
		//print_r($Bank_Account);
		
		
		/*$Bank_Account_Token = Stripe_Token::create(array(
			 "bank_account" =>array(
				"country" => "US",
				//"routing_number" => $this->input->post('RoutingNumber'),
				//"account_number" => $this->input->post('AccountNumber')
				"routing_number" => $c_info['rountingNumber'],
				"account_number" => $c_info['accountingNumber'],
				)));*/
		
		
		
		// Get the bank account details submitted by the form

		// Create a Recipient
		/*$recipient = Stripe_Recipient::create(array(
			"name" => "CHENYi ZHANG",
			"type" => "individual",
			"bank_account" => array(
				"country" => "US",
				//"routing_number" => $this->input->post('RoutingNumber'),
				//"account_number" => $this->input->post('AccountNumber')
				"routing_number" => $c_info['rountingNumber'],
				"account_number" => $c_info['accountingNumber']
				),
		));*/
		
						      
		// Set your secret key: remember to change this to your live secret key in production
		// See your keys here https://dashboard.stripe.com/account
		
		//$recipient_id = 1;
		
		
		// Create a transfer to the specified recipient
		$transfer = Stripe_Transfer::create(array(
			"amount" => (int)($amount_seller), // amount in cents
			"currency" => "usd",
			"recipient" => $recipient->id,
			//"bank_account" => $Bank_Account,

			"statement_description" => "Ticket Sales")
		);
	}

	public function Processed_ticket($event_id, $ticket_id)
	{
            $path = $this->path->getPath();
            $data['path'] = $this->path->getpath();
            $data['PATH_IMG'] = $path['PATH_IMG'];
            $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];
            $data['email'] = $this->session->userdata('email');
            $data['event_id'] = $event_id;
            $data['ticket_id'] = $ticket_id;
            $this->session->set_userdata(array('session_expired' => 1));
            //echo '<pre>', print_r($this->session->All_userdata(), true), '</pre>';

            //echo '<pre>', print_r($this->session->All_userdata(), true), '</pre>';
            $this->session->unset_userdata('ticket');
            $this->load->view('Processed_ticket',$data);
	}

	public function print_ticket($event_id, $ticket_id)
	{
            $this->load->library('session');
            
            //echo '<pre>', print_r($this->session->All_userdata(), true), '</pre>';
            redirect('account/view_ticket/'.$event_id.'/'.$ticket_id);
		//$this->session->unset_userdata('ticket');
	}

	
	public function get_cost($event_id)
	{
		
	}
	
	public function refund()
	{
			
	}
	public function check_balance() {
		$balance = Stripe_Balance::retrieve();
		//echo '<pre>', print_r($balance, true), '</pre>';
	}
}