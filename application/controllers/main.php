<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	
public function index()
	{
		$this->load->library('session');
		$this->load->library('path');
		$data = $this->path->getPath();
		$session_counter = $this->session->userdata('is_logged_in');

		if ($session_counter > 0){
	

		$data['test_html'] =
		'
    	  <div class="modal-dialog">

        '
      	.
      	'
      	 <form action="http://localhost/WP_intern/event/create_event" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<input type="hidden" name="icebreakers" value="0" />
<input type="hidden" name="meetups" value="0" />
<input type="hidden" name="parties" value="0" />
<input type="hidden" name="clubs" value="0" />
<input type="hidden" name="concerts" value="0" />
<input type="hidden" name="festivals" value="0" />
<input type="hidden" name="explore" value="0" />
<input type="hidden" name="romance" value="0" />
<input type="hidden" name="lounges" value="0" />
<input type="hidden" name="bars" value="0" />
<input type="hidden" name="hotspots" value="0" />
<input type="hidden" name="culture" value="0" />

      	'

      	.

      	'

        <div class="modal-content" style="color:white; background:#216EAD; width:800px;">
        <div class="panel" style="border:none; ">
        <div class="panel-body" style="background:#216EAD;">
        <h1 style="text-align:center;">create a wrev</h1>
          
          <div class="col-md-4" style="padding:10px; ">
              <p style="text-align:center;">select one or more</p>
  
    
    
    <div class="apare" id="exhgt">
      
    '
    .

    '
     <img src=
     '
     .
     "http://localhost/WP_intern/src/data/img/hotspots_button.png" 
     .
     '
     id= 0 name = "is_hotspot" value = "1" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;" /> &nbsp; &nbsp;
    '
    .

     '
     <img src=
     '
     .
     "http://localhost/WP_intern/src/data/img/icebreakers_button.png" 
     .
     '
     id= 1 name = "is_icebreakers" value = "1" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;" /> &nbsp; &nbsp;
    '
    .

     '
     <img src=
     '
     .
     "http://localhost/WP_intern/src/data/img/culture_button.png" 
     .
     '
     id= 2 name = "is_culture" value = "1" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;" /> &nbsp; &nbsp;
    '
    .

     '
     <img src=
     '
     .
     "http://localhost/WP_intern/src/data/img/meetups_button.png" 
     .
     '
     id= 3 name = "is_meetups" value = "1" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;" /> &nbsp; &nbsp;
    '
    .

     '
     <img src=
     '
     .
     "http://localhost/WP_intern/src/data/img/exploringyourcity_button.png" 
     .
     '
     id= 4 name = "is_exploringyourcity" value = "1" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;" /> &nbsp; &nbsp;
    '
    .

     '
     <img src=
     '
     .
     "http://localhost/WP_intern/src/data/img/loveandromance_button.png" 
     .
     '
     id= 5 name = "is_l&r" value = "1" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;" /> &nbsp; &nbsp;
    '
    .

     '
     <img src=
     '
     .
     "http://localhost/WP_intern/src/data/img/parties_button.png" 
     .
     '
     id= 6 name = "is_parties" value = "1" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;" /> &nbsp; &nbsp;
    '
    .

     '
     <img src=
     '
     .
     "http://localhost/WP_intern/src/data/img/clubs_button.png" 
     .
     '
     id= 7 name = "is_clubs" value = "1" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;" /> &nbsp; &nbsp;
    '
    .

     '
     <img src=
     '
     .
     "http://localhost/WP_intern/src/data/img/concerts_button.png" 
     .
     '
     id= 8 name = "is_concerts" value = "1" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;" /> &nbsp; &nbsp;
    '
    .

     '
     <img src=
     '
     .
     "http://localhost/WP_intern/src/data/img/festivals_button.png" 
     .
     '
     id= 9 name = "is_festivals" value = "1" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;" /> &nbsp; &nbsp;
    '
    .

     '
     <img src=
     '
     .
     "http://localhost/WP_intern/src/data/img/lounges_button.png" 
     .
     '
     id= 10 name = "is_lounges" value = "1" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;" /> &nbsp; &nbsp;
    '
    .

     '
     <img src=
     '
     .
     "http://localhost/WP_intern/src/data/img/bars_button.png" 
     .
     '
     id= 11 name = "is_bars" value = "1" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;" /> &nbsp; &nbsp;
    '
    .

    '

         <input type="checkbox" id="i0" name="hotspots" value="1024"  />
        <input type="checkbox" id="i1" name="icebreakers" value="1"  />
        <input type="checkbox" id="i2" name="culture" value="2048"  />
        <input type="checkbox" id="i3" name="meetups" value="2"  />
        <input type="checkbox" id="i4" name="explore" value="64"  />
        <input type="checkbox" id="i5" name="romance" value="128"  />
        <input type="checkbox" id="i6" name="parties" value="4"  />
        <input type="checkbox" id="i7" name="clubs" value="8"  />
        <input type="checkbox" id="i8" name="concerts" value="16"  />
        <input type="checkbox" id="i9" name="festivals" value="32"  />
        <input type="checkbox" id="i10" name="lounges" value="256"  />
        <input type="checkbox" id="i11" name="bars" value="512" style="visibility:hidden" />

    </div>
    
            </div>
            <div class="col-md-8" style="border-left:1px solid white;">
              <div class="row" >
                  <div class="col-md-8">
      
                <form class="form-horizontal" role="form">
            <div class="form-group">
              <label class="col-sm-2 control-label">title:</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name = "e_name" value = "Test" placeholder="type in something witty">
              </div>
            </div>
                    
                    <div class="form-group">
              <label class="col-sm-2 control-label">info:</label>
              <div class="col-sm-10">
                  <textarea class="form-control" rows="3" name = "e_description" placeholder="type in something attention grabbing"></textarea>
              </div>
            </div>
                    <div class="form-group">
                      <div class="form-group row">
                          <label class="col-sm-2 control-label" name = "e_date" style="margin-left:10px;">date:</label>
                            <div class="col-sm-4">
                              <input type="date" name = "e_date" class="form-control" value = "2000-01-01">
                            </div>
                            <label class="col-sm-2 control-label">time start:</label>
                            <div class="col-sm-3">
                              <input type="time" class="form-control" name = "e_start_time" placeholder="hours?" value = "00:00">
                            </div>
                         </div>
      <label class="col-sm-2 control-label">time end:</label>
                            <div class="col-sm-3">
                              <input type="time" class="form-control" name = "e_end_time" placeholder="hours?" value = "00:00">
                            </div>
                    </div>
                    <br/>
        <br/>
        <br/>
        <br/>
                
                    <label class="col-sm-2 control-label">Capacity</label>
                            <div class="col-sm-3">
                              <input type="text" class="form-control" name = "e_capacity" placeholder="hours?">
                            </div>
                    <div class="form-group">
              <label class="col-sm-2 control-label">location:</label>
              <div class="col-sm-10">
                  <input type="text" name = "e_address" class="form-control" placeholder="where is it?">
              </div>
            </div>
                    
                    <div class="form-group">
                      <div class="form-group row">
                          <label class="col-sm-2 control-label"  style="margin-left:15px;">state:</label>
                            <div class="col-sm-3" >
                              <input type="text" name = "e_state" class="form-control" >
                            </div>
                            <label class="col-sm-1 control-label" >city:</label>
                            <div class="col-sm-5" >
                              <input type="text" class="form-control" name = "e_city">
                            </div>
                            
                         </div>   
                    </div>
                    <div class="form-group">
              <label class="col-sm-2 control-label">zip:</label>
              <div class="col-sm-3">
                  <input type="text" name = "e_zipcode" class="form-control" >
              </div>
            </div>
                    
                    <div class="form-group">
                      <div class="form-group row">
                          <label class="col-sm-2 control-label"  style="margin-left:10px;">country:</label>
                            <div class="col-sm-3">
                              <input type="text" name = "e_country" class="form-control">
                            </div>
                            <label class="col-sm-2 control-label"  style="margin:0;">phone:</label>
                            <div class="col-sm-4">
                              <input type="tel" class="form-control" name = "e_phone">
                            </div>
                         </div>                               
                    </div>
                    
                    <div class="form-group">
              <label class="col-sm-2 control-label">email:</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name = "e_email">
              </div>
            </div>
                    
                    <div class="form-group">
              <label class="col-sm-3 control-label">website(s):</label>
              <div class="col-sm-9">
                  <input type="text" name = "e_website" class="form-control" >
              </div>
            </div>
  
            <div class="form-group">
                      <label class="col-sm-2 control-label">free?</label>
              <div class="col-sm-10">
                       <input type="checkbox" name="e_is_free" value= 1> yes
               <input type="checkbox" name="e_is_free" value= 0> no
                               
              </div>
                     </div>  
                     <div class="form-group">
              <label class="col-sm-2 control-label">price($):</label>
              <div class="col-sm-10">
                  <input type="text" name = "e_price" class="form-control">
              </div>
            </div>  
                     <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                  
                  <form>
                        ticketed <input type="radio" name="e_is_ticket" value = "Tickited"> 
                nonticketed <input type="radio" name="e_is_ticket" value = "unTickited"> 
                  </form>
                  
              </div>
                     </div> 
                     
                    
                    <div class="form-group">
                      <label class="col-sm-5">event type</label>
                        <div class="col-sm-7">
                          <input type="checkbox" name = "e_type" value="public"> public 
                            <input type="checkbox" name = "e_type" value="private"> private
                        </div>
                    </div>
                      
        </form>
                  </div>
                    <div class="col-md-4" style="text-align:center;">
                



                    <div class="image-upload">
                   
                        <label for="file-input">
                     '
                     .
                     '   
                        
                    <i class="fa fa-camera fa-flip-horizontal fa-5x"></i>
                      '
                      .
                      '  
                        </label>
                            <label for ="file-upload">
                         
                            </label>


                        
                        <input id="file-input" name = "userfile" type = "file"/>
                        </form>
                
                    </div>
                
                    <style>

                    .image-upload > input
                    {
                        display: none;
                    }
                   </style>

                  

                    <div style="margin-top:25px;">
                      hide event address <input type="radio" name = "e_is_hide" value = "Yes">
                    </div>
                
                    <i class="fa fa-ticket fa-flip-horizontal fa-5x" style="margin-top:25px;"></i>
                    <a data-toggle="modal" href="#myModal2" class="btn" type="button" style="background:#47AFEA; color:white;">set up tickets</a>
                
                </div>
                </div>
                <hr width="90%">
               <div class="row">
                  <div class="row">
                      <div class="col-md-3" style="text-align:center;">
                      <span class="glyphicon glyphicon-user fa-5x"></span>
                        
                        <button type="button" class="btn" style="background:#47AFEA; color:white;">invite friends</button>
                        </div>
                        
                        <div class="col-md-8">
                        <p>share this wrev on your facebook, twitter, or other media sites</p>
                        <p style="text-align:center;">
                          <span class="fa-stack fa-lg" style="padding:10px 25px;">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse" style="color:#216EAD;"></i>
              </span>
                          <span class="fa-stack fa-lg" style="padding:10px 25px;">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse" style="color:#216EAD;"></i>
              </span>
                          <span class="fa-stack fa-lg" style="padding:10px 25px;">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-instagram fa-stack-1x fa-inverse" style="color:#216EAD;"></i>
              </span>
                          <span class="fa-stack fa-lg" style="padding:10px 25px;">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-tumblr fa-stack-1x fa-inverse" style="color:#216EAD;"></i>
              </span>
                          <span class="fa-stack fa-lg" style="padding:10px 25px;">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-youtube fa-stack-1x fa-inverse" style="color:#216EAD;"></i>
              </span>
                        </p>
                        
                        </div>

                     </div>
                     <div class="row" style="margin-top:35px;">
                      <div class="col-md-3" style="text-align:center;">
                      <i class="fa fa-tag fa-5x"></i>
                        <button type="button" class="btn" style="background:#47AFEA; color:white;">create tags</button>
                        </div>
                        
                        <div class="col-md-8">
                        <textarea class="form-control" rows="3"></textarea>
                        
                        <button type="button" style="color:#216EAD;">add</button>
                        <button type="button" style="color:#216EAD;">delete</button>
                        
                        </div>
                     </div>
               </div>
            </div>
            <div class="pull-right" style="display:inline;">
            
             
             <input type="submit" name = "submit" value = "Submit" class="btn btn-lg" style="color:#216EAD;"></input>
             </div>
      <?php echo form_close();?>
        </div>
        </div>
        </div>
      </div>
		';

		$this->load->view('view_login',$data);
		$this->load->library('session');

		}else{
			echo "you need to log in";
		}

		


	
	}
	
	//Delete your friend off your friends list.
	
	/*public function this_is_not_a_test() {
		$this->load->model('model_transfer_data');
		$number = $this->model_transfer_data->lastcheck();
		echo $number;
	}*/
	
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
	
	//notification
	public function like_event(){
		$this->load->library('session');
		$this->load->model('model_events');
		$this->load->model('model_friend_request');
		$email = $this->session->userdata('email');

		$id = $this->session->userdata('eventID'); 
		$host = $this->model_events->get_host($id);
		$host_file = $this->model_friend_request->get_file($host);
		$event_name = $this->model_events->get_event_name($id);
		$write_file= fopen("$host_file/file.txt", "a+");
		$txt = "Liked your event-$event_name: $email";
				fwrite($write_file,"\n". $txt );
				echo "sent a notification to $host with the notification of $txt";


	}


	//notification
	public function imGoing(){
		/*
		pscode: 
		user clicks the event button
		sends a notification to the host that he is going
		get the host by going to the event database and seeing who is the host by using the ID 

		send the host a notification

		*/
		$this->load->library('session');
		$this->load->model('model_events');
		$this->load->model('model_friend_request');
		$email = $this->session->userdata('email');

		$id = $this->session->userdata('eventID'); 
		$host = $this->model_events->get_host($id);
		$host_file = $this->model_friend_request->get_file($host);

		echo "the host file is $host_file";
		$write_file= fopen("$host_file/file.txt", "a+");
		$txt = "Attending your event $email";
				fwrite($write_file, $txt . "\n");





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