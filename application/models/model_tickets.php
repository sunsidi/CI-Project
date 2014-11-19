<?php

class Model_tickets extends CI_Model{
    
   function __construct()
   {
            parent::__construct();
            $this->load->database();
    }
    
    public function admin_get_tickets() {
    	$query = $this->db->get('tickets');
    	return $query->result_array();
    }
    
    public function add_ticket($data)
    {
	 if($this->db->insert('tickets',$data))
	       return $this->db->insert_id();
	 else
	       return false;
    }
    
    public function get_ticket($event_id, $user_id) {
    	$query = $this->db->get_where('tickets', array('event_id' => $event_id, 'user_id' => $user_id));
    	if($query->num_rows() != 0) {
    		$ticket_data = $query->result_array();
    		return $ticket_data;
    	}
    	else
    		return false;
    }
    
    public function get_ticket_with_id($event_id, $ticket_id) {
    	$query = $this->db->get_where('tickets', array('event_id' => $event_id, 'ticket_id' => $ticket_id));
    	if($query->num_rows() != 0) {
    		$ticket_data = $query->result_array();
    		return $ticket_data;
    	}
    	else
    		return false;
    }
    
    public function get_ticket_owner($event_id) {
    	$query = $this->db->get_where('tickets', array('event_id' => $event_id));
    	if($query) {
    		$ticket_data = $query->result_array();
    		return $ticket_data;
    	}
    	else
    		return false;
    }
    
}
?>