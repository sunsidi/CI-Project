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
        return ;
    }
    
    //Delete a set of blogs that were checked.
    public function admin_delete_blogs() {
        $data = $this->input->post('blogs_checkbox');
        for($i = 0; $i < count($data); $i++) {
            $query = $this->db->get_where('blogs', array('id' => $data[$i]));
            if($query->num_rows() != 0) {
                $temp_data = $query->row_array(0);
                if(!empty($temp_data['blog_comment_file'])) {
                    unlink('./application/views/blog_comments/'.$temp_data['blog_comment_file']);
                }
            }
            $this->rrmdir('./uploads/blogs/'.$data[$i]);
        }
        $this->db->where_in('id', $data);
        $this->db->delete('blogs');
    }
    
    //Gets all blogs in the database. (SAME AS ADMIN_GET_BLOGS) SEPARATED JUST IN CASE.
    public function get_blogs() {
        $query = $this->db->get('blogs');
        if($query->num_rows() != 0) {
            return $query->result_array();
        }
        return false;
    }
    
    //Gets the information on a blog and 2 previous ones.
    public function blog_info($id) {
        $query = $this->db->get_where('blogs', array('id' => $id));
        if($query->num_rows() != 0) {
            $sql = "SELECT * FROM blogs WHERE id < ? ORDER BY id DESC LIMIT 2";
            $related_posts = $this->db->query($sql, array($id));
            $result = array_merge($query->result_array(), $related_posts->result_array());
            return $result;
        }
        return false;
    }
    
    //Used to check if a comment file exists for a blog.
    public function get_comments($id){
        $sql = 'SELECT * FROM blogs WHERE id =?';
        $query = $this->db->query($sql,array($id,));
        $data = $query->result_array();
        if ($data[0]['blog_comment_file']!=""){
            return $data[0]['blog_comment_file'];
        }
        else return false;
    }
    
    //Create a blog comment file.
    public function create_blog_comment($filename,$id){
        $sql = 'UPDATE blogs SET blog_comment_file= ? WHERE id=?';
        $query = $this->db->query($sql,array($filename,$id));
        if ($query){
            return true;
        }
        else {return false;}
    }
    
    //Post a blog.
    public function post_blog() {
        $data = $this->input->post();
        if($this->db->insert('blogs', $data)) {
            return $this->db->insert_id();
        }
        return false;
    }
    
    public function edit_blog($blog_filename, $blog_id) {
        $data = $this->input->post();
        foreach ($data as $i => $value){
          //if user inputted a value then update it
          if($value && strpos($i, 'id') === false){
            $info_updating[substr($i,0, strpos($i, '_edit'))] = strip_tags($value);
          }
        }
        //We need to delete the old file or we'll have useless files in our folders.
        if(!empty($blog_filename)) {
            $query = $this->db->get_where('blogs', array('id' => $blog_id));
            if($query->num_rows() != 0) {
                $temp_data = $query->row_array(0);
                if(!empty($temp_data['blog_filename'])) {
                    unlink('./uploads/'.$temp_data['blog_filename']);
                }
            }
            $info_updating['blog_filename'] = $blog_filename;
        }
        if(isset($info_updating)) {
            if($this->db->update('blogs', $info_updating, array('id' => $blog_id))) {
                return true;
            }
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
    
    //Recursive remove directory.
    function rrmdir($dir) {
        $files = array_diff(scandir($dir), array('.','..'));
        foreach ($files as $file) {
          (is_dir("$dir/$file")) ? rrmdir("$dir/$file") : unlink("$dir/$file");
        }
        return rmdir($dir);
    }
    
}
?>