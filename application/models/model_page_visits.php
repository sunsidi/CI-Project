<?php

class Model_page_visits extends CI_Model{
    
    function __construct()
    {
            parent::__construct();
            $this->load->database();
    }
    
    //Get all the page visits stats.
    public function get_page_visits() {
        $query = $this->db->get('page_visits');
        if($query->num_rows() != 0) {
            return $query->row_array(0);
        }
        return false;
    }
    
    //Updates the number of page visits.
    public function update_page_visits($page) {
        $this->db->where('id','only_one');
        if($page == 'culture') {
            $this->db->set($page, 'culture+1', FALSE);
        }
        if($page == 'icebreakers') {
            $this->db->set($page, 'icebreakers+1', FALSE);
        }
        if($page == 'hotspots') {
            $this->db->set($page, 'hotspots+1', FALSE);
        }
        if($page == 'mywrevs') {
            $this->db->set($page, 'mywrevs+1', FALSE);
        }
        if($page == 'latestwrevs') {
            $this->db->set($page, 'latestwrevs+1', FALSE);
        }
        $this->db->update('page_visits');
    }
}
?>