<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller {
    
        function __construct()
        {
                parent::__construct();
                $this->load->model('model_events');
        $this->load->library('path');
        $this->load->library('session');
                
        }


    public function find_event($id)
    {
        $this->load->library('session');
        $data['path'] = $this->path->getpath();
        $data['event'] = $this->model_events->find_event($id);
        
        $this->load->view('Event_fullview',$data);
    }


	
	
	
       public function event_info($category,$event_id){ //messageView (chat.php)
                //testing purposes
                //$event_id = '-1';
               
                $this->load->model('model_friend_request');
                $this->load->model('model_events');
                $this->load->model('model_users');
                $this->load->library('path');
                $this->load->library('googlemaps');
                $this->load->library('hashmap_cata');
                $this->load->library('session');
                $this->session->unset_userdata('refresh_page');
                $this->session->unset_userdata('session_expired');
                $this->session->set_userdata('refresh_page', 'event/event_info/'.$category.'/');
                if($this->session->userdata('is_logged_in')) {
                	$email = $this->session->userdata('email');
                	$user_data = $this->model_users->get_info($email);
			$user_id = $user_data['user_id'];
			$my_friends_list = $this->model_friend_request->get_friendlists($user_id);
                        $data['my_user_id'] = $user_id;
			$data['card_data'] = $user_data['cust_id'];
		}
                $eventMap = $this->hashmap_cata->get_EventMap();
                $path = $this->path->getpath();
                $data['path'] = $this->path->getpath();
               //$data['PATH_IMG'] = $path['PATH_IMG'];
                $data['event_id'] = $event_id;
                $data['event'] = $this->model_events->find_event($event_id);
                $data['event_ticket_types'] = $this->model_events->get_tickets_for_event($event_id);
                $attendees_temp = $this->model_events->get_attendees($event_id);
                
                //Get the names and pictures of all the attendees.
                for($i = 0; $i < count($attendees_temp); $i++){
                    $user_data = $this->model_users->get_email($attendees_temp[$i]['user_id']);
                    $data['attendees'][$i]['user_id'] = $attendees_temp[$i]['user_id'];
                    $data['attendees'][$i]['fullname'] = $user_data[0]['fullname'];
                    $data['attendees'][$i]['image_key'] = $user_data[0]['image_key'];
                }
                
                if($this->session->userdata('is_logged_in')) {
	                for($i = 0; $i < count($my_friends_list); $i++) {
	                	$friend_user_id_temp = $my_friends_list[$i]['other_user_id'];
	                	$temp_friend_data = $this->model_users->get_email(trim($friend_user_id_temp));
	                        $data['friends_to_invite'][$i] = $temp_friend_data[0];
	                }
	        }
                
                $commentFile = $this->model_events->get_comments($event_id);
                if($commentFile !=""){
                $data['commentLocation'] = base_url()."application/views/events_comments/".$commentFile;
            }
                //print_r($data);
                $complete_address = $data['event'][0]['e_address'].", " . $data['event'][0]['e_city'];
                

                $config['center']= $complete_address;
                //print_r($data['event'][0]) . "<br>";
                //print $complete_address;

                
                $marker = array();
                $this->googlemaps->initialize($config);

                // Specify an address or lat/long for where the marker should appear.
               // echo $complete_address;
                $marker['position'] = $complete_address;//$complete_address;//'67 West, Brooklyn';
                $this->googlemaps->add_marker($marker);
                $data['map'] = $this->googlemaps->create_map();
                $data['category'] = $category;
                $data['style'] = $eventMap;
                $data['posterID'] = $data['event'][0]['e_creatorID'];
                $data['user_email_temp'] = $this->model_users->get_email($data['event'][0]['e_creatorID']);
                $data['posted_recip_id'] = $data['user_email_temp'][0]['recip_id'];
                $data['posted_fullname'] = $data['user_email_temp'][0]['fullname'];
                $data['poster_image_key'] = $data['user_email_temp'][0]['image_key'];
                $nav_data = $this->session->all_userdata();
                $result = array_merge($data,$path,$nav_data);

		
                //echo "<pre> ",print_r($data,true) ,"</pre>";
                $this->load->view('Create_Wrevel_View',$result);
                $this->load->view('event_fullview',$result);
                
                
        }
        public function Create_Wrevel_View()
            {
            $path = $this->path->getpath();
                //$data['event'] = $this->model_events->find_event();
                $data['PATH_IMG'] = $path['PATH_IMG'];
                $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];
                $data['PATH_PROFILE'] = $path['PATH_PROFILE'];    

                //$data['box_script']=$this->print_script();
                //echo $data['box_script'];            
                //echo "<br/>";
                //echo $this->input->post('e_name');
                        
                $this->load->view('Create_Wrevel_View',$data);
                        
                        
                        
                        
                       // print_r($data);      
            }
        public function create_event()
        {
            $this->load->model('model_users');
            $this->load->library('session');
            $this->load->model('model_events');
            $this->load->library('path');
            $path = $this->path->getPath();
            $config['upload_path']='./uploads/';
            $config['allowed_types']= 'gif|jpg|png|jpeg';
            $config['max_size']	= '10000';
            $config['file_name'] = md5(uniqid());
            //echo $image_name;
            $this->load->library('upload',$config);
            if (!$this->upload->do_upload())
            {
                $e_image = 'default_event_image.jpg';
            }
            else{
		$upload_data = $this->upload->data();
                $data = array('upload_data' => $this->upload->data());
		$image_name = $upload_data['file_name'];
                $e_image = $image_name;
            }
            $email = $this->session->userdata('email');
            $my_name = $this->model_users->get_name($email);
            $id = $this->model_users->get_userID($email);
            $event_id = $this->model_events->create_event($id,$e_image);
            if($event_id) {
	            $this->model_events->update_attending($id, $event_id);
	            $this->model_users->add_reputation($email, 10);
	            $this->session->set_flashdata('message','You just earned 10 reputation points for creating a new wrev!' );
	            $this->load->view('Create_Wrevel_View', $path);
	            $this->load->view('successful-event-posting', $path);
	            $this->load->library('email',array('mailtype'=>'html'));
		    $this->email->from('donotreply@wrevel.com', "Wrevel, Inc.");
		    $this->email->to($email);
		    $this->email->subject("Event Created!");
		    //message to user confirms see load library email, 2nd argument is setting to html not default text
		    $message ="<p> Hello ".$my_name."!"."</p><p>You have successfully created an event on Wrevel. You can use the following link to access your event. You can also edit the event in your My Accounts area.</p>";
		    $message .= "<p><a href='".base_url()."event/event_info/latest/".$event_id."'>Your new event.</a></p><p>________________________________</p><p>Copyright 2014 Wrevel, Inc.,<i> All Rights Reserved.</i></p><div>Connect with us!</div>";
		    $message .= "<div>www.wrevel.com</div>";
		    $message .= "<div>Facebook: www.facebook.com/wrevelinc</div>";
		    $message .= "<div>Twitter: www.twitter.com/wrevelco</div>";
		    $message .= "<div>Instagram: www.instagram.com/wrevel</div>";
		    $message .= "<div>Tumblr: wrevel.tumblr.com</div>";
		    $message .= "<div>E-mail: support@wrevel.com</div>";
		    $this->email->message($message);
		    $this->email->send();
	    }
            
        }
        public function print_script()
        {
            $path = $this->path->getpath();
                //$data['event'] = $this->model_events->find_event();
                $data['PATH_IMG'] = $path['PATH_IMG'];
                $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];
                $data['PATH_PROFILE'] = $path['PATH_PROFILE'];
                        
                $script = '';

            /*for ($i = 0; $i < 12; $i++){
                $script .="$('#".$i."').on('click', function(){"."\n".
                "var $$ = $(this)"."\n".
                "if( !$$.is('.checked')){"."\n".
                    "$$.addClass('checked');"."\n".
                    "$('#i".$i."').prop('checked', true);"."\n".
                "} else {"."<br/>".
                    "$$.removeClass('checked');"."\n".
                    "$('#i".$i."').prop('checked', false);"."\n".
                    "}"."\n".
                "})"."\n";
            }*/
        //echo $script;
        return $script;
        }
        public function hub(){
            $path = $this->path->getpath();
            $this->load->library('session');
            $this->load->model('model_users');
            $this->load->model('model_events');
            $email = $this->session->userdata('email');

            $data = $this->model_users->get_info($email);
            $data= array_merge($data,$path);
             //get states of where events that are posted are located in.
            $events_states = $this->model_events->get_states();
            $events_zipcode = $this->model_events->get_zipcode();
            $data['states']= $events_states;
            $data['zipcode'] = $events_zipcode;
            
            //Loads all the necessary Nav bar data.
            $nav_data = $this->session->all_userdata();
            $result = array_merge($data, $nav_data, $path);
            //echo "<pre> ",print_r($data,true) ,"</pre>";
            $this->load->view('Create_Wrevel_View', $path);
            $this->load->view('hub',$result);
            //$this->load->view('test_event');

        }
        public function hub_search(){
            $path = $this->path->getpath();
            $this->load->model('model_events');
            $this->load->model('model_users');
            $this->load->library('session');

            $email = $this->session->userdata('email');
            $data = $this->model_users->get_info($email);

            $search = $this->input->post('search');
            $category = $this->input->post('type');
            $price = $this->input->post('price');
            $state = $this->input->post('state');
            $zipcode = $this->input->post('zipcode');

            $events = $this->model_events->get_latest_related_events($search,$category,$price,$state,$zipcode);
           

            //$input = $this->input->post();
            //print_r($result);
            /*
            foreach($events as $event){
                echo "<a href=".base_url()."event/event_info/".$event['event_id'].'>'.$event['e_name']."</a><br>";

            }
            */
            $data= array_merge($data,$path);
            //get states of where events that are posted are located in.
            $events_states = $this->model_events->get_states();
            $data['states']= $events_states;
            $events_zipcode = $this->model_events->get_zipcode();
            $data['zipcode'] = $events_zipcode;
            $nav_data = $this->session->all_userdata();
            $all = array_merge($events,$data,$nav_data);

            //echo "<pre> ",print_r($all,true) ,"</pre>";
            $this->load->view('Create_Wrevel_View',$all);
            $this->load->view('hub',$all);
            

        }
        public function user_search(){
            $path = $this->path->getpath();
            $this->load->model('model_users');
            $this->load->library('session');


            $search_user = $this->input->post('search_user');
		//echo $search_user;
	    $users = array();
	    if($search_user != "" && $search_user != " ") {
            	$users = $this->model_users->search_by_name($search_user);
            }
           

            //$input = $this->input->post();
            //print_r($result);
            /*
            foreach($events as $event){
                echo "<a href=".base_url()."event/event_info/".$event['event_id'].'>'.$event['e_name']."</a><br>";

            }
            */
            //get states of where events that are posted are located in.
            $data['users'] = $users;
            $nav_data = $this->session->all_userdata();
            $all = array_merge($data,$path,$nav_data);

            //echo "<pre>",print_r($data,true) ,"</pre>";
            $this->load->view('Create_Wrevel_View',$all);
            $this->load->view('hub',$all);
            

        }
        public function event_comment($category,$id) { //message (chat.php)
            /* username is the user currentUser is talking to */
            $this->load->library('path');
            $this->load->library('session');
            $this->load->model('model_events');
            $this->load->model('model_users');
            $path = $this->path->getPath();
           
            $email = $this->session->userdata('email');
           
           


            $data = $this->model_users->get_info($email);
            //commentors name
            $currentUser = $data['fullname'];

            //this is where you should check whether a comment for event already exists
            if ($this->model_events->get_comments($id)){
                //comment file exists so retrieve it!
                $data['comment_file'] = $this->model_events->get_comments($id);

        
                $data['PATH_PROFILE'] = $path['PATH_PROFILE'];
                $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];
               
                /*commentLocation */
                $data['commentLocation'] = base_url()."application/views/events_comments/".$data['comment_file'];
                $data['email'] = $email;
                $data['currentUser'] = $currentUser;

                //print_r($data);
                if($data)
                {

                          /*no need to load any view since we're simply adding stuff to a file for this? */
                    //$this->load->view('event_fullview2',$data);

                }
                else{

                    //$this->load->view('')
                    //redirect('main/index');
                }
            }
            //create chat since it does not exists! 
            else{
                //create a file name for the chat
                $randomName = md5(uniqid()) . ".html";    
                $filename =  "/home/wrevelco/public_html/application/views/events_comments/".$randomName;
                //try to create file
                if ($handle=fopen($filename,'w+')){
                        //trying to insert info into db

                        if($this->model_events->create_event_comment($randomName,$id))
                        {
                            //echo "successfully created file and inserted info into database";
                            //display chat into the 
                            if ($this->model_events->get_comments($id)){
            
                                $data['comment_file'] = $randomName;//$this->model_events->get_comments($id);

                                $data['PATH_IMG'] = $path['PATH_IMG'];
                                $data['PATH_PROFILE'] = $path['PATH_PROFILE'];
                     
                                $data['commentLocation'] = base_url()."application/views/events_comments/".$data['comment_file'];
                                $data['email'] = $email;
                                $data['currentUser'] = $currentUser;

                                //print_r($data);
                                if($data)
                                {
                                            /*no need to load any view since we're simply adding stuff to a file for this? */
                                            //$this->load->view('event_fullview2',$data);

                                }
                                else{

                                    //$this->load->view('')
                                    //redirect('main/index');
                                }
                            }
                        }
                        else{
                            unlink($filename);
                            echo "could not update the database";
                        }

                }
                else{
                    echo "An error occured, could not create the file!";
                }

                

            }
            /* get comments for the event*/
           //$data['comment_file'] = $this->model_events->get_comments($id);


            $comment = $this->input->post('comment');
            /* check comment if its blank then do not write file_chat */

            $filename =  "/home/wrevelco/public_html/application/views/events_comments/".$data['comment_file'];
          //$handle = fopen($filename,'w+');
            $today = date("F j, Y, g:i a"); 
            //add commentors name instead of "Comment:"
            if($comment){
            $file_chat = "<p class='$currentUser'style='clear:both'>$currentUser: $comment <br>--$today </p><br>"; 
            }
            else{$file_chat = "";}
            //echo "actual message view = ".$somecontent. "<br>";

//<p class='test'>test: klk <br> --July 25, 2014, 5:43 pm </p><br><p class='garbo'>garbo: dimelo <br>--July 25, 2014, 5:36 pm </p> 
            /* modify the p to add class and then in html add the style to make everything related to current user go to the right*/
           
            //echo $file_chat;
            if (! $file_chat .= file_get_contents($filename) and $file_chat != "") {
                    echo "in file_chat if statement";
                    exit;
                }

            // Write $somecontent to our opened file.
            if (file_put_contents($filename, $file_chat) === FALSE) {
               echo "Cannot write to file ($filename)";
               exit;
            }

            //echo "Success, wrote ($somecontent) to file ($filename)";
            if($comment != ""){
                $this->session->set_flashdata('message','Your comment  "'.$comment.'" was posted!' );
                }
            //echo "testing this!";
            redirect('event/event_info/'.$category.'/'.$id);
            //fclose($handle);

        }
        public function attend_event($event_id, $amount) {
        	$this->load->library('session');
        	$logged_in = $this->session->userdata('is_logged_in');
        	if(!$logged_in){
                	$prompt = array('prompt_log_in' => 1);
                	$this->session->set_userdata($prompt);
                	redirect('welcome/home'); 
            	}
        	//Else continue to load profile.
        	else {
	        	$this->load->model('model_users');
	        	$this->load->model('model_events');
	        	$this->load->model('model_friend_request');
	        	
	        	$email = $this->session->userdata('email');
	        	
	                $user_id = $this->model_users->get_userID($email);
	                
	        	$already_attending = $this->model_events->update_attending($user_id, $event_id);
	                if($already_attending){
	                    $this->session->set_flashdata('message','You are already attending this wrev!' );
	                    $previous_page = $this->session->userdata('refresh_page');
	                    $previous_page = $previous_page . $event_id;
	                    redirect($previous_page);
	                }
	                else {
	                    $this->session->set_flashdata('message','You just earned 5 reputation points for going(maybe) to wrev!' );
	                    $this->model_users->add_reputation($email, $amount);
	                    //Notify the owner of the event that you are going.
	                    $event_data = $this->model_events->find_event($event_id);
	                    $event_creator = $event_data[0]['e_creatorID'];
	                    $event_name = $event_data[0]['e_name'];
	                    $creator_email = $this->model_users->get_email($event_creator);
			    $creator_email = $creator_email[0]['email'];
	                    $message = 'has attended your event, '.$event_name;
			    $this->model_friend_request->notify_other($user_id, $event_creator, $message);
	                    $previous_page = $this->session->userdata('refresh_page');
	                    $previous_page = $previous_page . $event_id;
	                    redirect($previous_page);
	                } 
		}
        	
        
        }
        
        public function like_event($event_id) {
                $this->load->library('session');
                $email = $this->session->userdata('email');
        	$this->load->model('model_events');
                $this->load->model('model_users');
                $this->load->model('model_friend_request');
                $user_id = $this->model_users->get_userID($email);
        	
        	$already_liked = $this->model_events->update_likes($user_id, $event_id);
                if($already_liked) {
                    $this->session->set_flashdata('message',"You have already liked this event! If you haven't already, you can attend this event by clicking I'm going or Maybe!");
                }
                else {
                    $this->session->set_flashdata('message','Thanks for liking this event! You can earn 5 reputation for attending events!' );
                    
                    //Notify the owner of the event that you are going.
                    $event_data = $this->model_events->find_event($event_id);
                    $event_creator = $event_data[0]['e_creatorID'];
                    if(!$event_creator == $user_id) {
	                    $event_name = $event_data[0]['e_name'];
	                    $creator_email = $this->model_users->get_email($event_creator);
			    $creator_email = $creator_email[0]['email'];
	                    $message = 'has liked your event, '.$event_name;
			    $this->model_friend_request->notify_other($user_id, $event_creator, $message);
		    }
                }
                $previous_page = $this->session->userdata('refresh_page');
        	$previous_page = $previous_page . $event_id;
        	redirect($previous_page);
      	}
      	//edit event information only if you are the creator.
      	public function edit_event($event_id) {
            $this->load->library('session');
            $this->load->model('model_events');
            $config['upload_path']='./uploads/';
            $config['allowed_types']= 'gif|jpg|png|jpeg';
            $config['max_size']	= '10000';
            $config['file_name'] = md5(uniqid());
            //echo $image_name;
            $this->load->library('upload',$config);
            if (!$this->upload->do_upload("eventfile")){
                $e_image = 0;
            }
            else{
		$upload_data = $this->upload->data();
                $data = array('upload_data' => $this->upload->data());
		$image_name = $upload_data['file_name'];
                $e_image = $image_name;
            }
            if($this->model_events->edit_event_info($event_id, $e_image)){
                $this->session->set_flashdata('message','Your event info has been updated.' );
                redirect('event/event_info/latest/'.$event_id);
            }
        }

        //Remove a user from an event.
        public function remove_from_event($user_id, $event_id) {
            $this->load->library('session');
            $this->load->model('model_events');
            $this->load->model('model_users');
            $this->model_events->remove_user($user_id, $event_id);
            $this->session->set_flashdata('message','Successfully removed user from event.');
            $previous_page = $this->session->userdata('refresh_page');
            $previous_page = $previous_page . $event_id;
            redirect($previous_page);
        }
        
	//Invite any friends you want.
	public function invite_friends($event_id) {
		$this->load->library('session');
		$this->load->model('model_users');
		$this->load->model('model_events');
		$this->load->model('model_friend_request');
		
		$email = $this->session->userdata('email');
		$user_id = $this->model_users->get_userID($email);
		
		$event_data = $this->model_events->find_event($event_id);
		
		$temp_friends = $this->input->post('friend_box');
		
		$message = 'has invited you to join the event, '.$event_data[0]['e_name'];
		for($i = 0; $i < count($temp_friends); $i++) {
			$this->model_friend_request->notify_other($user_id, $temp_friends[$i], $message);
		}
		$this->session->set_flashdata('message','Invitations have been sent out to your friend(s) to join this event!' );
		$previous_page = $this->session->userdata('refresh_page');
        	$previous_page = $previous_page . $event_id;
        	redirect($previous_page);
	}

}