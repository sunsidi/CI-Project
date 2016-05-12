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
    	$query = $this->db->order_by('ticket_id', 'asc')->get_where('tickets', array('event_id' => $event_id));
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
    public function get_id($current_E){
        $id = $this->db->select('event_id')->where('e_name',$current_E)->get('events')->result_array();
        return $id;
    }
    public function get_row_number($user_id,$id){
        
        if(!empty($id)){
        $nrow = $this->db->select('ticket_id, Qty, fullname, purchase_time, ticket_type, ticket_price, delivery')
                        ->where('user_id',$user_id)->where('event_id',$id[0]['event_id'])->get('Guest')->num_rows();
        }
        else{
        $nrow = $this->db->select('ticket_id, Qty, fullname, purchase_time, ticket_type, ticket_price, delivery')
                        ->where('user_id',$user_id)->get('Guest')->num_rows(); 
        }
        return $nrow;
    }
    public function get_record($user_id,$id){
        if(!empty($id)){
        $record = $this->db->select('ticket_id, Qty, fullname, purchase_time, ticket_type, ticket_price, delivery')
                        ->where('user_id',$user_id)->where('event_id',$id[0]['event_id']);
        }
        else{
        $record = $this->db->select('ticket_id, Qty, fullname, purchase_time, ticket_type, ticket_price, delivery')
                        ->where('user_id',$user_id);
        }
        return $record;
    }
    public function get_ticket_qty($id){
        $totalqty = $this->db->select('quantity')->where('event_id',$id[0]['event_id'])->get('event_ticket_types')->result_array();
        return $totalqty;
    }
    public function get_ticket_sold($id){
        $ticketsold = $this->db->select('Qty')->where('event_id',$id[0]['event_id'])->get('Guest')->result_array();
        return $ticketsold;
    }
    public function create_guestlist(){
        $query = $this->db->order_by('ticket_id','asc')->get('tickets');
        if($query){
            $alltickets = $query->result_array();
        }
        else{
            return false;
        }
        //get the tickets informationw with Qty
        $newtickets = $this->orgnize_ticket($alltickets);
        $createtable = "CREATE TABLE Guest("
                        . "ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,"
                        . "ticket_id VARCHAR(255) NOT NULL,"
                        . "event_id INT(11) NOT NULL,"
                        . "user_id INT(11) NOT NULL,"
                        . "fullname VARCHAR(255) NOT NULL,"
                        . "delivery VARCHAR(255) NOT NULL,"
                        . "ticket_type VARCHAR(255) NOT NULL,"
                        . "ticket_price DECIMAL(19,4) NOT NULL,"
                        . "fees DECIMAL(19,4) NOT NULL,"
                        . "total_price DECIMAL(19,4) NOT NULL,"
                        . "barcode VARCHAR(255) NOT NULL,"
                        . "purchase_time DATETIME NOT NULL,"
                        . "person_pickup varchar(80) NOT NULL,"
                        . "Qty INT(11) NOT NULL"
                        . ")";
        $this->db->query($createtable);
        for($i = 0; $i < count($newtickets); $i++){
            $this->db->insert('Guest',$newtickets[$i]);
        }
    }
    //Get the quantity for a specific event ticket and create a new array
    //which contains the modified ticket information
    //make sure $ticket_info is sorted before passed into the function
    public function orgnize_ticket($tickets_info){                         
        $i = 0; //$i is the starting point of the loop
        $k = 0;
        $Qty = 1; // this is used to save the quantity of tickets, by default there is always one ticket
        $index = array();
        $quantity = array();
        $ticket = array();
        for($j = 1; $j < count($tickets_info); $j++) {
//            if the ticket_id are the same, then increase the quantity by one
            if($tickets_info[$i]['ticket_id'] == $tickets_info[$j]['ticket_id'])
            {
                $Qty++;
//            if reaches the end of the array and find no difference
                if($j == (count($tickets_info)-1))
                {
                    $idx = $j;
                    array_push($quantity, $Qty);
                    array_push($index,$idx);
                }
            }            
//            if the ticket_id are not the same, then push the quantity into an array and remember the index
            else
            {
                $idx = $j;//remember the index of the next first different ticket_id
                $i = $j;//find the next starting point
                $index[$k] = $idx;//push back the index of the next different ticket_id
                $quantity[$k] = $Qty;//save quantity into the array
                $k++;//increase the index poniter
                $Qty = 1;//reset quantity back to one
//            if reaches the end of the array and find difference
                if($j == (count($tickets_info)-1))
                {
                    array_push($quantity, $Qty);
                }
            }
        }

        //assign the ticket information into a new array
        $ticket[0] = $tickets_info[0];//assign the first row of old ticket information to the new one, this step isn't finished by the above loop
        for($m = 0; $m < count($index); $m++){
            $ticket[$m+1] = $tickets_info[$index[$m]]; 
        }
        //get the last 7 digits from the ticket_id
        for($m = 0; $m < count($ticket); $m++){
           $temp_id = $ticket[$m]['ticket_id'];
           $ticket[$m]['ticket_id'] = substr($temp_id, 25, 7);
        }
        //create the finally array, combine ticket information with quantity
       for($a = 0; $a < count($quantity); $a++)
       {
           $ticket[$a]['Qty'] = $quantity[$a];
       }
        return $ticket;
        
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