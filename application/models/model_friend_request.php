<?php

class Model_friend_request extends CI_Model{
    
  /*
    
    Pretty much the same as model_users because 
    I ended up parsing info from the textfiles 
    for notifications 

  */

   function __construct()
   {
            parent::__construct();
            $this->load->database();
            
    }

    /*
	Update db User1 to sent one
	Update db User2 to received one
	
    */

    public function add_friend_request($user_id, $other_user_id)
    {
        $this->load->helper('date');
        $sql = "SELECT * FROM friends_notifications_list WHERE (user_id =? AND other_user_id =?) OR (user_id =? AND other_user_id =?)";
        $query_check = $this->db->query($sql, array($user_id, $other_user_id, $other_user_id, $user_id));
        if(!$query_check->num_rows()) {
            $data = array('user_id' => $user_id,
                          'other_user_id' => $other_user_id,
                          'friend' => 0);
            $this->db->insert('friends_notifications_list', $data);
            $friend_id = $this->db->insert_id();
            $datestring = '%Y-%m-%d %H:%i:%s';
            $time = time();
            $request_data = array('notification_id' => $friend_id,
                                  'message' => 'has sent you a friend request',
                                  'to_from' => 'to',
                                  'time_sent' => mdate($datestring, $time));
            $this->db->insert('notifications',$request_data);
            return true;
        }
        else {
        	$data = $query_check->row_array(0);
        	if(!$data['friend']) {
        		$sql = "SELECT * FROM notifications WHERE notification_id =?";
	        	$message_check = $this->db->query($sql, array($data['id'],));
	        	$final_check = $message_check->result_array();
	        	for($i = 0; $i < count($final_check); $i++) {
	        		if(strpos($final_check[$i]['message'], 'friend request')) {
	        			return false;
	        		}
	        	}
	        	if($data['user_id'] == $user_id) 
	        		$to_from = 'to';
	        	else
	        		$to_from = 'from';
	        	$datestring = '%Y-%m-%d %H:%i:%s';
	                $time = time();
	        	$insert_data = array('notification_id' => $data['id'],
	        			     'message' => 'has sent you a friend request',
	        			     'to_from' => $to_from,
	        			     'time_sent' => mdate($datestring, $time));
	        	$this->db->insert('notifications', $insert_data);
	        	return true; 	
	        }
	        else
	        	
	        	return false;
        }
        
    }
 public function edit_info($email,$data) //CHANGED!!!!
    {
        /*
        $data = array(
                        'email'=>$this->session->userdata('email'),
                        'Location' =>$this->input->post('Location'),
                        'Name' => $this->input->post('Name'),
                        'Education' => $this->input->post('Education')
                      
                      );
        */

        //$data = $this->input->post();

        foreach ($data as $i => $value){
          //if user inputted a value then update it
          if($value and $value != 'Change'){
            $info_updating[$i] = $value;
          }
        }
                
         $query = $this->db->update('users', $info_updating, array('email'=>$email));
         
         if($query)
         {
            return  true;
         }
         else return false;
    }
    //Search the notifications database for all notifications for a specific user.
    public function get_notifications($user_id)
    {
        $this->load->model('model_users');
        $sql = "SELECT notifications.id, user_id, other_user_id, message, to_from, time_sent "
              . "FROM friends_notifications_list INNER JOIN notifications "
              . "ON friends_notifications_list.id = notifications.notification_id "
              . "AND ((friends_notifications_list.user_id =? AND notifications.to_from = 'from') "
              . "OR (friends_notifications_list.other_user_id =? AND notifications.to_from = 'to')) "
              . "ORDER BY time_sent DESC";
        $query = $this->db->query($sql, array($user_id,$user_id));
        $data['number_of_notes'] = $query->num_rows();
        for($i = 0; $i < $query->num_rows(); $i++) {
            $data['all_notifications'][$i] = $query->row_array($i);
            if($data['all_notifications'][$i]['other_user_id'] == $user_id) {
                $temp_notes_data = $this->model_users->get_email($data['all_notifications'][$i]['user_id']);
            }
            else {
                $temp_notes_data = $this->model_users->get_email($data['all_notifications'][$i]['other_user_id']);
            }
                $data['all_notifications'][$i]['other_user_id'] = $temp_notes_data[0]['user_id'];
                $data['all_notifications'][$i]['other_picture'] = $temp_notes_data[0]['image_key'];
                $data['all_notifications'][$i]['other_fullname'] = $temp_notes_data[0]['fullname'];
                $data['all_notifications'][$i]['other_email'] = $temp_notes_data[0]['email'];
                $data['all_notifications'][$i]['email_explode'] = explode("@",$temp_notes_data[0]['email']);
        }
        return $data;
    }
    //Get Notifications Simplified for admins.
    public function get_notifications_simplified()
    {
        $this->load->model('model_users');
        $sql = "SELECT notifications.id, user_id, other_user_id, message, to_from, time_sent "
              . "FROM friends_notifications_list INNER JOIN notifications "
              . "ON friends_notifications_list.id = notifications.notification_id";
        $query = $this->db->query($sql);
        for($i = 0; $i < $query->num_rows(); $i++) {
            $data[$i] = $query->row_array($i);
            $data[$i]['user_id'] = $this->model_users->get_username_with_id($data[$i]['user_id']);
            $data[$i]['other_user_id'] = $this->model_users->get_username_with_id($data[$i]['other_user_id']);
        }
        if(isset($data))
            return $data;
        return false;
    }
    
    //Add a new friend to your friends list.
    public function add_friend($note_id) {
        $friend_list_id = $this->db->get_where('notifications', array('id' => $note_id));
        $friend_list_id = $friend_list_id->row_array(0);
        $friend_list_id = $friend_list_id['notification_id'];
        $sql = "SELECT * FROM friends_notifications_list WHERE id =? AND friend =1";
        $querycheck = $this->db->query($sql, array($friend_list_id,));
        if(!$querycheck->num_rows()){
            $this->db->where(array('id' => $friend_list_id));
            $data = array('friend' => 1);
            $query = $this->db->update('friends_notifications_list', $data);
        }
    }
    //Delete a friend from your friends list.
    public function delete_friend($user_id, $other_id) {
    	$sql = "SELECT * FROM friends_notifications_list WHERE (user_id =? and other_user_id =?) or (user_id =? and other_user_id =?)";
        $querycheck = $this->db->query($sql, array($user_id, $other_id, $other_id, $user_id));
        if($querycheck->num_rows()){
            $temp_query = $querycheck->row_array(0);
            $this->db->where(array('id' => $temp_query['id']));
            $data = array('friend' => 0);
            $query = $this->db->update('friends_notifications_list', $data);
        }
    }
    
    //Remove the notification.
    public function remove_notification($id) {
        $this->db->delete('notifications', array('id' => $id));
    }
    //Grab all friends.
    public function get_friendlists($user_id)
    {
        $sql = 'SELECT * FROM friends_notifications_list WHERE (user_id =? or other_user_id =?) AND (friend = 1) AND EXISTS(SELECT * FROM users WHERE users.user_id=friends_notifications_list.other_user_id AND users.activation="Y")' ;
        $query = $this->db->query($sql,array($user_id,$user_id,));
        for($i = 0; $i < $query->num_rows(); $i++) {
            $data[$i] = $query->row_array($i);
            if(!($data[$i]['user_id'] == $user_id)) {
                $data[$i]['other_user_id'] = $data[$i]['user_id'];
                $data[$i]['user_id'] = $user_id;
            }
        }
        if(isset($data)) {
            return $data;
        }
        
    }
    //Notification for sending a message to someone
    public function send_message($user_id, $other_id) {
    	$this->load->helper('date');
        $sql = "SELECT * FROM friends_notifications_list WHERE (user_id =? AND other_user_id =?) OR (user_id =? AND other_user_id =?)";
        $querycheck = $this->db->query($sql,array($user_id,$other_id,$other_id,$user_id));
        if($querycheck->num_rows()) {
            $query = $querycheck->row_array(0);
            $friend_id = $query['id'];
            if($query['user_id'] == $user_id)
                $to_from = 'to';
            else
                $to_from = 'from';
            $datestring = '%Y-%m-%d %H:%i:%s';
            $time = time();
            $data = array('notification_id' => $friend_id,
                          'message' => 'has sent you a message',
                          'to_from' => $to_from,
                          'time_sent' => mdate($datestring, $time));
            $this->db->insert('notifications',$data);
        }
        /*$friend_list_id = $this->db->get_where('notifications', array('id' => $note_id));
        $friend_list_id = $friend_list_id->row_array(0);
        $friend_list_id = $friend_list_id['notification_id'];
        $sql = "SELECT * FROM friends_notifications_list WHERE id =? AND friend =1";
        $querycheck = $this->db->query($sql, array($friend_list_id,));
        if(!$querycheck->num_rows()){
            $this->db->where(array('id' => $friend_list_id));
            $data = array('friend' => 1);
            $query = $this->db->update('friends_notifications_list', $data);
        }*/
    }
    // CAN COMBINE SEND_MESSAGE FUNCTION LATER IF YOU WANT. BUT WILL HAVE TO CHANGE CONTROLLER.
    // THIS WILL BE THE BASE FOR ALL NOTIFICATIONS. MESSAGE WILL HAVE TO BE SET IN CONTROLLER.
    public function notify_other($user_id, $other_id, $message) {
        $this->load->helper('date');
        $sql = "SELECT * FROM friends_notifications_list WHERE (user_id =? AND other_user_id =?) OR (user_id =? AND other_user_id =?)";
        $querycheck = $this->db->query($sql,array($user_id,$other_id,$other_id,$user_id));
        if($querycheck->num_rows()) {
            $query = $querycheck->row_array(0);
            $friend_id = $query['id'];
            if($query['user_id'] == $user_id)
                $to_from = 'to';
            else
                $to_from = 'from';
            $datestring = '%Y-%m-%d %H:%i:%s';
            $time = time();
            $data = array('notification_id' => $friend_id,
                          'message' => $message,
                          'to_from' => $to_from,
                          'time_sent' => mdate($datestring, $time));
            $this->db->insert('notifications',$data);
        }
        else {
            $data = array('user_id' => $user_id,
                          'other_user_id' => $other_id,
                          'friend' => 0);
            $this->db->insert('friends_notifications_list', $data);
            $temp_insert_id = $this->db->insert_id();
            $datestring = '%Y-%m-%d %H:%i:%s';
            $time = time();
            $note_data = array('notification_id' => $temp_insert_id,
                          'message' => $message,
                          'to_from' => 'to',
                          'time_sent' => mdate($datestring, $time));
            $this->db->insert('notifications', $note_data);
        }
    }
    
    public function get_image_key($email)
    {
      $sql = "SELECT * FROM users WHERE email =?;";
       $query = $this->db->query($sql,array($email,));
        $data = $query->row_array(0);
        return $data['image_key'];
    }
    public function get_image_with_name($email)
    {
      $sql = "SELECT * FROM users WHERE fullname =?;";
       $query = $this->db->query($sql,array($email,));
        $data = $query->row_array(0);
        return $data['image_key'];
    }
     public function get_name($email)
    {
      $sql = "SELECT * FROM users WHERE email =?;";
       $query = $this->db->query($sql,array($email,));
        $data = $query->row_array(0);
        return $data['fullname'];
    }

    public function add_link_email($data){

     $query= $this->db->insert('users', $data);


     if ($query){
     return true;
     }else return false;
    }
  }

?>