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
        $this->db->set($page, $page+1, FALSE);
        $this->db->update('page_visits');
    }
}
?>