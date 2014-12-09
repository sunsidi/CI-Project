<?php

class Model_wrevenues extends CI_Model{
    
   function __construct()
   {
            parent::__construct();
            $this->load->database();
    }
    //Gets all wrevenues in the database.
    public function get_wrevenues() {
        $query = $this->db->get('wrevenues');
        return $query->result_array();
    }
    //Finds a specific wrevenue based on id.
    public function find_wrevenue($id) {
        $query = $this->db->get_where('wrevenues', array('id' => $id));
        if($query->num_rows() != 0) {
            $data = $query->row_array(0);
            $data['start_time'] = $this->convert_time($data['start_time']);
            $data['end_time'] = $this->convert_time($data['end_time']);
            return $data;
        }
        else {
            return false;
        }
    }
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
}
?>