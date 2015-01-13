<?php

class Model_news extends CI_Model{
    
    function __construct()
    {
            parent::__construct();
            $this->load->database();
    }
    //Posts a new news to the database.
    public function post_news($news_filename) {
        $data['news_body'] = $this->input->post('news_body');
        $data['news_filename'] = $news_filename;
        $data['news_author'] = $this->input->post('news_author');
        if($this->db->insert('news_feed', $data)) {
            return true;
        }
        return false;
    }
    
    //Gets all the news in the database.
    public function get_news() {
        $this->db->order_by('news_date', 'desc');
        $query = $this->db->get('news_feed');
        if($query->num_rows() != 0)
            return $query->result_array();
        return false;
    }
    
    //Delets a set list of news.
    public function delete_news() {
        $data = $this->input->post('delete_news_checkbox');
        $this->db->where_in('id', $data);
        if($this->db->delete('news_feed')) {
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