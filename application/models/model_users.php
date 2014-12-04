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

    public function admin_delete_users() {
        $data = $this->input->post('users_checkbox');
        $this->db->where_in('user_id', $data);
        $this->db->delete('users');
    }
    public function can_log_in()
    {
    	$fbcheck = $this->db->get_where('users', array('email' => $this->input->post('email'), 'f_b' => 1));
        $email = $this->db->get_where('temp_users', array('email' => $this->input->post('email')));
        $email2 = $this->db->get_where('users', array('email' => $this->input->post('email')));
        
        $query = $this->db->get_where('temp_users', array('email' => $this->input->post('email'),
                                                          'password' => hash('md5', $this->input->post('password'))));
        $query2 = $this->db->get_where('users', array('email' => $this->input->post('email'),
                                                      'password' => hash('md5', $this->input->post('password'))));
        $old_query = $this->db->get_where('users', array('email' => $this->input->post('email'), 'f_b' => 0)); 
        
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

	if($fbcheck->num_rows() == 1)
	{
		return 0;
	}
	else
	{
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
	}
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
                    'image_key'=> 'default_profile.jpg'
                );
                
                $user_added = $this->db->insert('users',$data);
            }
           
           if($user_added)
           {
                $this->db->where('key',$key);
                $this->db->delete('temp_users');
                return $data['email'];
            }
            else return false;
    }
    
    public function edit_info($email) //CHANGED!!!!
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
          if($value and $value != 'Change'){
            $info_updating[$i] = strip_tags($value);
          }
        }
        if(isset($info_updating)){        
            $query = $this->db->update('users', $info_updating, array('email'=>$email));
            if($query)
            {
                return  true;
            }
            else return false;
        }
        else
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
     public function get_username($email){

       $sql = "SELECT username FROM users WHERE email = ?;";
       $query = $this->db->query($sql,array($email,));
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
  	$sql = 'SELECT * FROM users WHERE fullname LIKE ? or username LIKE ?';
  	$name = '%'.$name.'%';
  	$query = $this->db->query($sql,array($name,$name));
  	$users = $query->result_array();
  	$users['size'] = sizeof($users);
  	return $users;
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
    		if($user_data['gender'] == 'male'){
    			$gender = 'M';
    		}
    		else
    			$gender = 'F';
	    	$data = array( 'fullname' => $user_data['name'],
	    		       'email' => $user_data['email'],
	    		       'username' => $user_data['email'],
	    		       'birthday' => $user_data['birthday'],
	    		       'image_key' => $user_data['profile_pic'],
	    		       'gender' => $gender,
	    		       'reputation' => 0,
	                       'f_b' => 1
	    		       );
	    	$this->db->insert('users', $data);
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
    
    #code
}


?>