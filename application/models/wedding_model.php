<?php
class Wedding_model extends CI_Model {
  
    function __construct()
    {
        parent::__construct();
    }
	
	//�s�W���
	function insertData($data)
	{
		$this -> db -> insert('guest_file', $data);
		//return $this->db->insert_id();
	}
}