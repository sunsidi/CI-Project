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
    
    public function add_ticket($data, $quantity)
    {
        $check_purchase = $this->db->get_where('tickets',array('user_id' => $data['user_id'], 'event_id' => $data['event_id']));
        if($check_purchase->num_rows() != 0) {
            $temp_data = $check_purchase->row_array(0);
            $data['ticket_id'] = $temp_data['ticket_id'];
        }
        else {
            $data['ticket_id'] = md5(uniqid());
        }
        for($i = 0; $i < $quantity; $i++) {
            if($this->db->insert('tickets',$data)){
                $barcode = $this->db->insert_id();
                $this->db->update('tickets',array('barcode' => $barcode), array('id' => $barcode));
            }
            else
                return false;
        }
        return $data['ticket_id'];
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
    
    public function get_total_ticket_sales($user_id) {
        $query = $this->db->get_where('tickets', array('user_id' => $user_id));
        if($query->num_rows() != 0) {
            return $query->result_array();
        }
        return false;
    }
    
}
?>