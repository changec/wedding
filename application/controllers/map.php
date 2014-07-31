<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Map extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('theme_model');
    }

	
	public function index()
	{
		//$this->load->view('index');
		$data = '';
		$this->theme_model->loadTheme('map',$data);
	}
}

/* End of file map.php */
/* Location: ./application/controllers/map.php */