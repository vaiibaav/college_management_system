<?php
/**
 * 
 */
class Admissionfeesm extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function payfeesm($data)
	{
		$this->db->insert('admfees', $data);
		/*print_r($this->db->last_query());
		exit();*/
	}

	public function paydata()
	{
		$this->db->order_by('formno', 'desc');
		$data = $this->db->get('admfees');
		return $data->result(); 
	}

	public function printdata($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->get('admfees');
		return $result->result();
	}
}