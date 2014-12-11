<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chat extends CI_Controller {
     
                    
        public function chatList()
        {
            /* this function is used to retrieve all chats related to current user*/
            $this->load->library('path');
            $path = $this->path->getPath();
            $this->load->library('session');
            $this->load->model('model_chats');
            $this->load->model('model_users');
            //get email from session
            $email = $this->session->userdata('email');
            $data = $this->model_users->get_info($email);
           
            $currentUser = $data['username'];
            $chatList = $this->model_chats->get_chatList($currentUser);
            print_r($chatList);
            echo "<br>";
		
        }
        /*
        public function inbox(){
            $this->load->library('path');
            $path = $this->path->getPath();
            $data['PATH_IMG'] = $path['PATH_IMG'];
            $data['PATH_PROFILE'] = $path['PATH_PROFILE'];
            $data['PATH_BOOTSTRAP']= $path['PATH_BOOTSTRAP'];

            //$this->load->library('session');
            $this->load->view('inbox',$data);
        }
        */
       public function messageView() /* get rid of $username not needed */
        {
            $this->load->library('path');
            $path = $this->path->getPath();
            $this->load->library('session');
            //get email from session
            $email = $this->session->userdata('email');
            $this->load->model('model_chats');
            $this->load->model('model_users');
            $this->load->model('model_friend_request');



            $data = $this->model_users->get_info($email);
            $data['PATH_IMG'] = $path['PATH_IMG'];
            $data['PATH_PROFILE'] = $path['PATH_PROFILE'];
            $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];
            $data['PATH_JAVASCRIPT'] = $path['PATH_JAVASCRIPT'];
            $currentUser = $data['username'];
		
            /*get all chats related to current user */
            $chatList = $this->model_chats->get_chatList($currentUser);
            //print_r($data);

            /*
            chats_info = Array(
                        [0] = Array([otherUser]=> 'gc2bt', [chatLocation]=>....)
                        [1] = Array([otherUser]=> 'gc2bt', [chatLocation]=>....)
                        )
                        */
            $chats_info = array();

            //parse the information from each chats to get the other person's username and location of file
            for ($i=0; $i < count($chatList); $i++){
                        $chats_info[$i]['currentUser']=$currentUser;
                if ($chatList[$i]['person1']!=$currentUser){ 
                        /* get other user's image */
                        $image = base_url()."uploads/".$this->model_chats->get_otherUsers_image($chatList[$i]['person1']);
                        $chats_info[$i]['image']=  $image;
                        /*TODO: modify here to get the full name instead of username */
                        //$this->model_users->get_user_fullname($chatList[$i]['person1']);   
                        $chats_info[$i]['otherUserFullname']= $this->model_users->get_user_fullname($chatList[$i]['person1']); 
                        $chats_info[$i]['otherUser'] = $chatList[$i]['person1'];   
                        $chats_info[$i]['chatLocation']=base_url()."application/views/chats/".$chatList[$i]['chat_file'];
                        $chats_info[$i]['reply_time']=date("F j, Y, g:i a", strtotime($chatList[$i]['reply_time']));
                        $chats_info[$i]['latest_replier']=$chatList[$i]['latest_replier'];
                        $chats_info[$i]['status']=$chatList[$i]['status'];
                        //echo 'http://localhost/WP_intern/chat/messageView2/'.$chatList[$i]['person1']."<br>";
                       // echo $chatList[$i]['person1']."<br>";
                    }

                else{
                        $image = base_url()."uploads/".$this->model_chats->get_otherUsers_image($chatList[$i]['person2']);
                        //echo $image;
                        $chats_info[$i]['image']=  $image;
                        $chats_info[$i]['otherUserFullname']= $this->model_users->get_user_fullname($chatList[$i]['person2']); 
                  
                        $chats_info[$i]['otherUser'] = $chatList[$i]['person2'];   
                        $chats_info[$i]['chatLocation']=base_url()."application/views/chats/".$chatList[$i]['chat_file'];
                        $chats_info[$i]['reply_time']=date("F j, Y, g:i a", strtotime($chatList[$i]['reply_time']));
                        $chats_info[$i]['latest_replier']=$chatList[$i]['latest_replier'];
                        $chats_info[$i]['status']=$chatList[$i]['status'];


                 //echo 'http://localhost/WP_intern/chat/messageView2/garbo'.$chatList[$i]['person2']."<br>";
                                         //echo $chatList[$i]['person2']."<br>";

                }
            }
            $friends_name_array = array();
            $friends_username_array = array();
            $friends_email_array = array();
            $handle = $this->model_friend_request->get_friendlists($data['user_id']);
            if ($handle) {
                for($i = 0; $i < count($handle); $i++) {
                    $temp_friend_info = $this->model_users->get_email($handle[$i]['other_user_id']);
                    $friends_name_array[$i] = $temp_friend_info[0]['fullname'];
                    $friends_username_array[$i] = $temp_friend_info[0]['username'];
                    $friends_email_array[$i] = $temp_friend_info[0]['email'];
                }
                $data['friends_name'] = $friends_name_array;
            	$data['friends_username'] = $friends_username_array;
            	$data['friends_email'] = $friends_email_array;
            }
            //Pass it to the data for the view to get it.
            
             $this->session->set_userdata($chats_info);
           // print_r($chats_info);
            $data['chats_info'] = $chats_info;
            $data['num_chats'] = count($chats_info);  
	    $nav_data = $this->session->all_userdata();
	    $result = array_merge($data, $nav_data);
            //print_r($test);
            //print_r($data);   
            
            if($data)
                {

                            //$this->load->view('chats/test',$data);
                        //$this->load->view('chatpart2',$data);
                        //$this->load->view('inbox3',$data);
                        //$this->load->view('chatpart3',$data);
                        //echo '<pre>', print_r($this->session->userdata, true), '</pre>';
                        $this->load->view('Create_Wrevel_View',$result);
                        $this->load->view('inbox4',$result);

                }
                else{

                    //$this->load->view('')
                    redirect('main/index');
                }
                
        }
        public function message() {
            /* username is the user currentUser is talking to */
            $this->load->library('path');
            $path = $this->path->getPath();
            $this->load->library('session');
            $email = $this->session->userdata('email');
            $this->load->model('model_chats');
            $this->load->model('model_users');


            $data = $this->model_users->get_info($email);
            //get the chat information;
            $currentUser = $data['username'];
            $fullName = $data['fullname'];
            $username = $this->input->post('other_user');

            //this is where you should check whether a chat between two users already exists
            if ($this->model_chats->get_chats($currentUser,$username)){
                //chat exists so retrieve it!
                $data = array_merge($data,$this->model_chats->get_chats($currentUser,$username));

                $data['PATH_IMG'] = $path['PATH_IMG'];
                $data['PATH_PROFILE'] = $path['PATH_PROFILE'];
                $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];
                
                /*chatLocation becomes an array to allows retrieving multiple chats */

                $data['chatLocation'] = base_url()."application/views/chats/".$data[0]['chat_file'];
                $data['email'] = $email;
                $data['currentUser'] = $currentUser;
                $data['otherUser']=$username;

                //print_r($data);
                if($data)
                {

                            //$this->load->view('chats/test',$data);
                        //$this->load->view('chatpart2',$data);
                        $this->load->view('inbox4',$data);

                }
                else{

                    //$this->load->view('')
                    redirect('main/index');
                }
            }
            //create chat since it does not exists! 
            else{
                //create a file name for the chat
                $randomName = md5(uniqid()) . ".html";    
                $filename =  "/home/wrevelco/public_html/application/views/chats/".$randomName;
                //try to create file
                if ($handle=fopen($filename,'w+')){
                        //trying to insert info into db

                        if($this->model_chats->create_chats($currentUser,$username,$randomName))
                        {
                            //echo "successfully created file and inserted info into database";
                            //display chat into the 
                            if ($this->model_chats->get_chats($currentUser,$username)){
            
                                $data = array_merge($data,$this->model_chats->get_chats($currentUser,$username));

                                $data['PATH_IMG'] = $path['PATH_IMG'];
                                $data['PATH_PROFILE'] = $path['PATH_PROFILE'];
                     
                                $data['chatLocation'] = base_url()."application/views/chats/".$data[0]['chat_file'];
                                $data['email'] = $email;
                                $data['currentUser'] = $currentUser;
                                $data['otherUser']=$username;

                                //print_r($data);
                                if($data)
                                {

                                            $this->load->view('inbox4',$data);

                                }
                                else{

                                    //$this->load->view('')
                                    redirect('main/index');
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

                //fopen($filename);

            }
            /* get chat between currentUser and the other user */
            $data = array_merge($data,$this->model_chats->get_chats($currentUser,$username));

            $temp_comment = $this->input->post('comment');
            $comment = strip_tags($temp_comment);
            while($comment != $temp_comment) {
                $temp_comment = $comment;
                $comment = strip_tags($temp_comment);
            }
            /* check comment if its blank then do not write file_chat */

            $filename =  "/home/wrevelco/public_html/application/views/chats/".$data[0]['chat_file'];
            $today = date("F j, Y, g:i a"); 
            //add commentors name instead of "Comment:"
            if($comment){
            $file_chat = "<p class='$currentUser'style='clear:both'>$fullName: $comment <br>--$today </p><br>"; 
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
            $this->model_chats->latest_comment($currentUser,$username,date("Y-m-d H:i:s"));
            if($comment != ""){
                $this->session->set_flashdata('message','message "'.$comment.'" was sent to '.$username.'.');
                //Notify the other person that you sent them a message.
                $to_email_temp = $this->model_users->get_user($username);
                $to_email = $to_email_temp['email'];
                $to_user_id = $to_email_temp['user_id'];
		$to_file = $this->model_friend_request->send_message($data['user_id'], $to_user_id);
            }
            //echo "testing this!";
            redirect('chat/messageView/');
            fclose($handle);

        }
            public function composeMessage() {
            //this is where you should check whether a chat already exists
            /* username is the user currentUser is talking to */
            $this->load->library('path');
            $path = $this->path->getPath();
            $this->load->library('session');
            $email = $this->session->userdata('email');
            $this->load->model('model_chats');
            $this->load->model('model_users');
            $this->load->model('model_friend_request');
            $To = $this->input->post('to');


            $data = $this->model_users->get_info($email);
            //get the chat information;
            $currentUser = $data['username'];
            if ($this->model_chats->get_chats($currentUser,$To)){
                //chat exists so retrieve it!
                $data = array_merge($data,$this->model_chats->get_chats($currentUser,$To));

                $data['PATH_IMG'] = $path['PATH_IMG'];
                $data['PATH_PROFILE'] = $path['PATH_PROFILE'];
                $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];
                
                /*chatLocation becomes an array to allows retrieving multiple chats */

                $data['chatLocation'] = base_url()."application/views/chats/".$data[0]['chat_file'];
                $data['email'] = $email;
                $data['currentUser'] = $currentUser;
                $data['otherUser']=$To;

                //print_r($data);
                if($data)
                {

                            //$this->load->view('chats/test',$data);
                        //$this->load->view('chatpart2',$data);
                    $this->load->view('inbox4',$data);
                        //redirect('chat/messageView');

                }
                else{

                    //$this->load->view('')
                    redirect('main/index');
                }
            }
            //create chat since it does not exists! 
            else{
                //create a file name for the chat
                $randomName = md5(uniqid()) . ".html";    
                $filename =  "/home/wrevelco/public_html/application/views/chats/".$randomName;
                //try to create file
                if ($handle=fopen($filename,'w+')){
                        //trying to insert info into db

                        if($this->model_chats->create_chats($currentUser,$To,$randomName))
                        {
                            //echo "successfully created file and inserted info into database";
                            //display chat into the 
                            if ($this->model_chats->get_chats($currentUser,$To)){
            
                                $data = array_merge($data,$this->model_chats->get_chats($currentUser,$To));

                                $data['PATH_IMG'] = $path['PATH_IMG'];
                                $data['PATH_PROFILE'] = $path['PATH_PROFILE'];
                     
                                $data['chatLocation'] = base_url()."application/views/chats/".$data[0]['chat_file'];
                                $data['email'] = $email;
                                $data['currentUser'] = $currentUser;
                                $data['otherUser']=$To;

                                //print_r($data);
                                if($data) {}
                                else{

                                    //$this->load->view('')
                                    redirect('main/index');
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

                //fopen($filename);

            }
            /* get chat between currentUser and the other user */
            $data = array_merge($data,$this->model_chats->get_chats($currentUser,$To));
                
            $temp_comment = $this->input->post('comment');
            $comment = strip_tags($temp_comment);
            while($comment != $temp_comment) {
                $temp_comment = $comment;
                $comment = strip_tags($temp_comment);
            }
            /* check comment if its blank then do not write file_chat */

            $filename =  "/home/wrevelco/public_html/application/views/chats/".$data[0]['chat_file'];
            $today = date("F j, Y, g:i a"); 
            //add commentors name instead of "Comment:"
            $file_chat = "<p class='$currentUser'style='clear:both'>$currentUser: $comment <br>--$today </p><br>"; 
            //echo "actual message view = ".$somecontent. "<br>";

//<p class='test'>test: klk <br> --July 25, 2014, 5:43 pm </p><br><p class='garbo'>garbo: dimelo <br>--July 25, 2014, 5:36 pm </p> 
            /* modify the p to add class and then in html add the style to make everything related to current user go to the right*/
           
            
            if (! $file_chat .= file_get_contents($filename)) {
                    echo "Cannot open file ($filename)";
                    exit;
                }

            // Write $somecontent to our opened file.compo
            if (file_put_contents($filename, $file_chat) === FALSE) {
               echo "Cannot write to file ($filename)";
               exit;
            }

            //echo "Success, wrote ($somecontent) to file ($filename)";
            $this->model_chats->latest_comment($currentUser,$To,date("Y-m-d H:i:s"));
            if($comment != ""){
                $this->session->set_flashdata('message','message "'.$comment.'" was sent to '.$To.'.');
                //Notify the other person that you sent them a message.
                $to_email_temp = $this->model_users->get_user($To);
                $to_email = $to_email_temp['email'];
                $to_user_id = $to_email_temp['user_id'];
		$to_file = $this->model_friend_request->send_message($data['user_id'], $to_user_id);
            }            //echo "testing this!";
            redirect('chat/messageView/');
            if(isset($handle))
            	fclose($handle);

        }
        public function image_message($username) {
            /* username is the user currentUser is talking to */
            $this->load->library('path');
            $path = $this->path->getPath();
            $this->load->library('session');
            $email = $this->session->userdata('email');
            $this->load->model('model_chats');
            $this->load->model('model_users');


            $data = $this->model_users->get_info($email);
            //get the chat information;
            $currentUser = $data['username'];

            //this is where you should check whether a chat between two users already exists
            if ($this->model_chats->get_chats($currentUser,$username)){
                //chat exists so retrieve it!
                $data = array_merge($data,$this->model_chats->get_chats($currentUser,$username));

                $data['PATH_IMG'] = $path['PATH_IMG'];
                $data['PATH_PROFILE'] = $path['PATH_PROFILE'];
                $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];
                
                /*chatLocation becomes an array to allows retrieving multiple chats */

                $data['chatLocation'] = base_url()."application/views/chats/".$data[0]['chat_file'];
                $data['email'] = $email;
                $data['currentUser'] = $currentUser;
                $data['otherUser']=$username;

                //print_r($data);
                if($data)
                {

                            //$this->load->view('chats/test',$data);
                        //$this->load->view('chatpart2',$data);
                        $this->load->view('inbox4',$data);

                }
                else{

                    //$this->load->view('')
                    redirect('main/index');
                }
            }
            //create chat since it does not exists! 
            else{
                //create a file name for the chat
                $randomName = md5(uniqid()) . ".html";    
                $filename =  "/home/wrevelco/public_html/application/views/chats/".$randomName;
                //try to create file
                if ($handle=fopen($filename,'w+')){
                        //trying to insert info into db

                        if($this->model_chats->create_chats($currentUser,$username,$randomName))
                        {
                            //echo "successfully created file and inserted info into database";
                            //display chat into the 
                            if ($this->model_chats->get_chats($currentUser,$username)){
            
                                $data = array_merge($data,$this->model_chats->get_chats($currentUser,$username));

                                $data['PATH_IMG'] = $path['PATH_IMG'];
                                $data['PATH_PROFILE'] = $path['PATH_PROFILE'];
                     
                                $data['chatLocation'] = base_url()."application/views/chats/".$data[0]['chat_file'];
                                $data['email'] = $email;
                                $data['currentUser'] = $currentUser;
                                $data['otherUser']=$username;

                                //print_r($data);
                                if($data)
                                {

                                            $this->load->view('inbox4',$data);

                                }
                                else{

                                    //$this->load->view('')
                                    redirect('main/index');
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

                //fopen($filename);

            }
            /* get chat between currentUser and the other user */
            $data = array_merge($data,$this->model_chats->get_chats($currentUser,$username));

            $comment = $this->input->post('comment');
            /* check comment if its blank then do not write file_chat */

            $filename =  "/home/wrevelco/public_html/application/views/chats/".$data[0]['chat_file'];
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
            $this->model_chats->latest_comment($currentUser,$username,date("Y-m-d H:i:s"));
            if($comment != ""){
                $this->session->set_flashdata('message','message "'.$comment.'" was sent to '.$username.'.');
                }
            //echo "testing this!";
            redirect('chat/messageView/');
            $handle=fclose($handle);

        }
        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */