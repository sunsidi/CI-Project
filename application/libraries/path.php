<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Path {
    
        private $path;
	
    	public function __construct()
	{
		$CI =& get_instance();
		$CI->load->helper('url');

            	// Custom Resources
		$this->path['PATH_IMG'] = base_url().'src/data/img/';
		
		// Plugin Resources
		$this->path['PATH_BOOTSTRAP'] = base_url().'src/bootstrap/';
		
		//Javascript files.
		$this->path['PATH_JAVASCRIPT'] = base_url().'src/js/';

		$this->path['PATH_PROFILE'] = base_url().'src/front-end/';
		
		// Temp  Resources (like captcha)
		$this->path['PATH_CAPTCHA'] = base_url().'src/tmp/captcha/';
		
		// Site Url
		$this->path['PATH_SITE_URL'] = site_url().'/';
		
	}
	
	
	public function getPath()
	{
		return $this->path;
	}
}

?>