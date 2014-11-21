<?php

class Model_events extends CI_Model{
    
   function __construct()
   {
            parent::__construct();
            $this->load->database();
            $this->load->library('hashmap_cata');
            
    }
    
    public function admin_get_events() {
        $this->db->order_by('create_stamp', 'desc');
    	$query = $this->db->get('events');
    	return $query->result_array();
    }
    
    public function admin_delete_events() {
              $data = $this->input->post('events_checkbox');
              $this->db->where_in('event_id', $data);
              $this->db->delete('events');
          }
      public function find_event($e_id)
      {
	    //$e_name = 'Boris pimp party';
	    $query = $this->db->query('SELECT * FROM events WHERE event_id ='.$e_id);
	    //$data = $this->db->where('e_name',$e_name);
	    //$data = $query->row_array(0);
	    $event_temp[0] = $query->row_array(0);
	    $event_temp[0]['e_start_time'] = $this->convert_time($event_temp[0]['e_start_time']);
	    $event_temp[0]['e_end_time'] = $this->convert_time($event_temp[0]['e_end_time']);
	    return $event_temp;
      }
      
      //Get the ticket types for a specific event.
      public function get_tickets_for_event($e_id)
      {
	    //$e_name = 'Boris pimp party';
	    $query = $this->db->query('SELECT * FROM event_ticket_types WHERE event_id ='.$e_id);
	    //$data = $this->db->where('e_name',$e_name);
	    //$data = $query->row_array(0);
	    return $query->result_array();
      }
      
      public function deduct_tickets($e_id, $type, $quantity_to_deduct)
      {
      	    $query = $this->db->query('SELECT * FROM event_ticket_types WHERE event_id = '.$e_id.' AND type = "'.$type.'"');
      	    $ticket_temp = $query->row_array(0);
      	    $new_quantity = $ticket_temp['quantity'] - $quantity_to_deduct;
      	    if($new_quantity < 0) {
      	    	return false;
      	    }
      	    else {
      	    	$this->db->update('event_ticket_types', array('quantity' => $new_quantity), array('event_id' => $e_id, 'type' => $type));
      	    	return true;
      	    }
      }
      
       //gets all events related to the type user wants  
       public function get_events($category){
       //$type =$this->input->post('cata');
       //get all events
	    $query= $this->db->get('events');
	    $events = $query->result_array();
       //initizalize an array 
	    $related_events= array();
       //look at each event
	    foreach ($events as $event){
       //get key for the events which is needed to find out what category its in
	    $hashkey = $event['e_category'];
      // echo  "events e_category: ". $hashkey. "<br>";
      //call function from library to get array of the category its in
      //          and check if the event is in the category we want.
	    $event_category = $this->hashmap_cata->hash($hashkey);
      //echo "event's category: <br>";
      //print_r($event_category);
      // echo "<br>";//. print_r($event_category) . "<br>";
      //echo "getting events for category: ". $category . "<br>";
      //echo "checking to see if values exsits in array: ". in_array($category,$event_category). "<br>";
      if(in_array($category,$event_category))
      {

        //event is in category we want, then push it to array called related_events
        //problem not putting stuff into array
        //$related_events['e'.$size] = $event;
        array_push($related_events,$event);
      }
      //echo "after added: <br>";
      //print_r($related_events);
      
   }   
   $related_events['size']= sizeof($related_events);
   for($i = 0; $i < $related_events['size']; $i++) {
    	$related_events[$i]['e_start_time'] = $this->convert_time($related_events[$i]['e_start_time']);
    }
   //echo "related_events type in model_events: ".gettype($related_events);
    //return all events that is in our event

   return $related_events;      
  }

	    public function create_event($userID,$e_image)
	    {		
	        $this->load->helper('date');
		
		$data['e_image'] = $e_image;
		$data['e_name'] =  $this->input->post('e_name');
                $data['e_description'] = $this->input->post('e_description');
                $data['e_state'] = $this->input->post('e_state');
		$data['e_city'] = $this->input->post('e_city');
                $data['e_zipcode'] = $this->input->post('e_zipcode');
	        $data['e_country'] = $this->input->post('e_country');
	        $data['e_phone'] = $this->input->post('e_phone');
	        $data['e_email'] = $this->input->post('e_email');
		$data['e_website'] = $this->input->post('e_website');
	        $data['e_capacity'] = $this->input->post('e_capacity');
		$data['e_address'] = $this->input->post('e_address');
		$data['e_is_address_hide'] = $this->input->post('e_is_hide');
		$data['e_is_online'] = $this->input->post('e_is_online');
		$data['e_is_ticketed'] = $this->input->post('e_is_ticketed');
		if($this->input->post('e_type') == 'private') {
			$data['e_private'] = 1;
		}
		
		
		
		
		
		
		
		//$data['e_end_time'] = $this->input->post('e_date').' '.$this->input->post('e_end_time');
		if($this->input->post('e_end_time') == NULL)
			$data['e_end_time'] = $this->input->post('e_end_time');
		else
			$data['e_end_time'] = $this->timestamp($this->input->post('e_end_time'));
		//echo $data['e_end_time'];
	        
		//$data['e_start_time'] = $this->input->post('e_date').' '.$this->input->post('e_start_time');
		//echo $this->input->post('e_start_time');
		$data['e_start_time'] = $this->timestamp($this->input->post('e_start_time'));
		//echo $data['e_end_time'];
	        
		$temp_date = $this->input->post('e_date');
                $split_date = explode('/',$temp_date);
                $real_date = $split_date[2] . '-' . $split_date[0] . '-' . $split_date[1];
		$data['e_date'] = $real_date;
		//echo $data['e_date'];

		//$data['e_category']= $this->input->post('e_category');
	        $data['e_category']= $this->input->post('hotspots') + $this->input->post('icebreakers') + $this->input->post('culture')+
	        $this->input->post('meetups')+ $this->input->post('explore')+ $this->input->post('romance')+$this->input->post('parties')+
	        $this->input->post('clubs')+ $this->input->post('concerts')+$this->input->post('festivals')+$this->input->post('lounges')+
	        $this->input->post('bars');
		
	       /* 
                echo $this->input->post('e_is_free')."<br/>";
                echo $this->input->post('e_price')."<br/>";
                echo $this->input->post('e_is_ticket')."<br/>";
                echo $this->input->post('e_type')."<br/>";
                echo $this->input->post('e_is_hide')."<br/>";
                echo $this->input->post('is_hotspot')."<br/>";
	       */
	       $data['e_creatorID']= $userID;
	       $lowest_price = -1;
	       $data['e_pricetemp'] = $lowest_price;
	       $this->db->insert('events',$data);
               $query_id = $this->db->insert_id();
               if($data['e_is_ticketed']) {
                $ticket_type = $this->input->post('type');
                $ticket_info = $this->input->post('info');
                $ticket_quantity = $this->input->post('e_quantity');
                $ticket_price = $this->input->post('e_price');
                $ticket_date = $this->input->post('max_date');
                $ticket_time = $this->input->post('max_time');
                
               	for($i = 0; $i < count($ticket_type); $i++) {
               		$ticket_data = array('event_id' => $query_id,
               				     'type'	=> $ticket_type[$i],
               				     'info'	=> $ticket_info[$i],
               				     'quantity' => $ticket_quantity[$i],
               				     'price'	=> $ticket_price[$i],
               				     'date'	=> $ticket_date[$i],
               				     'time'	=> $this->timestamp($ticket_time[$i]));
               		if($lowest_price != 0 || $lowest_price > $ticket_price[$i])
	                	$lowest_price = $ticket_price[$i];
               		$this->db->insert('event_ticket_types', $ticket_data);
               	 
                }
               }
               if($lowest_price == -1)
               	$lowest_price = 0;
               $this->db->update('events', array('e_pricetemp' => $lowest_price), array('event_id' => $query_id));
               
               return $query_id;
	    }
	    
	    
	    public function timestamp($input)//CHANGED! SAVED AS SMALL INT
	    {
	    	 if(strpos($input, ':')) {
	    	  	$input = explode(':', $input);
	    	  	$sum = $input[0] * 60;
	    	 	$sum += $input[1];
	    	 }
	    	 else
	    	 	$sum = 0;
		  /*$data = $this->db->query('SELECT UNIX_TIMESTAMP('. '\''.$input.'\''.')');
		  $result = $data->result_array();
		  //print_r($result);
		  //$data['e_start_time'] = $result[0]['UNIX_TIMESTAMP('. '\''.$input.'\''.')'];
		  
		  
		  $quary =$result[0]['UNIX_TIMESTAMP('. '\''.$input.'\''.')'];*/
		  return $sum;
	    }
public function get_latest_related_events($search,$category,$price,$state,$zipcode){
    //get all events
      /*
      echo "search: ".$search. "<br>";
      echo "category: ".$category. "<br>";
      echo "price: ".$price. "<br>";
      echo "state: ".$state. "<br>";
      */
    //Check if anything was chosen and get those events
    if ($state || $price || $zipcode){
        if(!$zipcode){$zipcode = '%';}
        if(!$state){$state = '%';}
    $sql = 'SELECT * FROM events WHERE (e_pricetemp<=? and e_zipcode LIKE ? and e_state LIKE ? and e_private = 0 and e_date > NOW()+INTERVAL 1 DAY) OR (e_is_online = 1 and e_date > NOW()+INTERVAL 1 DAY) ORDER BY event_id DESC';
    $query = $this->db->query($sql,array($price,$zipcode,$state));
    $events = $query->result_array();
   }
   
   else{
    $sql = 'SELECT * FROM events WHERE (e_private = 0 and e_date > NOW()+INTERVAL 1 DAY) OR (e_is_online = 1 and e_date > NOW()+INTERVAL 1 DAY) ORDER BY event_id DESC';
    $query = $this->db->query($sql);
    
     $events = $query->result_array();

   }
    /* add IF STATEMENT FOR LATEST WREVS */


      /*
     echo "<br>events without change <br><br>";
     print_r($events); 
     echo "<br><br><br>";
     */

     //SELECT * FROM `events` WHERE `e_state`='NY'and `e_price`<=10 ORDER BY `event_id` DESC
    //initizalize an array 
    $related_events= array();
    //look at each event
    foreach ($events as $event){
      //get key for the events which is needed to find out what category its in
      $hashkey = $event['e_category'];
     // echo  "events e_category: ". $hashkey. "<br>";
      //call function from library to get array of the category its in
      //          and check if the event is in the category we want.
      
      /*get an array of categories the event falls into */
      $event_category = $this->hashmap_cata->hash($hashkey);

      /*check to see if event is in category we want */
      if(in_array($category,$event_category))
      {
        //check to see if the name is similar or contains the word that was written in search
        //this is case sensitive!!!!! need to fix!!

        //if $search has something if not skip this part!
        if($search){
            if (stristr($event['e_name'],$search) !== false) {
            // strpos
            /*event is in category we want, then push it to array called related_events */
             array_push($related_events,$event);
            }
          }
        else{  //put everything in array since no specific word was given by user to search
        array_push($related_events,$event);  
        }
      }

   }   
   $related_events['size']= sizeof($related_events);
   for($i = 0; $i < $related_events['size']; $i++) {
    	$related_events[$i]['e_start_time'] = $this->convert_time($related_events[$i]['e_start_time']);
    }
   //print_r($related_events);
   return $related_events;      
  }
  public function get_states(){
    $sql = "SELECT DISTINCT e_state FROM events ORDER BY e_state";
    $query= $this->db->query($sql);
    $events_states = $query->result_array();
    return $events_states;

  }
    public function get_category_states($category){
    $sql = "SELECT * FROM events ORDER BY e_state";
    $query= $this->db->query($sql);
    $events= $query->result_array();
    $related_events= array();
    //look at each event
    foreach ($events as $event){
      //get key for the events which is needed to find out what category its in
      $hashkey = $event['e_category'];
     // echo  "events e_category: ". $hashkey. "<br>";
      //call function from library to get array of the category its in
      //          and check if the event is in the category we want.
      $event_category = $this->hashmap_cata->hash($hashkey);
      //echo "event's category: <br>";
      //print_r($event_category);
     // echo "<br>";//. print_r($event_category) . "<br>";
      //echo "getting events for category: ". $category . "<br>";
      //echo "checking to see if values exsits in array: ". in_array($category,$event_category). "<br>";
      if(in_array($category,$event_category))
      {

        //event is in category we want, then push it to array called related_events
        //problem not putting stuff into array
        //$related_events['e'.$size] = $event;
        
        array_push($related_events,$event['e_state']);

        //array_push($related_events,$event['e_state']);
          
      
      }
    } 

   // $events_states = array();
    //echo "<pre> ",print_r($related_events,true) ,"</pre>";
    $events_states= array_unique($related_events);
    $unique_states=array();
    foreach ($events_states as $states){
      if(!in_array($states,$unique_states)){
        array_push($unique_states,$states);
      }
    }
    //var_dump($unique_states);
    return $unique_states;
    //return $related_events;

  }
  public function get_comments($id){
    $sql = 'SELECT * FROM events WHERE event_id =?';
    $query = $this->db->query($sql,array($id,));
    $data = $query->result_array();
    //print_r($data);
         if ($data[0]['comment_file']!=""){
          return $data[0]['comment_file'];
         }
         else return false;
        

  }
  public function create_event_comment($filename,$id){
    $sql = 'UPDATE events SET comment_file= ? WHERE event_id=?';
    $query = $this->db->query($sql,array($filename,$id));
    if ($query){
    return true;
  }
  else {return false;}

  }
  public function get_latest_events($search,$price,$zipcode,$state){
    $this->load->helper('date');
    if ($price || $zipcode || $state){
        if(!$zipcode){$zipcode = '%';}
        if(!$state){$state = '%';}
    $datestring = '%Y-%m-%d';
    $time = time();
    $today = mdate($datestring, $time);
    $sql = 'SELECT * FROM events WHERE (e_pricetemp<=? and e_zipcode LIKE ? and e_state LIKE ? and e_private = 0 and e_date > NOW()+INTERVAL 1 DAY) OR (e_is_online = 1 and e_date > NOW()+INTERVAL 1 DAY)  ORDER BY event_id DESC';
    $query = $this->db->query($sql,array($price,$zipcode,$state));
    $events = $query->result_array();
  }
  else{
    $sql = 'SELECT * FROM events WHERE (e_private = 0 and e_date > NOW()+INTERVAL 1 DAY) OR (e_is_online = 1 and e_date > NOW()+INTERVAL 1 DAY) ORDER BY event_id DESC';
    $query = $this->db->query($sql);
    $events = $query->result_array();
    }
    $related_events= array();
    /*check if there is an specific word or letter that user is searching for in latest event */
    if($search != ""){
      foreach($events as $event){
          if (stristr($event['e_name'],$search) !== false) {
                // strpos
                /*event is in category we want, then push it to array called related_events */
            array_push($related_events,$event);
            }
        }
        $related_events['size']= sizeof($related_events);
    }
    /*find all the latest events */
    else {$related_events = $events;
    $related_events['size']= sizeof($related_events);}
    
    //echo "<pre> ",print_r($related_events,true) ,"</pre>";
    for($i = 0; $i < $related_events['size']; $i++) {
    	$related_events[$i]['e_start_time'] = $this->convert_time($related_events[$i]['e_start_time']);
    }
    return $related_events;
  }
  
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
  
      public function get_category_zipcode($category){
    $sql = "SELECT * FROM events WHERE e_private = 0 ORDER BY e_state";
    $query= $this->db->query($sql);
    $events= $query->result_array();
    $related_events= array();
    //look at each event
    foreach ($events as $event){
      //get key for the events which is needed to find out what category its in
      $hashkey = $event['e_category'];
     // echo  "events e_category: ". $hashkey. "<br>";
      //call function from library to get array of the category its in
      //          and check if the event is in the category we want.
      $event_category = $this->hashmap_cata->hash($hashkey);
      //echo "event's category: <br>";
      //print_r($event_category);
     // echo "<br>";//. print_r($event_category) . "<br>";
      //echo "getting events for category: ". $category . "<br>";
      //echo "checking to see if values exsits in array: ". in_array($category,$event_category). "<br>";
      if(in_array($category,$event_category))
      {

        //event is in category we want, then push it to array called related_events
        //problem not putting stuff into array
        //$related_events['e'.$size] = $event;
        
        array_push($related_events,$event['e_zipcode']);

        //array_push($related_events,$event['e_state']);
          
      
      }
    } 

   // $events_states = array();
    //echo "<pre> ",print_r($related_events,true) ,"</pre>";
    $events_zipcode= array_unique($related_events);
    $unique_zipcode=array();
    foreach ($events_zipcode as $zipcode){
      if(!in_array($zipcode,$unique_zipcode)){
        array_push($unique_zipcode,$zipcode);
      }
    }
    //var_dump($unique_states);
    return $unique_zipcode;
    //return $related_events;

  }
    public function get_zipcode(){
    $sql = "SELECT DISTINCT e_zipcode FROM events WHERE e_private = 0 ORDER BY e_zipcode";
    $query= $this->db->query($sql);
    $events_zipcode = $query->result_array();
    return $events_zipcode;

  }
  //Updates the number of people attending the event
  public function update_attending($user_id, $event_id) {
        //add the user and event to user_attending database.
        $new_attendee = array('user_id' => $user_id, 'event_id' => $event_id);
        $query_check = $this->db->get_where('users_attending', $new_attendee);
        //If user is found in the database and is attending then.
        if($query_check->num_rows() == 1){
            $check_attend = $query_check->row_array(0);
            if($check_attend['attending']) {
                return true;
            }
            else {
                $new_attend_data = array('attending' => true);
                $this->db->update('users_attending', $new_attend_data, $new_attendee);
                //add one to attending.
                $query = $this->db->get_where('events', array('event_id' => $event_id));
                $data = $query->result_array();
                $attending = $data[0]['e_attending'];
                $attending += 1;
                $new_attending = array('e_attending' => $attending);
                $this->db->update('events', $new_attending, array('event_id' => $event_id));
                return false;
            }
        }
        //Else add him/her to the attending list and increase the attending number.
        else{
            //add one to attending.
            $query = $this->db->get_where('events', array('event_id' => $event_id));
            $data = $query->result_array();
            $attending = $data[0]['e_attending'];
            $attending += 1;
            $new_attending = array('e_attending' => $attending);
            $this->db->update('events', $new_attending, array('event_id' => $event_id));
            
            $new_attending_data = array('user_id' => $user_id, 'event_id' => $event_id, 'attending' => false, 'attending' => true);
            $this->db->insert('users_attending', $new_attending_data);
            return false;
        }
  }
  //Updates the number of people liking the event.
  public function update_likes($user_id, $event_id) {
        $new_liker = array('user_id' => $user_id, 'event_id' => $event_id);
        $query_check = $this->db->get_where('users_attending', $new_liker);
        if($query_check->num_rows() == 1){
            $liked_check = $query_check->row_array(0);
            if($liked_check['liked']) {
                return true;
            }
            else {
                $new_liked_data = array('liked' => true);
                $this->db->update('users_attending', $new_liked_data, $new_liker);
                $query = $this->db->get_where('events', array('event_id' => $event_id));
                $data = $query->result_array();
                $likes = $data[0]['e_likes'];
                $likes += 1;
                $new_likes = array('e_likes' => $likes);
                $this->db->update('events', $new_likes, array('event_id' => $event_id));
                return false;
            }
        }
        else {
            $query = $this->db->get_where('events', array('event_id' => $event_id));
            $data = $query->result_array();
            $likes = $data[0]['e_likes'];
            $likes += 1;
            $new_likes = array('e_likes' => $likes);
            $this->db->update('events', $new_likes, array('event_id' => $event_id));
            $new_liked_data = array('user_id' => $user_id, 'event_id' => $event_id, 'attending' => false, 'liked' => true);
            $this->db->insert('users_attending',$new_liked_data);
            return false;
        }
  }
  //Gets all users attending a specific event.
  public function get_attendees($event_id) {
      $query = $this->db->get_where('users_attending', array('event_id' => $event_id));
      $data = $query->result_array();
      return $data;
  }
  
  //edit the info of your event.
  public function edit_event_info($event_id) //CHANGED!!!!
    {
        $data = $this->input->post();

        foreach ($data as $i => $value){
          //if user inputted a value then update it
          if($value and $value != 'Submit'){
            if($i == 'e_start_time') {
            	$info_updating[$i] = $this->timestamp($value);
            }
            else 
            	$info_updating[$i] = $value;
          }
        }
        if(isset($info_updating)){        
            $query = $this->db->update('events', $info_updating, array('event_id'=> $event_id));
            if($query)
            {
                return  true;
            }
            else return false;
        }
        else
            return true;
    }
  //remove the event from the database. Any users_attending for that event will be removed as well.
    public function remove_event($event_id) {
        $query = $this->db->delete('events', array('event_id' => $event_id));
        if($query)
            return true;
        return false;
    }
    
    // show the event_address for the event.
    public function show_address($event_id) {
    	$this->db->update('events', array('e_is_address_hide' => 0, 'finalized' => 1), array('event_id' => $event_id));
    }
    
    //Remove user from a specific event.
    public function remove_user($user_id, $event_id) {
        $this->db->delete('users_attending', array('user_id' => $user_id));
        $this->db->set('e_attending','e_attending - 1', FALSE);
        $this->db->where('event_id', $event_id);
        $this->db->update('events');
    }
}
?>