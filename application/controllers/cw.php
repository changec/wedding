<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cw extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('theme_model');
		$this->load->model('wedding_model');
    }

	
	public function index()
	{
		//$this->load->view('index');
		$data = '';
		$this->theme_model->loadTheme('index',$data);
	}
	
	public function insertData()
	{
				   $name = $this->theme_model->filter($this->input->post("name"));
			$changewendy = $this->theme_model->filter($this->input->post("changewendy"));
				$is_join = $this->theme_model->filter($this->input->post("is_join"));
					$big = $this->theme_model->filter($this->input->post("big"));
				  $small = $this->theme_model->filter($this->input->post("small"));
				$when_su = $this->theme_model->filter($this->input->post("when_su"));
					$tel = $this->theme_model->filter($this->input->post("tel"));
				   $addr = $this->theme_model->filter($this->input->post("addr"));
		  $say_something = $this->theme_model->filter($this->input->post("say_something"));
					 $ip = $this->theme_model->getIp();
		
		$data = array(
					   'name' => $name,
		 	'change_or_wendy' => $changewendy,
					'is_join' => $is_join,
						'big' => $big,
					  'small' => $small,
					'when_su' => $when_su,
						'tel' => $tel,
					   'addr' => $addr,
			  'say_something' => $say_something,
						 'ip' => $ip
		);
		$this->wedding_model->insertData($data);
		
		echo 'done';
		die();
	}
	function result()
	{
	
		$data['title']='惠致一個家';
		$data['result']= $this->wedding_model->getResult()->result();
		$this->theme_model->loadTheme('result',$data);
	}
	
}

/* End of file cw.php */
/* Location: ./application/controllers/cw.php */