<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//DO NOT DELETE. THIS IS A CRON JOB THAT UPDATES EVERY DAY/MINUTE(subject to change).
class Event_update extends CI_Controller {
    
        function __construct()
        {
                parent::__construct();
                
        }
	public function index() {
		$this->load->model('model_events');
		$this->model_events->cron_update_event_period();
	}
}