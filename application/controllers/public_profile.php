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
	        if($other_email[0]['email'] == $email)
	            redirect('showroom/profile');
	        else {
	            $other_data = $this->model_users->get_info($other_email[0]['email']);
	            $chatBox = $this->model_users->get_chatBox($other_data['username']);
	            //echo $chatBox . "<br>";
	            if($chatBox !=""){
	            	$data['chatBoxLocation'] = base_url()."application/views/chatbox/".$chatBox;
	            }
	            //This is to make sure the data doesn't conflict with the navagation bar data.
	            $remapped_data = array('other_id'		    => $user_id,
	            			   'other_fullname'         => $other_data['fullname'],
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
	                                   'other_chatbox_file'     => $other_data['chatbox_file'],
	                                   'other_friends_list'     => $other_data['friends_list']);
	                                   
	            //boolean statement----> determine whether or not to put a notification
	            $nav_data = $this->session->all_userdata();
	            if($data)
	            {
	                //echo '<pre>', print_r($this->session->all_userdata(), true), '</pre>';
	                $result = array_merge($nav_data, $data, $remapped_data);
	                $this->load->view('Create_Wrevel_View', $result);
	                $this->load->view('public_profile',$result);
	    
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
                $filename =  "/home/wrevelco/public_html/application/views/chatbox/".$randomName;
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


            $comment = $this->input->post('comment');
            /* check comment if its blank then do not write file_chat */

            $filename =  "/home/wrevelco/public_html/application/views/chatbox/".$data['chatbox_file'];
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