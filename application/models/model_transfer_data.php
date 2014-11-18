<?php

class Model_transfer_data extends CI_Model{
    
   function __construct()
   {
            parent::__construct();
            $this->load->database();
            /*$db1 = $this->load->database('group1', TRUE);
            $db2 = $this->load->database('group2', TRUE);*/
   }
   /*function firstcheck() {
   	$db1 = $this->load->database('group1', TRUE);
        $db2 = $this->load->database('group2', TRUE);
   	$query = $db2->get('ow_base_user');
   	$number = $query->result_array();
   	return strtolower($number[0]['email']);
   }
   function secondcheck() {
        /*$db1 = $this->load->database('group2', TRUE);
       	$my_query = $db1->get('ow_base_user');
       	$my_data = $my_query->result_array();
       	
        $db2 = $this->load->database('group1', TRUE);
        $query = $db2->get('users');
       	$all_data = $query->result_array();
       	$skip = 0;
       	for($j = 0; $j < count($my_data); $j++) {
       		for($i =0; $i < count($all_data); $i++) {
       			if(strtolower($my_data[$j]['email']) == strtolower($all_data[$i]['email']) || strtolower($my_data[$j]['username']) == strtolower($all_data[$i]['username'])) {
       				$skip = 1;
       				break;
       			}
       			else {
       				$skip = 0;
       			}
       			
       		}
       		if($skip) {}
		else {
			$data_insert = array('fullname' => $my_data[$j]['username'],
	       				     'email' => $my_data[$j]['email'],
	       				     'username' => $my_data[$j]['username'],
	       				     'password' => $my_data[$j]['password'],
	       				     'image_key' => 'default_profile.jpg');
	     		$db2->insert('users', $data_insert);
	     		$skip = 0;
	     	}
       	}
       	return 1;
   }
   function lastcheck() {
   	$data = array('profile_pic' => 'default_profile.jpg');
   	$this->db->update('users', $data, array('profile_pic' => null));
   }*/

   
}
?>