<?php
class Theme_model extends CI_Model {

	var $view   = '';
	var $data   = '';
   
    function __construct()
    {
        parent::__construct();
    }
	
	function loadTheme($view,$data)
    {		
    	$this->load->view('head',$data);
        $this->load->view($view,$data);
        $this->load->view('foot');       		
    }
		
	function getIp(){
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
   			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
   			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}else{
   			$ip= $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}
	
	function filter($value)
	{
	
	$xss_clean = $this->security->xss_clean($value);
	$htmlspecialchars = htmlspecialchars($xss_clean, ENT_QUOTES );
	return $htmlspecialchars;
	}
}