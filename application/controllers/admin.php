<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_users');
        $this->load->library('path');
        $this->load->library('session');
        $email = $this->session->userdata('email');
        if(!$this->model_users->get_admin_level($email)) {
            redirect('welcome');
        }

    }
    
	public function admin_account(){
            $this->load->library('session');
            $current_user = $this->model_users->get_info($this->session->userdata('email'));
            $data['current_user'] = $current_user;
		$this->load->library('path');
                $this->load->helper('date');
            	$path = $this->path->getPath();
            	$this->load->library('session');
            	$this->load->model('model_users');
            	$this->load->model('model_events');
            	$this->load->model('model_tickets');
                $this->load->model('model_blogs');
                $this->load->model('model_friend_request');
                $this->load->model('model_news');
                $this->load->model('model_page_visits');
            	
            	$data['all_users'] = $this->model_users->admin_get_users();
            	$data['all_events'] = $this->model_events->admin_get_events();
            	$data['all_tickets'] = $this->model_tickets->admin_get_tickets();
                //More information needed for tickets. event name and seller.
                for($i = 0; $i < count($data['all_tickets']); $i++) {
                    $event_data_temp = $this->model_events->admin_get_event_info($data['all_tickets'][$i]['event_id']);
                    $data['all_tickets'][$i]['e_name'] = $event_data_temp['e_name'];
                    $data['all_tickets'][$i]['seller'] = $this->model_users->get_username_with_id($event_data_temp['e_creatorID']);
                }
                
                $data['all_blogs'] = $this->model_blogs->admin_get_blogs();
                $data['all_notifications'] = $this->model_friend_request->get_notifications_simplified();
                $data['all_news'] = $this->model_news->get_news();
                $data['all_page_visits'] = $this->model_page_visits->get_page_visits();
                
                //FOR SITE STATS.
                $data['stats']['months'] = 0;
                $data['stats']['weeks'] = 0;
                $data['stats']['days'] = 0;
                $datestring = "%Y-%m"; //Month
                $datestring2 = "%Y-%m-%d"; //Day.
                $time = time();
                
                $temp_month = mdate($datestring, $time); //This month.
                
                $day = date('w');
                $temp_week = date('Y-m-d', strtotime('-'.$day.' days')); //This week.
                
                $temp_day = mdate($datestring2, $time); //Today.
                
                //Add the remainder to make it the start of the first day.
                $this_month = $temp_month.'-01 00:00:00';
                $this_week = $temp_week.' 00:00:00';
                $today = $temp_day.' 00:00:00';
                
                for($i = 0; $i < count($data['all_users']); $i++) {
                    if($data['all_users'][$i]['last_online'] >= $this_month) {
                        $data['stats']['months']++;
                    }
                    if($data['all_users'][$i]['last_online'] >= $this_week) {
                        $data['stats']['weeks']++;
                    }
                    if($data['all_users'][$i]['last_online'] >= $today) {
                        $data['stats']['days']++;
                    }
                }
                
                $data['admin_users'] = $this->model_users->admin_get_admin_users();
                $data['admin_level_1'] = $data['admin_level_2'] = $data['admin_level_3'] = $data['admin_level_4'] = array();
                for($i = 0; $i < count($data['admin_users']); $i++) {
                    if($data['admin_users'][$i]['admin_level'] == 1) {
                        array_push($data['admin_level_1'], $data['admin_users'][$i]['email']);
                    }
                    else if($data['admin_users'][$i]['admin_level'] == 2) {
                        array_push($data['admin_level_2'], $data['admin_users'][$i]['email']);
                    }
                    else if($data['admin_users'][$i]['admin_level'] == 3) {
                        array_push($data['admin_level_3'], $data['admin_users'][$i]['email']);
                    }
                    else if($data['admin_users'][$i]['admin_level'] == 4) {
                        array_push($data['admin_level_4'], $data['admin_users'][$i]['email']);
                    }
                }
                $data['highest_level'] = 0;
                if(isset($data['admin_level_1'])) {
                    if(count($data['admin_level_1']) > $data['highest_level']) {
                        $data['highest_level'] = count($data['admin_level_1']);
                    }
                }
                if(isset($data['admin_level_2'])) {
                    if(count($data['admin_level_2']) > $data['highest_level']) {
                        $data['highest_level'] = count($data['admin_level_2']);
                    }
                }
                if(isset($data['admin_level_3'])) {
                    if(count($data['admin_level_3']) > $data['highest_level']) {
                        $data['highest_level'] = count($data['admin_level_3']);
                    }
                }
                if(isset($data['admin_level_4'])) {
                    if(count($data['admin_level_4']) > $data['highest_level']) {
                        $data['highest_level'] = count($data['admin_level_4']);
                    }
                }
                $datestring = "%Y-%m-%d %H:%i:%s";
                $time = time();
            	$data['today'] = mdate($datestring, $time);
                $date1 = date_create($data['today']);
                for($i = 0; $i < count($data['all_users']); $i++) {
                    $date2 = date_create($data['all_users'][$i]['join_stamp']);
                    $diff = date_diff($date1,$date2);
                    $data['all_users'][$i]['diff'] = $diff->format("%a");
                }
                for($i = 0; $i < count($data['all_events']); $i++) {
                    $date3 = date_create($data['all_events'][$i]['create_stamp']);
                    $diff = date_diff($date1,$date3);
                    $data['all_events'][$i]['diff'] = $diff->format("%a");
                }
                $result = array_merge($path, $data);
                //echo '<pre>', print_r($data['all_page_visits'], true), '</pre>';
                  $this->load->view('Create_Wrevel_View',$result);
                 $this->load->view('admin_account',$result);
	
        }
        
        //Admin level controls only for level 1 users.
        public function authorize_revoke_users() {
            $this->load->library('session');
            $this->load->model('model_users');
            $op_type = $this->input->post('op_type_user');
            $op_full = explode("_", $op_type);
            if(count($op_full) == 2) {
                $data = $this->input->post('authorize_level_'.$op_full[1]);
                if($op_full[0] == 'authorize' && $op_full[1] <= 4 && $op_full[1] >= 1) {
                    $this->model_users->authorize_user($data, $op_full[1]);
                }
                else if($op_full[0] == 'revoke' && $op_full[1] <= 4 && $op_full[1] >= 1) {
                    $this->model_users->revoke_user($data);
                }
                else {
                    $this->session->set_flashdata('message', 'There was an error authorizing or revoking the user(s). Please try again.');
                    
                }
                $this->session->set_flashdata('message', 'Admin levels have been updated. Please check if everything is correct.');
            }
            else {
                $this->session->set_flashdata('message', 'Please make sure you inputted the right information');
            }
            redirect('admin/admin_account');
        }
        
        //delete users that are checked.
        public function delete_users() {
            $this->load->library('session');
            $this->load->model('model_users');
            $this->model_users->admin_delete_users();
            redirect('admin/admin_account');
        }
        
        //delete events that are checked.
        public function delete_events() {
            $this->load->library('session');
            $this->load->model('model_events');
            $this->model_events->admin_delete_events();
            redirect('admin/admin_account');
        }
        
        //Feature events that are checked.
        public function feature_events() {
            $this->load->library('session');
            $this->load->model('model_events');
            $this->model_events->admin_feature_events();
            redirect('admin/admin_account');
        }
        
        //delete blogs that are checked.
        public function delete_blogs() {
            $this->load->library('session');
            $this->load->model('model_blogs');
            $this->model_blogs->admin_delete_blogs();
            redirect('admin/admin_account');
        }
        
        //creates many events.
        public function create_multiple_events() {
            $this->load->library('session');
            $this->load->model('model_events');
            $this->load->model('model_users');
            $email = $this->session->userdata('email');
            $user_id = $this->model_users->get_userID($email);
            $insert_ids = $this->model_events->create_multi_event($user_id);
            if(isset($insert_ids)) {
                for($i = 0; $i < count($insert_ids); $i++) {
                    mkdir('./uploads/events/'.$insert_ids[$i].'/photos/', 0777, true);
                    chmod('./uploads/events/'.$insert_ids[$i].'/photos/', 0777);
                }
                $config['upload_path'] = './uploads/events/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '10000';
                //echo $image_name;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_multi_upload('multi_file_input'))
                {
                for($i = 0; $i < count($insert_ids); $i++) {
                	$this->model_events->update_images('default_event_image.jpg', $insert_ids[$i]);
                	}
                    $this->session->set_flashdata('message', 'You did not upload any picture or maybe there was an error uploading one or more files.');
                }
                else {
                    $temp_data = $this->upload->get_multi_upload_data();
                    for($i = 0; $i < count($temp_data); $i++) {
                        rename('./uploads/events/'.$temp_data[$i]['file_name'], './uploads/events/'.$insert_ids[$i].'/'.$temp_data[$i]['file_name']);
                        $new_paths[$i] = 'events/'.$insert_ids[$i].'/'.$temp_data[$i]['file_name'];
                    }
                }
                if(isset($new_paths)) {
                    if($this->model_events->update_multi_images($new_paths, $insert_ids)) {
                        $this->session->set_flashdata('message', 'Your events have been created! Visit mywrevs to view them now.');
                    }
                }
            }
            redirect('admin/admin_account');
        }
        //Create blog.
        public function create_blog() {
            $this->load->library('session');
            $this->load->model('model_blogs');
            if(!file_exists('./uploads/blogs/')) {
                mkdir('./uploads/blogs/', 0777, true);
                chmod('./uploads/blogs/', 0777);
            }
            $blog_id = $this->model_blogs->post_blog();
            if(!$blog_id) {
                $this->session->set_flashdata('message', 'Your blog was not created. Please make sure you have inputted the right information.');            
            }
            else {
                mkdir('./uploads/blogs/'.$blog_id, 0777, true);
                chmod('./uploads/blogs/'.$blog_id, 0777);
                $config['upload_path'] = './uploads/blogs/'.$blog_id;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '10000';
                //echo $image_name;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('blog_filename'))
                {
                    $this->session->set_flashdata('message', 'There was an error uploading one or more files. Check if your files are all there.');
                }
                else {
                    $upload_data = $this->upload->data();
                    $blog_filename = 'blogs/'.$blog_id.'/'.$upload_data['file_name'];
                    if($this->model_blogs->update_blog_image($blog_filename, $blog_id)) {
                        $this->session->set_flashdata('message', 'Your blog has been successfully posted');
                    }
                    else {
                        $this->session->set_flashdata('message', 'There was an error uploading your blog image. Please try again.');
                    }
                }
            }            
            redirect('admin/admin_account');
        }
        
        //Edit blog.
        public function edit_blog() {
            $this->load->library('session');
            $this->load->model('model_blogs');
            if(!file_exists('./uploads/blogs/')) {
                mkdir('./uploads/blogs/', 0777, true);
                chmod('./uploads/blogs/', 0777);
            }
            $id = $this->input->post('blog_id_edit');
            $config['upload_path'] = './uploads/blogs/'.$id;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '10000';
            //echo $image_name;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('blog_filename_edit'))
            {
                $this->session->set_flashdata('message', 'There was an error uploading one or more files. Check if your files are all there.');
                $blog_filename = "";
            }
            else {
                $upload_data = $this->upload->data();
                $blog_filename = 'blogs/'.$id.'/'.$upload_data['file_name'];
            }
            $this->model_blogs->edit_blog($blog_filename, $id); 
            $this->session->set_flashdata('message', 'Your blog has been updated! Make sure all the information is correct.');
            redirect('admin/admin_account');
        }
        
        //Creates new News posts
        public function create_news() {
            $this->load->library('session');
            $this->load->model('model_news');
            if(!file_exists('./uploads/news_feed/')) {
                mkdir('./uploads/news_feed/', 0777, true);
                chmod('./uploads/news_feed/', 0777);
            }
            $config['upload_path'] = './uploads/news_feed/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '10000';
            //echo $image_name;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('news_filename'))
            {
                $this->session->set_flashdata('message', 'There was an error uploading one or more files. Check if your files are all there.');
            }
            else {
                $upload_data = $this->upload->data();
                $news_filename = 'news_feed/'.$upload_data['file_name'];
            }
            if($this->model_news->post_news($news_filename)) {
                $this->session->set_flashdata('message', 'Your news has been posted.');
            }
            else {
                $this->session->set_flashdata('message', 'Your news was not created. Please make sure you have inputted the right information.');
            }
            redirect('admin/admin_account');
        }
        
        //Deletes a set of news.
        public function delete_news() {
            $this->load->library('session');
            $this->load->model('model_news');
            if($this->model_news->delete_news()) {
                $this->session->set_flashdata('message', 'Your news has been deleted.');
            }
            else {
                $this->session->set_flashdata('message', 'There was an error removing some of the news.');
            }
            redirect('admin/admin_account');
        }
}