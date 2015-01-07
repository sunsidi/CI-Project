<?php

class Model_blogs extends CI_Model{
    
    function __construct()
    {
            parent::__construct();
            $this->load->database();
    }
    //Gets all blogs in the database.
    public function admin_get_blogs() {
        $query = $this->db->get('blogs');
        if($query->num_rows() != 0) {
            return $query->result_array();
        }
        return false;
    }
    
    //Post a blog.
    public function post_blog() {
        $data = $this->input->post();
        if($this->db->insert('blogs', $data)) {
            return $this->db->insert_id();
        }
        return false;
    }
    //Update the image after uploading it.
    public function update_blog_image($blog_filename, $blog_id) {
        if($this->db->update('blogs', array('blog_filename' => $blog_filename), array('id' => $blog_id))) {
            return true;
        }
        return false;
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