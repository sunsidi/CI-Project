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
    //Creates a new wrevenue.
    public function create_wrevenue($user_id) {
        $data = $this->input->post();
        foreach($data as $i => $value) {
            if($value) {
                if($i == 'start_time') {
                    $new_value = $this->timestamp($value, false);
                    $new_data[$i] = $new_value;
                }
                else if ($i == 'end_time') {
                    $new_value = $this->timestamp($value, false);
                    $new_data[$i] = $new_value;
                }
                else {
                    $new_data[$i] = $value;
                }
            }
        }
        if(isset($new_data)) {
            $new_data['creator_id'] = $user_id;
            $query = $this->db->insert('wrevenues', $new_data);
            if($query) {
                return true;
            }
            else return false;
        }
        else
            return true;
    }
    //Edits a wrevenue.
    public function edit_wrevenue($id) {
        $data = $this->input->post();
        foreach($data as $i => $value) {
            if($value && strpos($i, 'am_pm') === false) {
                if($i == 'start_time') {
                    if($data['start_time_am_pm'] == 'AM') {
                        $new_value = $this->timestamp($value, false);
                    }
                    else {
                        $new_value = $this->timestamp($value, true);
                    }
                    $new_data[$i] = $new_value;
                }
                else if($i == 'end_time') {
                    if($data['end_time_am_pm'] == 'AM') {
                        $new_value = $this->timestamp($value, false);
                    }
                    else {
                        $new_value = $this->timestamp($value, true);
                    }
                    $new_data[$i] = $new_value;
                }
                else {
                    $new_data[$i] = strip_tags($value);
                }
            }
        }
        if(isset($new_data)) {
            $query = $this->db->update('wrevenues', $new_data, array('id' => $id));
            if($query)
            {
                return  true;
            }
            else return false;
        }
        else
            return true;
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
    //Converts the time to small int.(SAVED IN DATABASE)
    public function timestamp($input, $format) { //CHANGED! SAVED AS SMALL INT
        if(strpos($input, ':')) {
            $input = explode(':', $input);
            if($format) {
                $input[0] += 12;
            }
            $sum = $input[0] * 60;
            $sum += $input[1];
        }
        else
            $sum = 0;
        return $sum;
    }
    
}
?>