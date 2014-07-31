<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cw extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('theme_model');
    }

	
	public function index()
	{
		//$this->load->view('index');
		$data = '';
		$this->theme_model->loadTheme('index',$data);
	}
}

/* End of file cw.php */
/* Location: ./application/controllers/cw.php */