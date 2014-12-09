<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class wrevenues extends CI_Controller{
    public function wrevenues_main(){
        $this->load->library('path');
        $this->load->model('model_wrevenues');
        $path = $this->path->getPath();
        $this->load->library('session');
        $data['wrevenues'] = $this->model_wrevenues->get_wrevenues();
        $result = array_merge($path,$data);
        $this->load->view('Create_Wrevel_View',$result);
        $this->load->view('wrevenues_main',$result);     
    }

    public function wrevenues_fullview($id){
        $this->load->library('path');
        $this->load->model('model_wrevenues');
        $path = $this->path->getPath();
        $this->load->library('session');
        $data['wrevenues'] = $this->model_wrevenues->find_wrevenue($id);
        if($data['wrevenues'] !== 0) {
            $result = array_merge($path,$data);
            $this->load->view('Create_Wrevel_View',$result);
            $this->load->view('wrevenues_fullview',$result);     
        }
        else {
            redirect('wrevenues/wrevenues_main');
        }
    }
	
} 