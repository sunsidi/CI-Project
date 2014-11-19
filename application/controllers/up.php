<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Up extends CI_Controller{
	public function index(){
		parent::__construct();
		$this->load->library('session');
		$sessionData = $this->session->all_userdata();
		if($sessionData['is_logged_in'] == 1){
		echo "Uploading pictures as:" . $sessionData['email']. "\n";
		$this->load->view('upload_form',array('error'=>''));
		}
		else{
			echo "You must be logged in to upload pictures!!!!";
		}
	}

	
	public function upload2() //add parameter (user email or id)
	{
		//$this->load->library('session');
		//if($this->session->userdata('is_logged_in') == 1){
		if(isset($_POST['Continue'])){
                	redirect('showroom/profile');
            	}
            	else {
			$this->load->model('model_users');
			$config['upload_path']='./uploads/'; //change it to a user specific directory
			//if user specific directory does not exist...then create one and then upload
			$config['allowed_types']= 'gif|jpg|png|jpeg';

			$config['max_size']	= '10000';

			$config['file_name'] = md5(uniqid());
			//echo $image_name;
			$this->load->library('upload',$config);
			if (!$this->upload->do_upload())
			{
				$error = array ('error' => $this->upload->display_errors());
				$this->load->view('upload_form',$error);
			}
			else{

				$upload_data = $this->upload->data();
				//$data = array('upload_data' => $this->upload->data());
				$image_name = $upload_data['file_name'];
				$updateDB = $this->model_users->add_image($image_name);
				if($updateDB){
					$this->load->view('upload_success',$upload_data);
					//echo "uploaded image name: ".$image_name;
				}
				else{
					echo "could not update database";
				}
			}
		}
	}
	//}        //checks if user logged in
	
}