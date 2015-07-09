<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Public_profile extends CI_Controller {
    
    public function user($user_id)
    {
        $this->load->library('session');
        //If the user is not logged in, prompt them to log in or sign up.
        $logged_in = $this->session->userdata('is_logged_in');
        if(!$logged_in){
                $prompt = array('prompt_log_in' => 1);
                $this->session->set_userdata($prompt);
                redirect('welcome/home'); 
            }
        //Else continue to load profile.
        else {
	        $counter =0;
	        $this->load->model('model_friend_request');
	        $this->load->model('model_users');
                $this->load->model('model_events');
	        $this->load->library('path');
	        $path = $this->path->getPath();
	
	        //get email from session
	        $email = $this->session->userdata('email');
	
	        //push the text to model users
	
	
	        $data['PATH_IMG'] = $path['PATH_IMG'];
	        $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];
	        $data['PATH_JAVASCRIPT'] = $path['PATH_JAVASCRIPT'];
	
	        $data['PATH_PROFILE'] = $path['PATH_PROFILE'];
	        $other_email = $this->model_users->get_email($user_id);

                /**
                 * Everything to do with Friends List here.
                 * Might want to do this in the model to make it cleaner.
                 */
                // Grab all your friends. Stored in 'all_friends'
                $data['all_friends'] = $this->model_friend_request->get_friendlists($user_id);
                $data['number_of_friends'] = count($data['all_friends']);
                $data['is_friend']=false;  // whether the visitor is a friend of the host 
                //Remap all needed information that will be printed: Friend ID, Friend picture, Friend name.
                for($i = 0; $i < $data['number_of_friends']; $i++) {
                    $temp_friend_data = $this->model_users->get_email($data['all_friends'][$i]['other_user_id']);
                    $data['all_friends'][$i]['friend_user_id'] = $temp_friend_data[0]['user_id'];
                    $data['all_friends'][$i]['friend_picture'] = $temp_friend_data[0]['image_key'];
                    $data['all_friends'][$i]['friend_fullname'] = $temp_friend_data[0]['fullname'];
                    if( $temp_friend_data[0]['email']==$email)
                    	 $data['is_friend']=true;
                }
                /**
                 * End of Friends List.
                 */

            /**
             * check if user is online
             */
            $data['is_online'] = $this->model_users->check_online_status($other_email[0]['email']);

	        if($other_email[0]['email'] == $email)  // this user is visiting his own showroom
	            redirect('showroom/profile');
	        else {
	            $other_data = $this->model_users->get_info($other_email[0]['email']);
	            $chatBox = $this->model_users->get_chatBox($other_data['username']);
	            //echo $chatBox . "<br>";
	            if($chatBox !=""){
	            	$data['chatBoxLocation'] = base_url()."application/views/chatbox/".$chatBox;
	            }
                    if($data)
                    {
                        //Get events data.
                        $all_events = $this->model_users->get_attending_events($user_id);
                        for($i = 0; $i < count($all_events); $i++) {
                            $temp_event = $this->model_events->find_event($all_events[$i]['event_id']);
                            $temp_user_email = $this->model_users->get_email($temp_event[0]['e_creatorID']);
                            $data['attending_events'][$i]['creator_email'] = $temp_user_email[0]['email'];
                            $data['attending_events'][$i]['event_id'] = $temp_event[0]['event_id'];
                            $data['attending_events'][$i]['e_image'] = $temp_event[0]['e_image'];
                            $data['attending_events'][$i]['e_name'] = $temp_event[0]['e_name'];
                            $data['attending_events'][$i]['e_date'] = $temp_event[0]['e_date'];
                            $data['attending_events'][$i]['e_attending'] = $temp_event[0]['e_attending'];
                            $data['attending_events'][$i]['e_likes'] = $temp_event[0]['e_likes'];
                            //change start time to 12 hr format.
                            $temp_start_time = $temp_event[0]['e_start_time'];
                            if($temp_start_time >= 780) {
                                $temp_time[0] = sprintf("%02d", floor(($temp_start_time/60) - 12));	
                                $temp_time[1] = sprintf("%02d", $temp_start_time % 60);
                                if($temp_time[0] == '00')
                                        $temp_time[0] = '12';
                                $final_time = implode(':', $temp_time);
                                $final_time .='pm';
                                $final_time = trim($final_time);
                            }
                            else {
                                $temp_time[0] = sprintf("%02d", floor($temp_start_time/60));
                                $temp_time[1] = sprintf("%02d", $temp_start_time % 60);
                                if($temp_time[0] == '00')
                                        $temp_time[0] = '12';
                                $final_time = implode(':', $temp_time);
                                $final_time .='am';
                                $final_time = trim($final_time);
                            }
                            $data['attending_events'][$i]['e_start_time'] = $final_time;
                            $data['attending_events'][$i]['e_description'] = $temp_event[0]['e_description'];
                        }
                        //This is to make sure the data doesn't conflict with the navagation bar data.
                        $other_fullname=$other_data['fullname'];
                        if(strlen($other_fullname)>20){
                        	  $other_fullname=substr($other_fullname,0,17).'...';
                        }
                        $remapped_data = array('other_id'		    => $user_id,
                                               'other_fullname'         => $other_fullname,
                                               'other_email'            => $other_email[0]['email'],
                                               'other_username'         => $other_data['username'],
                                               'other_phone'            => $other_data['phone'],
                                               'other_gender'           => $other_data['gender'],
                                               'other_birthday'         => $other_data['birthday'],
                                               'other_reputation'       => $other_data['reputation'],
                                               'other_tagline'          => $other_data['tagline'],
                                               'other_relationship'     => $other_data['relationship'],
                                               'other_location'         => $other_data['location'],
                                               'other_school'           => $other_data['school'],
                                               'other_user_reference'   => $other_data['user_reference'],
                                               'other_image_key'        => $other_data['image_key'],
                                               'other_chatbox_file'     => $other_data['chatbox_file']);
                        if($other_data['business']) {
                            $remapped_data['other_profile'] = $this->model_users->get_business_info($other_data['user_id']);
                            $data['profile'] = $this->model_users->get_business_info($other_data['user_id']);
                            $data['profile']['photos'] = array_diff(scandir('./uploads/profile/'.$other_data['user_id'].'/photos/'), array('..', '.'));
                        }
                        //boolean statement----> determine whether or not to put a notification
                        $nav_data = $this->session->all_userdata();
                        if($data)
                        {
                            $result = array_merge($nav_data, $data, $remapped_data);
                            //echo '<pre>', print_r($result, true), '</pre>';
                            $this->load->view('Create_Wrevel_View', $result);
                            if($other_data['business']) {
                                $this->load->view('business_public_profile', $result);
                            }
                            else {
                                $this->load->view('public_profile',$result);
                            }
                        }

                    }
	            else{
	                //$this->load->view('')
	                redirect('main/index');
	            }
	        }
	}
    }
    public function chatbox_comment($user_id) { //event_comment controller(event.php)
            /* username is the user currentUser is talking to */
            $this->load->library('path');
            $this->load->library('session');
           // $this->load->model('model_events');
            $this->load->model('model_users');
            $path = $this->path->getPath();
           
            $email = $this->session->userdata('email');
            $other_email = $this->model_users->get_email($user_id);
            $username = $other_email[0]['username'];
           


            $data = $this->model_users->get_info($email);
            //commentors name
            $currentUser = $data['fullname'];

            //this is where you should check whether a comment for event already exists
            if ($this->model_users->get_chatbox($username)){
                //comment file exists so retrieve it!
                $data['chatbox_file'] = $this->model_users->get_chatbox($username);

        
                $data['PATH_PROFILE'] = $path['PATH_PROFILE'];
                $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];
                
                /*commentLocation */
                $data['chatBoxLocation'] = base_url()."application/views/chatbox/".$data['chatbox_file'];
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
                $filename =  "./application/views/chatbox/".$randomName;
                //try to create file
                if ($handle=fopen($filename,'w+')){
                        //trying to insert info into db

                        if($this->model_users->create_chatBox($randomName,$username))
                        {
                            //echo "successfully created file and inserted info into database";
                            //display chat into the 
                            if ($this->model_users->get_chatbox($username)){
            
                                $data['chatbox_file'] = $randomName;//$this->model_events->get_chatbox($id);

                                $data['PATH_IMG'] = $path['PATH_IMG'];
                                $data['PATH_PROFILE'] = $path['PATH_PROFILE'];
                     
                                $data['chatBoxLocation'] = base_url()."application/views/events_comments/".$data['chatbox_file'];
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
           //$data['comment_file'] = $this->model_events->get_chatbox($id);


            $temp_comment = $this->input->post('comment');
            $comment = strip_tags($temp_comment);
            while($comment != $temp_comment) {
                $temp_comment = $comment;
                $comment = strip_tags($temp_comment);
            }
            /* check comment if its blank then do not write file_chat */

            $filename =  "./application/views/chatbox/".$data['chatbox_file'];
          //$handle = fopen($filename,'w+');
            $today = date("F j, Y, g:i a"); 
            //add commentors name instead of "Comment:"
            if($comment){
            $file_chat = "<p class='$currentUser'style='clear:both'>$currentUser: $comment <br>--$today </p><br>"; 
            }
            else{$file_chat = "";}
            //echo "actual message view = ".$somecontent. "<br>";

           
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
            //redirect('event/event_info/'.$category.'/'.$id);
            
            /*if user is posting on their own profile */
            if($username == $data['username'] ){
            redirect('showroom/profile');
             }
             /*TODO: find a way to do this for other users [I have showroom2/other/'username'] */
             else{ redirect('public_profile/user/'.$user_id);}
            //fclose($handle);

        }
            
        
}