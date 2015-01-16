<?php

class Model_chats extends CI_Model{
    
         function __construct()
         {
                  parent::__construct();
                  $this->load->database();
                  
          }
  public function get_chats($currentUser,$otherUser)
      {
        //SELECT * FROM `chats` WHERE (`person1`= 'gc2bt@virginia.edu' and `person2`='garbocheng@gmail.com' or `person2`= 'gc2bt@virginia.edu' and `person1`='garbocheng@gmail.com')
         //$sql = "SELECT * FROM chats WHERE person1 = ? or person2 = ?;";
        $sql = 'SELECT * FROM chats WHERE (person1= ? and person2=? or person1= ? and person2=?)';
         $query = $this->db->query($sql,array($currentUser,$otherUser,$otherUser,$currentUser));
         //$select = $this->db->where('email',$this->input->post('email'));       
         $data = $query->result_array();
         if ($data){
          return $data;
         }
         else return NULL;
      }
  public function create_chats($currentUser,$otherUser,$chat_file)
    {
      $data = array
      (
      	'status' => "Unread",
        'person1' => $currentUser,
        'person2' => $otherUser,
        'chat_file' => $chat_file,
        'time' => date("Y-m-d H:i:s") 
      );
      $chat_created = $this->db->insert('chats',$data);
      if ($chat_created){
        return true;
      }
      else return false;

    }
  public function get_chatList($currentUser){
    //SELECT `person1`,`person2` FROM `chats` WHERE `person1`='garbo' or `person2`='garbo'
  /* retrieves all chats related to current user */
    $sql ='SELECT * FROM chats WHERE person1=? or person2=? ORDER BY reply_time DESC';
    $query = $this->db->query($sql,array($currentUser,$currentUser));
    if ($query->num_rows()){
	return $query->result_array();
      //print_r($data);
    }
    else{
    	return array();
      //echo "error in DB!";
    }
    

  }
  public function latest_comment($currentUser,$otherUser,$time){
    //echo "in latest_comment: ".$time."<br>";
    //UPDATE `chats` SET `latest_reply`='gc2bt' WHERE (person1= 'garbo' and person2='gc2bt' or person1= 'gc2bt' and person2='garbo')
    $sql = 'UPDATE chats SET latest_replier= ?, reply_time = ? WHERE (person1= ? and person2=? or person1= ? and person2=?)';
    $query = $this->db->query($sql,array($currentUser,$time,$currentUser,$otherUser,$otherUser,$currentUser));
  }
  
  public function get_otherUsers_image($otherUser){
    //
    $sql = 'SELECT image_key FROM users WHERE username=?';
    $query=$this->db->query($sql,array($otherUser,));
    $data = $query->result_array();
    if($data){
    return (string)$data[0]['image_key'];
    }
  }
  
  public function update_status($id){
  
	
	$status = "Read";
	$data = array(
               'status' => $status
              
            );
	$this->db->where('m_id', $m_id);
	$this->db->update('chats', $data); 
	

  } 

}


?>