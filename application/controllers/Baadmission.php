<?php
/**
 * 
 */
class Baadmission extends CI_COntroller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('admin/baadmission');
	}
}