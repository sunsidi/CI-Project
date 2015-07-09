<?php

class Model_users extends CI_Model{
    
    function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    public function admin_get_users() {
        $this->db->order_by('join_stamp', 'desc');
        $query = $this->db->get('users');
        return $query->result_array();
    }
    
    public function admin_get_admin_users() {
        $this->db->order_by('admin_level', 'desc');
        $this->db->where('admin_level >', 0);
        $query = $this->db->get_where('users');
        return $query->result_array();
    }

    public function admin_delete_users() {
        $data = $this->input->post('users_checkbox');
        $this->db->where_in('user_id', $data);
        $this->db->delete('users');
    }
    
    //This will give many users a certain admin level.
    public function authorize_user($all_users, $level) {
        $all_users_array = explode(',', $all_users);
        for($i = 0; $i < count($all_users_array); $i++) {
            $this->db->update('users', array('admin_level' => $level), array('email' => trim($all_users_array[$i])));
        }
    }
    
    //This will revoke users from the admin levels.
    public function revoke_user($all_users) {
        $all_users_array = explode(',', $all_users);
        for($i = 0; $i < count($all_users_array); $i++) {
            $this->db->update('users', array('admin_level' => 0), array('email' => trim($all_users_array[$i])));
        }
    }
    
    public function can_log_in($email,$pw)
    {
    	if($this->input->post('email')){  //request from web
    		$input_email=$this->input->post('email');
    		$input_pw=$this->input->post('password');
    	}else{   //  request from mobile
    		$input_email=$email;
    		$input_pw=$pw;
    	}
    	
    	$fbcheck = $this->db->get_where('users', array('email' => $input_email, 'f_b' => 1));
        $email = $this->db->get_where('temp_users', array('email' => $input_email));
        $email2 = $this->db->get_where('users', array('email' => $input_email));
        
        $query = $this->db->get_where('temp_users', array('email' => $input_email,
                                                          'password' => hash('md5', $input_pw)));
        $query2 = $this->db->get_where('users', array('email' => $input_email,
                                                      'password' => hash('md5', $input_pw)));
        $old_query = $this->db->get_where('users', array('email' => $input_email, 'f_b' => 0)); 
        
        if($old_query->num_rows() != 0) {
	        $old_user = $old_query->row_array(0); 
	        $old_password = $old_user['password'];   
	
	        if(strlen($old_password) == 64) {
	        	$key = md5(uniqid());
	        	$last_query = $this->db->get_where('users_reset_key', array('email' => $old_user['email']));
	        	if($last_query->num_rows() == 0) {
	        		$this->db->insert('users_reset_key', array('user_id' => $old_user['user_id'], 'email' => $old_user['email'], 'reset_key' => $key));
	        		$old_user['key'] = $key;
	        	}
	        	else {
	        		$this->db->update('users_reset_key', array('reset_key' => $key), array('email' => $old_user['email']));
	        		$old_user['key'] = $key;
	        	}
	        	return $old_user;
	        }  
        }                                           

/*	if($fbcheck->num_rows() == 1)   // why we need to check fb user here?
	{
		return 0;
	}
	else
	{ */
	        //If user has signed up and also confirmed his/her email.
	        if($query2->num_rows() == 1)
	        {
	            return 2;
	        }
	        //Else prompt user to confirm email.
	        else if($query->num_rows() == 1)
	        {
	            return 3;   
	        }
	        //Else if user has entered incorrect password but correct email.
	        //If user has also confirmed his email.
	        else if($email2->num_rows() == 1)
	        {
	            return 4;
	        }
	        //Else still prompt to confirm email.
	        else if($email->num_rows() == 1)
	        {
	            return 3;
	        }
	        //Just say sign up.
	        else return 0;
//	}
    }
    
    //Set the activity of a user as when he last logged in.
    public function set_last_online() {
        $this->load->helper('date');
        $datestring = "%Y-%m-%d %G:%i:%s";
        $time = time();

        $insert_time = mdate($datestring, $time);
        if($this->db->update('users', array('last_online' => $insert_time), array('email' => $this->input->post('email')))) {
            return true;
        }
        return false;
    }
    
    public function forgot_password($email_data) {
    	$key = md5(uniqid());
	$last_query = $this->db->get_where('users_reset_key', array('user_id' => $email_data['user_id']));
	if($last_query->num_rows() == 0) {
		$this->db->insert('users_reset_key', array('user_id' => $email_data['user_id'], 'email' => $email_data['email'], 'reset_key' => $key));
		$email_data['key'] = $key;
	}
	else {
		$this->db->update('users_reset_key', array('reset_key' => $key), array('email' => $email_data['email']));
		$email_data['key'] = $key;
	}
	return $email_data;
    }
    
    public function reset_password($key, $id) {
    	$query = $this->db->get_where('users_reset_key', array('user_id' => $id, 'reset_key' => $key));
    	if($query->num_rows() != 0) {
    		$this->db->where('user_id', $id);
    		$this->db->delete('users_reset_key');
    		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    		$randomString = '';
    		for ($i = 0; $i < 8; $i++) {
        		$randomString .= $characters[rand(0, strlen($characters) - 1)];
    		}
    		$password_insert = array('password' => md5($randomString));
    		$this->db->update('users', $password_insert, array('user_id' => $id));
    		$data = $query->row_array(0);
    		$data['password'] = $randomString;
    		return $data;
    	}
    	return false;
    }
    
    public function add_temp_users($data)
    {
      /*
        $data = array(
            'email' => $this->input->post('email'),
            'key' => $key,
            'password' => ($this->input->post('password')),
            'gender' => ($this->input->post('gender')),
            'fullname' =>($this->input->post('full_name'))
            //'birthday' => ($this->input->post('birthday')),
        );
        */
        
        $quary = $this->db->insert('temp_users',$data);
        
        if($quary)
        {
            return true;
        }
        else return false;
    }
    
    public function key_valid($key)
    {
        $this->db->where('key',$key);
        $query = $this->db->get('temp_users');
        
        if($query->num_rows()==1)
        {
            return true;
        }
        else return false;
    }
    
    public function add_user($key)
    {
        $this->db->where('key',$key);
        $user = $this->db->get('temp_users');
        
            if($user)
            {
                $row = $user->row();
                $data = array
                (
                    'email'  => $row->email,
                    'password' => $row->password,
                    'fullname' => $row->fullname,
                    'gender' => $row->gender,
                    'username' => $row->username,
                    'reputation' => 0,
                    'f_b' => 0,
                    'business' => $row->business,
                    'image_key'=> 'default_profile.jpg'
                );
                
                $user_added = $this->db->insert('users',$data);
                $new_user_id = $this->db->insert_id();
                if($row->business) {
                    $this->db->insert('users_business', array('user_id' => $new_user_id, 'cover_photo' => 'default_cover.jpg'));
                }
                $this->db->insert('friends_notifications_list',array('user_id' =>$new_user_id, 'other_user_id' => 7869,'friend' => 1));
            }
           if($user_added)
           {
                $this->db->where('key',$key);
                $this->db->delete('temp_users');
                mkdir('./uploads/profile/'.$new_user_id.'/photos/', 0777,true);
                chmod('./uploads/profile/'.$new_user_id.'/photos/', 0777);
                return $data['email'];
            }
            else return false;
    }
    
    public function edit_info($user_id) //CHANGED!!!!
    {
        /*
        $data = array(
                        'email'=>$this->session->userdata('email'),
                        'Location' =>$this->input->post('Location'),
                        'Name' => $this->input->post('Name'),
                        'Education' => $this->input->post('Education')
                      
                      );
        */
       
        $data = $this->input->post();
        foreach ($data as $i => $value){
          //if user inputted a value then update it
            if($i == 'account_change') {
                $info_updating['business'] = $value;
                if($value) {
                    if(!file_exists('./uploads/profile/'.$user_id.'/photos/')) {
                        mkdir('./uploads/profile/'.$user_id.'/photos/', 0777, true);
                        chmod('./uploads/profile/'.$user_id.'/photos/', 0777);
                    }
                    $check_if_exists = $this->db->get_where('users_business', array('user_id' => $user_id));
                    if($check_if_exists->num_rows() == 0) {
                        $this->db->insert('users_business', array('user_id' => $user_id, 'cover_photo' => 'default_cover.jpg'));
                        $this->session->set_flashdata('message', 'Welcome to your new business profile!');
                    }
                }
            }
            else if($value and $value != 'Change'){
                if(strpos($i, 'business') === false) {
                    $info_updating[$i] = strip_tags($value);
                }
                else {
                    $business_data[$i] = $value;
                }
            }
        }
        if(isset($business_data)) {
            foreach($business_data as $i => $value) {
                if($value && strpos($i, 'start_time') === false && strpos($i, 'end_time') === false) {
                    if($i == 'wrevenue_file') {
                        continue;
                    }
                    if(strpos($i, 'day') !== false && $value != "") {
                        for($j = 0; $j < count($value); $j++) {
                            if(empty($value[$j])) {
                                break;
                            }
                            $temp_start = $business_data['business-start_time'][$j];
                            $start_time = $this->timestamp($temp_start, false);
                            $temp_end = $business_data['business-end_time'][$j];
                            $end_time = $this->timestamp($temp_end, false);
                            $business_info_updating[$value[$j]] = $start_time.'|'.$end_time;
                        }
                    }
                    else {
                        $business_info_updating[substr($i,strpos($i, '-') + 1, strlen($i))] = $value;
                    }
                }
            }
        }
        if(isset($info_updating)){        
            $query = $this->db->update('users', $info_updating, array('user_id'=>$user_id));
        }
        if(isset($business_info_updating)) {
            $query2 = $this->db->update('users_business', $business_info_updating, array('user_id' => $user_id));
        }
        return true;
    }

    public function get_email($user_id)
    {
          $sql = "SELECT * FROM users WHERE user_id = ".$user_id.";";
          $query = $this->db->query($sql);
          return $query->result_array();
          
          
    }

    public function get_info($email)
    {

       $sql = "SELECT * FROM users WHERE email = ?;";
       $query = $this->db->query($sql,array($email,));
       //$select = $this->db->where('email',$this->input->post('email'));
       $data = $query->row_array(0);
       switch ($data['relationship']) {
          case "S":
              $data['relationship'] = "Single";
              break;
          case "M":
              $data['relationship'] = "Married";
              break;
          case "W":
              $data['relationship'] = "Widowed";
              break;
          case "D":
              $data['relationship'] = "Divorced";
              break;
         case "C":
              $data['relationship'] = "In a relationship";
              break;

    }
       if($data)
       { 

          if($data['gender'] == "M"){
              $data['gender'] = "Male";
              }
          else $data['gender'] = "Female";

       return $data;
       }
       else return NULL;
    }
    
    //Get the extra business information.
    public function get_business_info($id) {
        $query = $this->db->get_where('users_business', array('user_id' => $id));
        if($query->num_rows() != 0) {
            $data = $query->row_array(0);
            $day_array = array('mon', 'tues', 'wed', 'thurs', 'fri', 'sat', 'sun');
            for($i = 0; $i < 7; $i++) {
                if(!empty($data[$day_array[$i]])) {
                    $temp_hours = explode('|', $data[$day_array[$i]]);
                    $data['day'][$i]['day'] = $day_array[$i];
                    $data['day'][$i]['start_time'] = $this->convert_time($temp_hours[0]);
                    $data['day'][$i]['end_time'] = $this->convert_time($temp_hours[1]);
                }
                else {
                    $data['day'][$i] = false;
                }
            }
            return $data;
        }
        else {
            return false;
        }
    }
    
    public function get_name($email)
    {

      $sql = "SELECT * FROM users WHERE email =?;";
       $query = $this->db->query($sql,array($email,));
              $data = $query->row_array(0);
              return $data['fullname'];

    }


     public function get_info_with_user($email)
    {

       $sql = "SELECT * FROM users WHERE username = ?;";
       $query = $this->db->query($sql,array($email,));
       //$select = $this->db->where('email',$this->input->post('email'));
       $data = $query->row_array(0);
    
       if($data)
       { 

          if($data['gender'] == "M"){
              $data['gender'] = "Male";
              }
          else $data['gender'] = "Female";

       return $data;
       }
       else return NULL;
    }

    public function add_image($image_key) 
    {
      //update image_key
      $this->load->library('session');
      $email = $this->session->userdata('email');
      //echo $image_key;
      //$email = "Wrevel@gmail.com";
      //echo "This is a test".$email;
      $query = $this->db->update('users', array('image_key'=>$image_key), array('email'=>$email));
      return $query;
    }
    
    public function add_cover_image($cover_name,$user_id) {
        //echo $image_key;
        //$email = "Wrevel@gmail.com";
        //echo "This is a test".$email;
        $query = $this->db->update('users_business', array('cover_photo'=>$cover_name), array('user_id'=>$user_id));
        return $query;
    }

    public function is_user($userz)
    {
      //check to see if there is a row with username as this
      //$temp_user = "SELECT * FROM users Where username like '%user%'";
     //$query = $this->db->query('SELECT * FROM users WHERE username ='.$userz);
     //$sql = "SELECT * FROM users WHERE username = $userz "; 

      $this->db->where('username', $userz);
      $query = $this->db->get('users');

      
      if($query->num_rows >=1) {

        return true;
        }else{
          return false;
        }
      

    }
     public function is_email($emailz)
    {
      //check to see if there is a row with username as this
      //$temp_user = "SELECT * FROM users Where username like '%user%'";
     //$query = $this->db->query('SELECT * FROM users WHERE username ='.$userz);
     //$sql = "SELECT * FROM users WHERE username = $userz "; 

      $this->db->where('email', $emailz);
      $query = $this->db->get('users');

     

      if($query->num_rows >=1){

        return true;
        }else{
          return false;
        }
      

    }
    public function show_users_with_email($e_id){


     
      //$e_name = 'Boris pimp party';
     // $query = $this->db->query('SELECT * FROM users WHERE email = '.$e_id);
      //$data = $this->db->where('e_name',$e_name);
      //$data = $query->row_array(0);
     // return $query->result_array();
      
      $this->db->where('email', $e_id);
      $query = $this->db->get('users');

      return $query->result_array();


    }
    public function show_users_with_username($e_id){

      $query = $this->db->query('SELECT * FROM users WHERE username = '.$e_id);
      return $query->result_array();

    }
        public function get_user($username){

       $sql = "SELECT * FROM users WHERE username = ?;";
       $query = $this->db->query($sql,array($username,));
       //$select = $this->db->where('email',$this->input->post('email'));
       $data = $query->row_array(0);
       return $data;

    }

    public function get_user_fullname($username){

       $sql = "SELECT fullname FROM users WHERE username = ?;";
       $query = $this->db->query($sql,array($username,));
       //$select = $this->db->where('email',$this->input->post('email'));
       $data = $query->row_array(0);
       if ($data){
       return $data['fullname'];
     }

    }
     public function get_userID($email){

       $sql = "SELECT user_id FROM users WHERE email = ?;";
       $query = $this->db->query($sql,array($email,));
        $data = $query->row_array(0);
        return $data['user_id'];

     }

    public function get_admin_level($email){

      $sql = "SELECT admin_level FROM users WHERE email = ?;";
      $query = $this->db->query($sql,array($email,));
       $data = $query->row_array(0);
       return $data['admin_level'];

    }
    
     public function get_username($email){

       $sql = "SELECT username FROM users WHERE email = ?;";
       $query = $this->db->query($sql,array($email,));
        $data = $query->row_array(0);
        return $data['username'];

     }
     public function get_username_with_id($user_id){

       $sql = "SELECT username FROM users WHERE user_id = ?;";
       $query = $this->db->query($sql,array($user_id,));
        $data = $query->row_array(0);
        return $data['username'];

     }
     public function create_chatBox($filename,$username){

       $sql = 'UPDATE users SET chatbox_file= ? WHERE username=?';
    $query = $this->db->query($sql,array($filename,$username));
    if ($query){
    return true;
  }
  else {return false;}

  }  

     public function get_chatbox($username){
    $sql = 'SELECT * FROM users WHERE username =?';
    $query = $this->db->query($sql,array($username,));
    $data = $query->result_array();
    //print_r($data);
         if ($data[0]['chatbox_file']!=""){
          return $data[0]['chatbox_file'];
         }
         else return false;
       }
  
  // adds reputation to the current user.     
  public function add_reputation($email, $amount) {
  	$query = $this->db->get_where('users', array('email' => $email));
  	$data = $query->result_array();
  	$current_rep = $data[0]['reputation'];
  	//$echo $current_rep;
  	$current_rep += $amount;
  	//$echo $current_rep;
  	$new_rep = array("reputation" => $current_rep);
  	
  	$this->db->update('users', $new_rep, array('email' => $email));
  }
  
  public function search_by_name($name) {
  	$sql = 'SELECT * FROM users WHERE activation="Y" and (fullname LIKE ? or username LIKE ?)';
  	$name = '%'.$name.'%';
  	$query = $this->db->query($sql,array($name,$name));
  	$users = $query->result_array();
  	$users['size'] = sizeof($users);
  	return $users;
  }
  

  public function search_by_name_limit($name,$size) {
  	$sql = 'SELECT * FROM users WHERE (fullname LIKE ? or username LIKE ?) limit ?';
  	$name = '%'.$name.'%';
  	$query = $this->db->query($sql,array($name,$name,$size));
  	$users = $query->result_array();
  	$users['size'] = sizeof($users);        // the actual size, for sure it's 100 actually
  	$users['total_size'] = sizeof($users);   // the original size of result
  	
  	return $users;

  }
  
    public function order_by_reputation() {
  	
  	$query = $this->db->query('SELECT * FROM users order by reputation desc limit 12');
  	return $query->result_array();
  	
  /*	$sql = 'SELECT * FROM users WHERE fullname LIKE ? or username LIKE ?';
  	$query = $this->db->query($sql,array($name,$name));
  	$users = $query->result_array();
  	$users['size'] = sizeof($users);
  	return $users;*/
  }
  
    public function order_by_posting(){
  	//so far, it's accumulate posting, not 30 days intervel posint
  	$query = $this->db->query('select * from users,events where e_creatorID=user_id group by e_creatorID order by count(*) desc limit 12');
  	return $query->result_array();
  	
  }
  
  public function order_by_attending(){
  	
  	$query = $this->db->query('select * from users,users_attending where users.user_id=users_attending.user_id group by users_attending.user_id order by count(*) desc limit 12');
  	return $query->result_array();
  }
  
  //check if the user entered the right password before changing it.
  public function can_change_password($email, $old_password, $new_password)
    {
        $query = $this->db->get_where('users', array('email' => $email,
                                                     'password' => md5($old_password)));
        //If user has entered a correct password
        if($query->num_rows() == 1)
        {
            $add_new_password = array('password' => md5($new_password));
            $this->db->update('users', $add_new_password, array('email' => $email));
            return true;
        }
        else return false;
    }
  //Get all attending events for a specific user.
    public function get_attending_events($user_id) {
    	$this->db->order_by('event_id', 'asc');
        $query = $this->db->get_where('users_attending', array('user_id' => $user_id, 'attending' => true));
        $data = $query->result_array();
        return $data;
        
    }
    //Get only events that you created.
    public function get_my_events($user_id) {
        $this->db->order_by('event_id', 'asc');
        $query = $this->db->get_where('events', array('e_creatorID' => $user_id));
        $data = $query->result_array();
        return $data;
    }
    //Get only events that you created. Ordered by date of event.
    public function get_my_events_by_date($user_id) {
        $this->db->order_by('e_date', 'asc');
        $query = $this->db->get_where('events', array('e_creatorID' => $user_id));
        $data = $query->result_array();
        return $data;
    }
    
    //Facebook users handler
    public function add_facebook_user($user_data) {
    	$querycheck1 = $this->db->get_where('users', array('email' => $user_data['email'], 'f_b' => 1));
    	$querycheck2 = $this->db->get_where('users', array('email' => $user_data['email'], 'f_b' => 0));
    	if($querycheck1->num_rows() == 1) {
    		return false;
    	}
    	else if($querycheck2->num_rows() == 1) {
    		return false;
    	}
    	else {
    		
    		if(!isset($user_data['gender'])){
    			$gender = 'M';
    		}
    		elseif(($user_data['gender'] == 'male')){
    			$gender = 'M';
    		}
    		else
    			$gender = 'F';
	    	$data = array( 'fullname' => $user_data['name'],
	    		       'email' => $user_data['email'],
	    		       'username' => $user_data['email'],
	    		       'birthday' => null,
	    		       'reputation' => 0,
	    		       'image_key' => $user_data['profile_pic'],
	    		       'gender' => $gender,
	                       'f_b' => 1
	    		       );
	    	$this->db->insert('users', $data);
            $new_user_id = $this->db->insert_id();
            $this->db->insert('friends_notifications_list',array('user_id' =>$new_user_id, 'other_user_id' => 7869,'friend' => 1));
    	}
    }
    
    public function add_card_info($user_id, $cust_id) {
    	$this->db->update('users', array('cust_id' => $cust_id), array('user_id' => $user_id));
    }
    public function delete_card_info($email) {
        $this->db->update('users', array('cust_id' => ''), array('email' => $email));
    }
    public function add_bank_info($user_id, $recip_id) {
    	$this->db->update('users', array('recip_id' => $recip_id), array('user_id' => $user_id));
    }
    /*
     * HELPER FUNCTIONS FOR THIS MODEL.
     */
    //Converts the time to AM and PM.
    public function convert_time($temp_start_time) {
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
        return $final_time;
    }
    //Converts the time to small int.(SAVED IN DATABASE)
    public function timestamp($input, $format) { //CHANGED! SAVED AS SMALL INT
        if(strpos($input, ':')) {
            $input = explode(':', $input);
            if($format) {
                $input[0] += 12;
            }
            $sum = $input[0] * 60;
            $sum += $input[1];
        }
        else
            $sum = 0;
        return $sum;
    }
    
    public function script_for_changing_links() {
        $query = $this->db->get('users');
        $data = $query->result_array();
        for($i = 0; $i < count($data); $i++) {
            if(strpos($data[$i]['image_key'], 'facebook') === false && $data[$i]['image_key'] != 'default_profile.jpg') {
                mkdir('./uploads/profile/'.$data[$i]['user_id'], 0777, true);
                chmod('./uploads/profile/'.$data[$i]['user_id'], 0777);
                $temp_image_path = './uploads/profile/'.$data[$i]['user_id'];
                rename('./uploads/'.$data[$i]['image_key'], $temp_image_path.'/'.$data[$i]['image_key']);
                $temp_array = array('image_key' => 'profile/'.$data[$i]['user_id'].'/'.$data[$i]['image_key']);
                $this->db->update('users', $temp_array, array('user_id' => $data[$i]['user_id']));
                //echo move_uploaded_file('./uploads/'.$data[$i]['image_key'],'./uploads/profile/'.$data[$i]['user_id'].'/'.$data[$i]['image_key'] );
            }
        }
    }
    
    public function script_revert() {
        $query = $this->db->get('users');
        $data = $query->result_array();
        for($i = 0; $i < count($data); $i++) {
            if(strpos($data[$i]['image_key'], 'facebook') === false && strpos($data[$i]['image_key'], 'profile') !== false && $data[$i]['image_key'] != 'default_profile.jpg') {
                echo $data[$i]['image_key'].'<br>';
                $temp_pos = explode('/', $data[$i]['image_key']);
                $revert_data = array('image_key' => $temp_pos[2]);
                $this->db->update('users', $revert_data, array('user_id' => $data[$i]['user_id']));
            }
        }
    }
    
    public function change_activation_status($email,$current_status){
    
    	$sql = 'UPDATE users SET activation=? WHERE email=?';
    	if($current_status=='N'){
    		$current_status='Y';
    	}else{
    		$current_status='N';
    	}
    	$query = $this->db->query($sql,array($current_status,$email));
    	if ($query){
    		return true;
    	}
    	else return false;
    }
    
    public function get_activation_status($email){
    
    	$sql = 'select activation from users WHERE email=?';
    
    	$query = $this->db->query($sql,array($email));
    
     $data = $query->row_array(0);
    	return $data['activation'];
    }
    
    public function check_email_exists($email){
    	$sql = 'SELECT user_id FROM users WHERE email = ?';
    	$query = $this->db->query($sql,array($email));
    	 $data = $query->row_array(0);
    	if($data){
    	return "1";
    	}else return "0";
    	
    }

    public function add_login_info($id){
        $this->load->helper('date');
        $datestring = "%Y-%m-%d %G:%i:%s";
        $time = time();

        $insert_time = mdate($datestring, $time);

        $query = $this->db->get_where('users_login',array('user_id' => $id));
        if($query->num_rows() ==0){
            $this->db->insert('users_login',array('user_id' => $id, 'last_online' => $insert_time, 'login_status' => 'Y'));
        }else{
            $this->db->update('users_login',array('last_online' => $insert_time, 'login_status' => 'Y'));
        }

    }
    public function check_online_status($email){
        $sql = 'SELECT * from ci_sessions where user_data like ?';
        $dataemail = '%'.$email.'%';
        $query = $this->db->query($sql,array($dataemail));
        $data = $query->row_array(0);
        if($data){
            return true;
        }else return false;

    }
    #code




}


?>