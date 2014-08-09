<?php
class Wedding_model extends CI_Model {
  
    function __construct()
    {
        parent::__construct();
    }
	
	//新增資料
	function insertData($data)
	{
		$this -> db -> insert('guest_file', $data);
		//return $this->db->insert_id();
	}
	//讀取資料
	function getResult()
	{
		$sql = "select  * from `guest_file` group by name order by add_time ;";
		$query=$this->db->query($sql);
    	return $query;
	}
}