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


    //just for Toast of Brooklyn event
    public function add_ticket_single($data, $quantity)
    {
//        $check_purchase = $this->db->get_where('tickets',array('user_id' => $data['user_id'], 'event_id' => $data['event_id']));
//        if($check_purchase->num_rows() != 0) {
//            $temp_data = $check_purchase->row_array(0);
//            $data['ticket_id'] = $temp_data['ticket_id'];
//        }
//        else {
        $data['ticket_id'] = md5(uniqid());
//        }
        for($i = 0; $i < count($quantity); $i++) {
           if($quantity[$i]>0){
               $data_type = array(
                   'event_id'      => $data['event_id'],
                   'user_id'       => $data['user_id'],
                   'fullname'      => $data['fullname'],
                   'delivery'      => $data['delivery'],
                   'ticket_type'   => $data['ticket_type'][$i],
                   'ticket_price'  => $data['ticket_price'],
                   'fees'          => $data['fees'],
                   'total_price'   => $data['total_price'],
                   'person_pickup' => $data['person_pickup']
               );
               $data_type['ticket_id'] = $data['ticket_id'];
               for($j = 0; $j < $quantity[$i]; $j++) {
                   if($this->db->insert('tickets',$data_type)){
                       $barcode = $this->db->insert_id();
                       $this->db->update('tickets',array('barcode' => $barcode), array('id' => $barcode));
                   }
                   else
                       return false;
               }
           }
        }
//            if($quantity['General6']>0){
//                $data_type = array(
//                    'event_id'      => $data['event_id'],
//                    'user_id'       => $data['user_id'],
//                    'fullname'      => $data['fullname'],
//                    'delivery'      => $data['delivery'],
//                    'ticket_type'   => $data['ticket_type']['General6'],
//                    'ticket_price'  => $data['ticket_price'],
//                    'fees'          => $data['fees'],
//                    'total_price'   => $data['total_price'],
//                    'person_pickup' => $data['person_pickup']
//                );
//                $data_type['ticket_id'] = $data['ticket_id'];
//                for($i = 0; $i < $quantity['General6']; $i++) {
//                    if($this->db->insert('tickets',$data_type)){
//                        $barcode = $this->db->insert_id();
//                        $this->db->update('tickets',array('barcode' => $barcode), array('id' => $barcode));
//                    }
//                    else
//                        return false;
//                }
//            }
//        if($quantity['General7']>0){
//            $data_type = array(
//                'event_id'      => $data['event_id'],
//                'user_id'       => $data['user_id'],
//                'fullname'      => $data['fullname'],
//                'delivery'      => $data['delivery'],
//                'ticket_type'   => $data['ticket_type']['General7'],
//                'ticket_price'  => $data['ticket_price'],
//                'fees'          => $data['fees'],
//                'total_price'   => $data['total_price'],
//                'person_pickup' => $data['person_pickup']
//            );
//            $data_type['ticket_id'] = $data['ticket_id'];
//            for($i = 0; $i < $quantity['General7']; $i++) {
//                if($this->db->insert('tickets',$data_type)){
//                    $barcode = $this->db->insert_id();
//                    $this->db->update('tickets',array('barcode' => $barcode), array('id' => $barcode));
//                }
//                else
//                    return false;
//            }
//        }
//        if($quantity['VIP6']>0){
//            $data_type = array(
//                'event_id'      => $data['event_id'],
//                'user_id'       => $data['user_id'],
//                'fullname'      => $data['fullname'],
//                'delivery'      => $data['delivery'],
//                'ticket_type'   => $data['ticket_type']['VIP6'],
//                'ticket_price'  => $data['ticket_price'],
//                'fees'          => $data['fees'],
//                'total_price'   => $data['total_price'],
//                'person_pickup' => $data['person_pickup']
//            );
//            $data_type['ticket_id'] = $data['ticket_id'];
//            for($i = 0; $i < $quantity['VIP6']; $i++) {
//                if($this->db->insert('tickets',$data_type)){
//                    $barcode = $this->db->insert_id();
//                    $this->db->update('tickets',array('barcode' => $barcode), array('id' => $barcode));
//                }
//                else
//                    return false;
//            }
//        }
//        if($quantity['VIP7']>0){
//            $data_type = array(
//                'event_id'      => $data['event_id'],
//                'user_id'       => $data['user_id'],
//                'fullname'      => $data['fullname'],
//                'delivery'      => $data['delivery'],
//                'ticket_type'   => $data['ticket_type']['VIP7'],
//                'ticket_price'  => $data['ticket_price'],
//                'fees'          => $data['fees'],
//                'total_price'   => $data['total_price'],
//                'person_pickup' => $data['person_pickup']
//            );
//            $data_type['ticket_id'] = $data['ticket_id'];
//            for($i = 0; $i < $quantity['VIP7']; $i++) {
//                if($this->db->insert('tickets',$data_type)){
//                    $barcode = $this->db->insert_id();
//                    $this->db->update('tickets',array('barcode' => $barcode), array('id' => $barcode));
//                }
//                else
//                    return false;
//            }
//        }
        return $data['ticket_id'];
    }

    //mail information
    public function add_shipping_information($shipping_information){
         $this->db->insert('tickets_mail',$shipping_information);
    }


    
}
?>