<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Showroom extends CI_Controller {
     //CHANGED TO ONLY SHOW THE FRIEND REQUEST YOU ACCEPTED. MAYBE WE WILL CHANGE TO SHOW ALL NOTIFICATIONS
     public function notify2()
        {
	    $this->load->model('model_users');
            $this->load->model('model_friend_request');
            $this->load->library('path');
            $path = $this->path->getPath();
            $this->load->library('session');
            
            //get email from session
            $email = $this->session->userdata('email');
            $this->load->model('model_users');
            //push the text to model users

            $data = $this->model_users->get_info($email);

            /*
            Parse the file path 
            retreive sql row 1, and return the name of path here



            */
                //array_push($data,$this->model_users->get_events($userID));
            $data['PATH_IMG'] = $path['PATH_IMG'];
            $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];

            $data['PATH_PROFILE'] = $path['PATH_PROFILE'];

            //boolean statement----> determine whether or not to put a notification
            $data['my_image'] = $this->model_friend_request->get_image_key($email);
            $data['my_name'] = $this->model_friend_request->get_name($email);

            //debug works--getfile
            //Work on seeing who sends it --- check pseudocode
            //Working on trying to parse the file - works

            /*
             Pseudocode:
             Get the last word of a string ----->$get_last_word_of_line
             Transfer to check the db where the name is that string
             Retrieve that rows photo
            
            */
            
            $temp_data = $this->model_friend_request->get_notifications($data['user_id']);
            $data['counter'] = $this->session->userdata('counters');
            $data['number_of_notes'] = $temp_data['number_of_notes'];
            if($data)
            {
                        
                //send profile info into profile view
                $result = array_merge($data, $temp_data);
                //echo "<pre>", print_r($this->session->all_userdata(), true), "</pre>";
                $this->load->view('notifications',$result);
    
            }
            else{
                redirect('main/index');
            }
        }

     public function notify()
        {
            $counter =0;
            $this->load->model('model_friend_request');
            $this->load->library('path');
            $path = $this->path->getPath();
            $this->load->library('session');
            //get email from session
            $email = $this->session->userdata('email');
            $this->load->model('model_users');
            $FID = $this->session->userdata('user123');

            //push the text to model users

            $data = $this->model_users->get_info($email);

            /*
            Parse the file path 
            retreive sql row 1, and return the name of path here



            */
                //array_push($data,$this->model_users->get_events($userID));
            $data['PATH_IMG'] = $path['PATH_IMG'];
            $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];

            $data['PATH_PROFILE'] = $path['PATH_PROFILE'];

            //boolean statement----> determine whether or not to put a notification
            $data['my_image'] = $this->model_friend_request->get_image_key($email);
                $data['my_name'] = $this->model_friend_request->get_name($email);

            //debug works--getfile
            //Work on seeing who sends it --- check pseudocode
            //Working on trying to parse the file - works

            /*
             Pseudocode:
             Get the last word of a string ----->$get_last_word_of_line
             Transfer to check the db where the name is that string
             Retrieve that rows photo
            
            */

            $test = $this->model_friend_request->get_file($email);
            $file = "$test/file.txt";
            $f = fopen($file,'r');
              if ($f) {
             $line_of_notification2 = fgets($f);
                                            $data['notification'] = "$line_of_notification2";
                                                                            $counter++;

                while (!feof($f)) {
                                $line_of_notification = fgets($f);

                                          //  $data['my_name'] = $line_of_notification . " " . $file;
                                $get_last_word_of_line = explode(" ", $line_of_notification);
                                $last_word_of_line = $get_last_word_of_line[count($get_last_word_of_line)-1];
                                $counter++;
             
                              $temp =trim($last_word_of_line);
                                      if($temp == null ){
                                          $data['notification_senders_image'] =  "notify.png";
                                          $data['last_word'] = "You have no new notifications";
                                           $data['time_sent'] = " ";
                                             $data['notification'] = " ";

                                                  }else if ($temp !=null){ 
                                                      $now = new DateTime();
//  format('Y-m-d H:i:s');    // MySQL datetime format
 //$now->getTimestamp();
                                             $data['time_sent'] = $now->format('Y-m-d H:i:s');
                                             $now->getTimestamp();
                                             //determine whether it is a name or email
                                             //check to see if it contains a @, if not use get_image_with_name
                                             if (strpos($temp,"@") !== false) {
                                                //assigned pic for the append html to
                                                $pic =  $data['notification_senders_image'] = $this->model_friend_request->get_image_key("$temp");
                                             } else{                       $pic = $data['notification_senders_image'] = $this->model_friend_request->get_image_with_name("$temp");
                                            };
                                            $data['last_word'] = $last_word_of_line;
                                            //$data['notification'] .= $line_of_notification;
                                                //if more than one we have to append
                                                if ($counter > 1) {

                                                                         

                                                   // $data['notification'] .= "\n" .$line_of_notification ;
                                                    $data['notification'] .= 
                                                    '
                                                    <p style="color:gray; text-align:center;">2014-08-01 18:15:29 &nbsp;&nbsp;</p>
                                                        <p><img src=
                                                    '
                                                    .
                                                        "http://localhost/WP_intern/uploads/$pic" 
                                                    .
                                                    '

                                                        style="width:55px; height:55px;border-radius: 150px;border:2px solid #662E91;"><span style="color:white;background:#662E91; padding:5px 10px; border-radius:5px;"> Loo.alann@gmail.com </span>  
                                                    '.
                                                    
                                        
                                                    "$line_of_notification"    
                                                     .
                                                        '               
                                                         </p>
                                                        ';
                                                }
                                            
                                            $data['count'] = $this->session->userdata('counters');
                                            if (strpos($line_of_notification, 'received'))
                                            {
                                            $data['notification'] .= 
                                            
                                            '
                                            
                                            <form action="http://localhost/WP_intern/main/accept_decline" method="post" accept-charset="utf-8">
                                            <button type="submit" name = "submit" value = "Accept">Accept</button><button type="submit" name = "submit" value = "Decline">Decline</button>


                                           </form>         

                                            ';
                                            }
                                            
                                        } // end if temp != null




                                            }//end while
                 $data_counter = array(
                    'counters' => $counter
                );
            $this->session->set_userdata($data_counter);
                            fclose($f);

            }//end if $f
                            $data['count'] = $this->session->userdata('counters');

            /*
            $line_of_notification = fgets($f);
                        $counter++;

            $get_last_word_of_line = explode(" ", $line_of_notification);
            $last_word_of_line = $get_last_word_of_line[count($get_last_word_of_line)-1];

            fclose($f);
            $data_counter = array(
                    'counters' => $counter
                );
            $this->session->set_userdata($data_counter);

            $temp =trim($last_word_of_line);
            if($temp == null ){
                $data['notification_senders_image'] =  "notify.png";
                $data['last_word'] = "You have no new notifications";
                $data['time_sent'] = " ";
                $data['notification'] = " ";

            }else if ($temp !=null){ 
                 $now = new DateTime();
//$now->format('Y-m-d H:i:s');    // MySQL datetime format
 //$now->getTimestamp();
                $data['time_sent'] = $now->format('Y-m-d H:i:s');
                 $now->getTimestamp();
                 //determine whether it is a name or email
                 //check to see if it contains a @, if not use get_image_with_name
                 if (strpos($temp,"@") !== false) {
                     $data['notification_senders_image'] = $this->model_friend_request->get_image_key("$temp");
                 } else{                       $data['notification_senders_image'] = $this->model_friend_request->get_image_with_name("$temp");
 };
                $data['last_word'] = $last_word_of_line;
                $data['notification'] = $line_of_notification;
                
                $data['count'] = $this->session->userdata('counters');
                if (strpos($line_of_notification, 'received'))
                {
                $data['notification'] .= 
                
                '
                
                <form action="http://localhost/WP_intern/main/accept_decline" method="post" accept-charset="utf-8">
                <button type="submit" name = "submit" value = "Accept">Accept</button><button type="submit" name = "submit" value = "Decline">Decline</button>


               </form>         

                ';
                }
                
            }

*/

                //if image is NULL or none get the default image
                //if($data['image_key']==)
            if($data)
            {
                        
                //send profile info into profile view
                //$this->load->view('profile', $info);
                //$this->load->view('showroom',$data);
                        $this->load->view('notifications',$data);
    
            }
            else{

                //$this->load->view('')
                redirect('main/index');
            }
        }

     public function friend()
        {
            $this->load->library('path');
            $path = $this->path->getPath();
            $this->load->library('session');
            //get email from session
            $email = $this->session->userdata('user123');
            $this->load->model('model_users');
            
            $data = $this->model_users->get_info($email);
            $data['PATH_IMG'] = $path['PATH_IMG'];
            $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];

            $data['PATH_PROFILE'] = $path['PATH_PROFILE'];
                //if image is NULL or none get the default image
                //if($data['image_key']==)
            if($data)
            {
                        
                //send profile info into profile view
                //$this->load->view('profile', $info);
                //$this->load->view('showroom',$data);
                        $this->load->view('friend_view_showroom',$data);
    
            }
            else{

                //$this->load->view('')
                redirect('main/index');
            }
        }

        public function profile()
        {
            $this->load->library('session');
            $logged_in = $this->session->userdata('is_logged_in');
            //If the user is not logged in, prompt them to log in or sign up.
            if(!$logged_in){
                $prompt = array('prompt_log_in' => 1);
                $this->session->set_userdata($prompt);
                redirect('welcome/home'); 
            }
            //Else continue to load profile.
            else{
                $this->session->unset_userdata('prompt_log_in');
                $counter =0;
                $this->load->model('model_friend_request');
                $this->load->library('path');
                $path = $this->path->getPath();

                //get email from session
                $email = $this->session->userdata('email');
                $this->load->model('model_users');
                $this->load->model('model_events');
                $FID = $this->session->userdata('user123');

                //push the text to model users

                $data = $this->model_users->get_info($email);


                $data['PATH_IMG'] = $path['PATH_IMG'];
                $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];

                $data['PATH_PROFILE'] = $path['PATH_PROFILE'];

                //boolean statement----> determine whether or not to put a notification
                /**
                 * Get Notifications for the current user.
                 * Note: temp_user_id will be used for both notifications and friends list.
                 * All notifications are loaded in the model so it can be used from page to page.
                 */
                $temp_user_id = $this->model_users->get_userID($email);
                
                //End of Notifications CHANGED NOTIFICATIONS ARE IN HELPER CLASS.

                /**
                 * Everything to do with Friends List here.
                 * Might want to do this in the model to make it cleaner.
                 */
                // Grab all your friends. Stored in 'all_friends'
                $data['all_friends'] = $this->model_friend_request->get_friendlists($temp_user_id);
                $data['number_of_friends'] = count($data['all_friends']);
                //Remap all needed information that will be printed: Friend ID, Friend picture, Friend name.
                for($i = 0; $i < $data['number_of_friends']; $i++) {
                    $temp_friend_data = $this->model_users->get_email($data['all_friends'][$i]['other_user_id']);
                    $data['all_friends'][$i]['friend_user_id'] = $temp_friend_data[0]['user_id'];
                    $data['all_friends'][$i]['friend_picture'] = $temp_friend_data[0]['image_key'];
                    $data['all_friends'][$i]['friend_fullname'] = $temp_friend_data[0]['fullname'];
                }
                /**
                 * End of Friends List.
                 */
                $username = $this->model_users->get_username($email);
                $chatBox = $this->model_users->get_chatBox($username);
                //echo $chatBox . "<br>";
                if($chatBox !=""){
                    $data['chatBoxLocation'] = base_url()."application/views/chatbox/".$chatBox;
                }
                 //echo "<pre> ",print_r($data,true) ,"</pre>";

                if($data)
                {
                    //Get events data.
                    $user_id = $this->model_users->get_userID($email);
                    $all_events = $this->model_users->get_attending_events($user_id);
                    for($i = 0; $i < count($all_events); $i++) {
                        $temp_event = $this->model_events->find_event($all_events[$i]['event_id']);
                        $temp_user_email = $this->model_users->get_email($temp_event[0]['e_creatorID']);
                        $data['attending_events'][$i]['creator_email'] = $temp_user_email[0]['email'];
                        $data['attending_events'][$i]['event_id'] = $temp_event[0]['event_id'];
                        $data['attending_events'][$i]['e_image'] = $temp_event[0]['e_image'];
                        $data['attending_events'][$i]['e_name'] = $temp_event[0]['e_name'];
                        $data['attending_events'][$i]['e_date'] = $temp_event[0]['e_date'];
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
                    $result = $data;
                    //echo '<pre>', print_r($this->session->all_userdata(), true), '</pre>';
                    //$this->load->view('header', $result);
                    $this->load->view('Create_Wrevel_View', $path);
                    $this->load->view('showroom',$result);
                    //$this->load->view('footer');

                }
                else{

                    //$this->load->view('')
                    redirect('main/index');
                }
            }
            
        }
        public function profile2()
        {
                $this->load->library('path');
                $path = $this->path->getPath();
                $this->load->library('session');
                //get email from session
                $email = $this->session->all_userdata();
                //$email = $FID;
                $this->load->model('model_users');
                
                $data = $this->model_users->get_info($email);
                //array_push($data,$this->model_users->get_events($userID));
                $data['PATH_IMG'] = $path['PATH_IMG'];
                $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];

                $data['PATH_PROFILE'] = $path['PATH_PROFILE'];
                //if image is NULL or none get the default image
                //if($data['image_key']==)
                if($data)
                {
                        
                        //send profile info into profile view
                        //$this->load->view('profile', $info);
                        //$this->load->view('showroom',$data);
                        $this->load->view('showroom',$data);


                }
                else{

                        //$this->load->view('')
                        redirect('main/index');
                }
        }

public function load_account()
    {
        $this->load->library('path');
        $this->load->library('session');
        $path = $this->path->getPath();
            $data['path'] = $this->path->getpath();
        $data['PATH_IMG'] = $path['PATH_IMG'];
                $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];
        
        
        $email = $this->session->userdata('email');
            $this->load->model('model_users');
        
        $data['Info'] = $this->model_users->get_info($email);
        
        if($data)
        {
            $this->load->view("myaccount-accountinfo",$data);
            //echo '<pre>', print_r($data, true), '</pre>';
        }
                else
        {
            $this->load->view("myaccount-accountinfo",$data);
        }
    }
    
    public function update_Account($id)
    {
        $this->load->library('session');
        $this->load->model('model_users');
        $email = $this->model_users->get_email($id);
        $AccountingNumber = $this->input->post('accountingNumber');
        $RountingNumber = $this->input->post('rountingNumber');
        
        //echo $AccountingNumber;
        //echo $RountingNumber;
        //echo '<pre>', print_r($email, true), '</pre>';
        
        $data = array(
            'email' => $email[0]['email'],
            'AccountingNumber' => $AccountingNumber,
            'RountingNumber' =>$RountingNumber,
            'A_Name' => $this->input->post('A_Name')
        );
        
        
        $this->load->model("model_users");
        $this->model_users->update_account($data);
    }

    public function other($username)
        {
                $this->load->library('path');
                $path = $this->path->getPath();
                $this->load->library('session');
                //get email from session
                //$email = $this->session->userdata('email');
                $this->load->model('model_users');
                
                $data = $this->model_users->get_user($username);
                //array_push($data,$this->model_users->get_events($userID));
                $data['PATH_IMG'] = $path['PATH_IMG'];
                $data['PATH_PROFILE'] = $path['PATH_PROFILE'];
                $data['PATH_BOOTSTRAP']=$path['PATH_BOOTSTRAP'];
                //if image is NULL or none get the default image
                //if($data['image_key']==)
                $chatBox = $this->model_users->get_chatBox($username);
                 if($chatBox !=""){
                $data['chatBoxLocation'] = base_url()."application/views/chatbox/".$chatBox;
                    }
                if($data)
                {
                        
                        //send profile info into profile view
                        //$this->load->view('profile', $info);
                        //$this->load->view('showroom',$data);
                        $this->load->view('showroom',$data);

                }
                else{

                        //$this->load->view('')
                        redirect('main/index');
                }
        }
        public function chatbox_comment($username) { //event_comment controller(event.php)
            /* username is the user currentUser is talking to */
            $this->load->library('path');
            $this->load->library('session');
           // $this->load->model('model_events');
            $this->load->model('model_users');
            $path = $this->path->getPath();
           
            $email = $this->session->userdata('email');
           
           


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
                $filename =  "/home/wrevelco/public_html/alpha/application/views/chatbox/".$randomName;
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

            $filename =  "/home/wrevelco/public_html/alpha/application/views/chatbox/".$data['chatbox_file'];
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
             else{ redirect('showroom/other/'.$username);}
            //fclose($handle);

        }

	
	
	
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */