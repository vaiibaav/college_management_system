<?php
/**
 * 
 */
class Bcomadmission extends CI_COntroller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('admin/bcomadmission');
	}
}