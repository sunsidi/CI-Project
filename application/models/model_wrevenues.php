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
            $day_array = array('mon', 'tues', 'wed', 'thurs', 'fri', 'sat', 'sun');
            for($i = 0; $i < 7; $i++) {
                if(!empty($data[$day_array[$i]])) {
                    $temp_hours = explode('|', $data[$day_array[$i]]);
                    $data['day'][$i]['day'] = $day_array[$i];
                    $data['day'][$i]['start_time'] = $this->convert_time($temp_hours[0]);
                    $data['day'][$i]['end_time'] = $this->convert_time($temp_hours[1]);
                }
                else {
                    $data['day'][$i] = false;
                }
            }
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
            if($value && $i != 'start_time' && $i != 'end_time') {
                if($i == 'wrevenue_file') {
                    continue;
                }
                if($i == 'day') {
                    for($j = 0; $j < count($value); $j++) {
                        $temp_start = $data['start_time'][$j];
                        $start_time = $this->timestamp($temp_start, false);
                        $temp_end = $data['end_time'][$j];
                        $end_time = $this->timestamp($temp_end, false);
                        $new_data[$value[$j]] = $start_time.'|'.$end_time;
                    }
                }
                else {
                    $new_data[$i] = strip_tags($value);
                }
            }
        }
        if(isset($new_data)) {
            $new_data['creator_id'] = $user_id;
            $query = $this->db->insert('wrevenues', $new_data);
            if($query) {
                return $this->db->insert_id();
            }
            else return false;
        }
        else
            return false;
    }
    //Updates a wrevenues' image.
    public function update_wrevenue_image($insert_id, $wrevenue_image) {
        $this->db->update('wrevenues', array('image_key' => $wrevenue_image), array('id' => $insert_id));
    }
    //Edits a wrevenue.
    public function edit_wrevenue($id, $wrevenue_image) {
        $data = $this->input->post();
        foreach($data as $i => $value) {
            if($value && $i != 'start_time' && $i != 'end_time') {
                if($i == 'wrevenue_file') {
                    continue;
                }
                if($i == 'day' && $value != "") {
                    for($j = 0; $j < count($value); $j++) {
                        if(empty($value[$j])) {
                            break;
                        }
                        $temp_start = $data['start_time'][$j];
                        $start_time = $this->timestamp($temp_start, false);
                        $temp_end = $data['end_time'][$j];
                        $end_time = $this->timestamp($temp_end, false);
                        $new_data[$value[$j]] = $start_time.'|'.$end_time;
                    }
                }
                else {
                    $new_data[$i] = strip_tags($value);
                }
            }
        }
        if($wrevenue_image != false) {
            $query = $this->db->get_where('wrevenues', array('id' => $id));
            $temp = $query->row_array(0);
            if($temp['image_key'] != 'default_wrevenue_image.jpg') {
                unlink('./uploads/'.$temp['image_key']);
            }
            $new_data['image_key'] = $wrevenue_image;
            
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