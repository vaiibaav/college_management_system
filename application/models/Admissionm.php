<?php
/**
 * 
 */
class Admissionm extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function collegesession()
	{
		$result = $this->db->get('collegesesssion');
		return $result->result();
	}
	public function collegesessionnew()
	{
		//$value = "new";
		$this->db->where('status', 1);
		$result = $this->db->get('collegesesssion');
		return $result->result();
	}
	public function addstudent($data)
	{
		$this->db->insert('bscadmission', $data);
	}

	public function searchstudent($data)
	{
		$this->db->where($data);
		$result = $this->db->get('bscadmission');
		return $result->result();
	}

	public function searchstudentba($data)
	{
		$this->db->where($data);
		$result = $this->db->get('baadmission');
		return $result->result();
	}
}