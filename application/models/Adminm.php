<?php
/**
 * 
 */
class Adminm extends CI_Model
{
	public function addbook($data){
		$this->db->insert('tblbooks', $data);
		return $this->db->insert_id();

	}

	public function addcategory($data){
		$this->db->insert('tblcategory', $data);
	}

	public function addauthor($data)
	{
		$this->db->insert('tblauthors', $data);
	}

	public function showcategory()
	{
		$this->db->where('Status', 1);
		$result = $this->db->get('tblcategory');
		return $result->result();
	}

	public function showauthor()
	{
		
		$result = $this->db->get('tblauthors');
		return $result->result();
	}

	public function showbook()
	{
		$result = $this->db->get('tblbooks');
		return $result->result();
	}

	public function updatebook($id)
	{
		$this->db->select ( '*' ); 
    	$this->db->from ( 'tblbooks' );
    	$this->db->join ( 'tblcategory', 'tblcategory.id = tblbooks.CatId' , 'left' );
    	$this->db->join ( 'tblauthors', 'tblauthors.id = tblbooks.AuthorId' , 'left' );
    	$this->db->where ( 'tblbooks.id', $id);
    	$result = $this->db->get ();
    	return $result->result ();
	}

	public function saveupdate($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update('tblbooks', $data);	
	}

	public function deletebook($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tblbooks');
	}
}