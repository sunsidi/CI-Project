<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class blog extends CI_Controller{
    
    //Blog info. Shows all the information on a blog.
    public function blog_info($id){
        $this->load->library('path');
        $path = $this->path->getPath();
        $this->load->library('session');
        $this->load->model('model_blogs');
        $data['all_blogs'] = $this->model_blogs->blog_info($id);
        if($data['all_blogs']) {
            $data['blog'] = $data['all_blogs'][0];
            if(!empty($data['blog']['blog_comment_file'])) {
                $data['commentLocation'] = base_url()."application/views/blog_comments/".$data['blog']['blog_comment_file'];
            }
            $result = array_merge($path,$data);
            //echo '<pre>', print_r($data, true), '</pre>';
            $this->load->view('Create_Wrevel_View',$result);
            $this->load->view('blog_fullview',$result);
        }
        else {
            redirect('info/blog');
        }
    }
    
    //Comment on a blog.
    public function blog_comment($id) { //message (chat.php)
        /* username is the user currentUser is talking to */
        $this->load->library('path');
        $this->load->library('session');
        $this->load->model('model_blogs');
        $this->load->model('model_users');
        $path = $this->path->getPath();
        $email = $this->session->userdata('email');
        $data = $this->model_users->get_info($email);
        //commentors name
        $currentUser = $data['fullname'];
        //this is where you should check whether a comment for event already exists
        $data['comment_file'] = $this->model_blogs->get_comments($id);
        if ($data['comment_file']){

            $data['PATH_PROFILE'] = $path['PATH_PROFILE'];
            $data['PATH_BOOTSTRAP'] = $path['PATH_BOOTSTRAP'];

            /*commentLocation */
            $data['commentLocation'] = base_url()."application/views/events_comments/".$data['comment_file'];
            $data['email'] = $email;
            $data['currentUser'] = $currentUser;

            //print_r($data);
            if($data)
            {

                      /*no need to load any view since we're simply adding stuff to a file for this? */
                //$this->load->view('event_fullview2',$data);

            }
            else{

                //$this->load->view('')
                //redirect('main/index');
            }
        }
        //create chat since it does not exists! 
        else{
            //create a file name for the chat
            $randomName = md5(uniqid()) . ".html";    
            $filename =  "./application/views/blog_comments/".$randomName;
            //try to create file
            if ($handle=fopen($filename,'w+')){
                //trying to insert info into db
                if($this->model_blogs->create_blog_comment($randomName,$id))
                {
                    //echo "successfully created file and inserted info into database";
                    //display chat into the 
                    if ($this->model_blogs->get_comments($id)){

                        $data['comment_file'] = $randomName;//$this->model_events->get_comments($id);

                        $data['PATH_IMG'] = $path['PATH_IMG'];
                        $data['PATH_PROFILE'] = $path['PATH_PROFILE'];

                        $data['commentLocation'] = base_url()."application/views/events_comments/".$data['comment_file'];
                        $data['email'] = $email;
                        $data['currentUser'] = $currentUser;

                        //print_r($data);
                        if($data)
                        {
                                    /*no need to load any view since we're simply adding stuff to a file for this? */
                                    //$this->load->view('event_fullview2',$data);

                        }
                        else{

                            //$this->load->view('')
                            //redirect('main/index');
                        }
                    }
                }
                else{
                    unlink($filename);
                    echo "could not update the database";
                }
            }
            else{
                echo "An error occured, could not create the file!";
            }
        }
        /* get comments for the event*/
        $temp_comment = $this->input->post('comment');
        $comment = strip_tags($temp_comment);
        while($comment != $temp_comment) {
            $temp_comment = $comment;
            $comment = strip_tags($temp_comment);
        }
        /* check comment if its blank then do not write file_chat */

        $filename =  "./application/views/blog_comments/".$data['comment_file'];
        $today = date("F j, Y, g:i a"); 
        //add commentors name instead of "Comment:"
        if($comment){
            $file_chat = "<p class='$currentUser'style='clear:both'>$currentUser: $comment <br>--$today </p><br>"; 
        }
        else{$file_chat = "";}
        if (! $file_chat .= file_get_contents($filename) and $file_chat != "") {
            echo "in file_chat if statement";
            exit;
        }

        // Write $somecontent to our opened file.
        if (file_put_contents($filename, $file_chat) === FALSE) {
           echo "Cannot write to file ($filename)";
           exit;
        }
        if($comment != ""){
            $this->session->set_flashdata('message','Your comment  "'.$comment.'" was posted!' );
            }
        redirect('blog/blog_info/'.$id);

    }
}