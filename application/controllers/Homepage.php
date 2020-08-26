<?php

/**
 * 
 */
class Homepage extends CI_COntroller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('index');
	}
}