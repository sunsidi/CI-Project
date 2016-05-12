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
      
      //Might as well unhide both so we don't have to check which one to unhide.
      public function unhide_both_chats($id) {
          $this->db->update('chats', array('person1_hide' => 0, 'person2_hide' => 0), array('m_id' => $id));
      }
      
      //Hide the chat for a current user.
      public function hide_chat($currentUser, $m_id) {
          $query = $this->db->get_where('chats', array('m_id' => $m_id));
          $the_chat = $query->row_array(0);
          //Find out which person's chat to hide. Then hide it.
          if($the_chat['person1'] == $currentUser) {
              $this->db->update('chats', array('person1_hide' => 1), array('m_id' => $m_id));
          }
          else if($the_chat['person2'] == $currentUser) {
              $this->db->update('chats', array('person2_hide' => 1), array('m_id' => $m_id));
          }
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
    $only_nonhidden = array();
    if ($query->num_rows()){
        $temp_data = $query->result_array();
        for($i = 0; $i < count($temp_data); $i++) {
            if($temp_data[$i]['person1'] == $currentUser) {
                if(!$temp_data[$i]['person1_hide']) {
                    array_push($only_nonhidden, $temp_data[$i]);
                }
            }
            else if($temp_data[$i]['person2'] == $currentUser) {
                if(!$temp_data[$i]['person2_hide']) {
                    array_push($only_nonhidden, $temp_data[$i]);
                }
            }
        }
	if(count($only_nonhidden)) {
            return $only_nonhidden;
        }
        return array();
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