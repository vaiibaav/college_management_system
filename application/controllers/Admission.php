<?php
/**
 * 
 */
class Admission extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admissionm');
		
	}

	public function index()
	{
		$this->load->view('admin/admission');
	}
	public function bscadmission()
	{
		$newsession["newsession"] = $this->admissionm->collegesessionnew();
		$this->load->view('admin/ugadmission',$newsession);
		//var_dump($newsession);
	}
	public function bcomadmission()
	{
		$newsession["newsession"] = $this->admissionm->collegesessionnew();
		$this->load->view('admin/ugadmission',$newsession);
	}
	public function baadmission()
	{
		$newsession["newsession"] = $this->admissionm->collegesessionnew();
		$this->load->view('admin/ugadmission',$newsession);
	}
	public function bscstudentview()
	{
		$clgsession["data"] = $this->admissionm->collegesession();
		$this->load->view('admin/ugstudentview',$clgsession);
	}
	public function bcomstudentview()
	{
		$clgsession["data"] = $this->admissionm->collegesession();
		$this->load->view('admin/ugstudentview',$clgsession);
	}
	public function bastudentview()
	{
		$clgsession["data"] = $this->admissionm->collegesession();
		$this->load->view('admin/ugstudentview',$clgsession);
	}

	public function bscformvalidation()
	{
		$this->form_validation->set_rules('formno', 'Form No', 'trim|required');
		$this->form_validation->set_rules('admdate', 'Admission Date', 'trim|required');
		$this->form_validation->set_rules('courseyear', 'Course Year', 'trim|required');
		$this->form_validation->set_rules('course', 'Course', 'trim|required');
		$this->form_validation->set_rules('bsccompulsorysub', 'Compulsory Subject', 'trim|required');
		$this->form_validation->set_rules('bscgroupsub', 'Compulsory Subject', 'trim|required');
		$this->form_validation->set_rules('firstname', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('middlename', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('lastname', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('guardian_relation', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('guardianname', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('mothername', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('gender', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('maratial_status', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('dob', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('pob', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('religion', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('category', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('caste', 'Group Subject', 'trim|required');
		//$this->form_validation->set_rules('subcaste', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('physically_challenged', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('fulladdress', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('state', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('district', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('tehsil', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('village', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('pincode', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('mobile1', 'Group Subject', 'trim|required');
		//$this->form_validation->set_rules('mobile2', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('emailid', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('sscsch', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('sscpass', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('sscroll', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('sscper', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('hscuni', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('hscsch', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('hscpass', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('hscroll', 'Group Subject', 'trim|required');
		$this->form_validation->set_rules('hscper', 'Group Subject', 'trim|required');
		if ($this->form_validation->run()) {
			$data = array(
				"formno" => $this->input->post("formno"),
				"admdate" => $this->input->post("admdate"),
				"courseyear" => $this->input->post("courseyear"),
				"course" => $this->input->post("course"),
				"compulsorysub" => $this->input->post("compulsorysub"),
				"bsccompulsorysub" => $this->input->post("bsccompulsorysub"),
				"bscgroupsub" => $this->input->post("bscgroupsub"),
				"firstname" => $this->input->post("firstname"),
				"middlename" => $this->input->post("middlename"),
				"lastname" => $this->input->post("lastname"),
				"guardian_relation" => $this->input->post("guardian_relation"),
				"guardianname" => $this->input->post("guardianname"),
				"mothername" => $this->input->post("mothername"),
				"gender" => $this->input->post("gender"),
				"maratial_status" => $this->input->post("maratial_status"),
				"dob" => $this->input->post("dob"),
				"pob" => $this->input->post("pob"),
				"religion" => $this->input->post("religion"),
				"category" => $this->input->post("category"),
				"caste" => $this->input->post("caste"),
				"subcaste" => $this->input->post("subcaste"),
				"physically_challenged" => $this->input->post("physically_challenged"),
				"fulladdress" => $this->input->post("fulladdress"),
				"state" => $this->input->post("state"),
				"district" => $this->input->post("district"),
				"tehsil" => $this->input->post("tehsil"),
				"village" => $this->input->post("village"),
				"pincode" => $this->input->post("pincode"),
				"mobile1" => $this->input->post("mobile1"),
				"mobile2" => $this->input->post("mobile2"),
				"emailid" => $this->input->post("emailid"),
				"sscuni" => $this->input->post("sscuni"),
				"sscsch" => $this->input->post("sscsch"),
				"sscpass" => $this->input->post("sscpass"),
				"sscroll" => $this->input->post("sscroll"),
				"sscper" => $this->input->post("sscper"),
				"hscuni" => $this->input->post("hscuni"),
				"hscsch" => $this->input->post("hscsch"),
				"hscpass" => $this->input->post("hscpass"),
				"hscroll" => $this->input->post("hscroll"),
				"hscper" => $this->input->post("hscper")
			);
			
			$this->admissionm->addstudent($data);
		} else {
			
			
		}
	}
	public function baformvalidation()
	{
		$data = $this->input->post("bacourse");
		echo "<pre>";
		print_r($data[2]);
		$implode = implode(",", $this->input->post("bacourse"));
		echo "<pre>";
		print_r($implode);
	}
	public function searchstudent()
	{
		$this->form_validation->set_rules('collegesession', 'collegesession', 'trim|required');
		$this->form_validation->set_rules('courseyear', 'courseyear', 'trim|required');
		$this->form_validation->set_rules('bscgroupsub', 'bscgroupsub', 'trim|required');
		if ($this->form_validation->run()) {
			$data = array(
				"collegesession" => $this->input->post("collegesession"),
				"courseyear" => $this->input->post("courseyear"),
				"bscgroupsub" => $this->input->post("bscgroupsub")
			);
			$search["students"] = $this->admissionm->searchstudent($data);
			$this->load->view('admin/ugstudentview',$search);
		} else {
			$this->load->view('admin/ugstudentview');
		}
	}
	public function searchstudentba()
	{
		$this->form_validation->set_rules('collegesession', 'collegesession', 'trim|required');
		$this->form_validation->set_rules('courseyear', 'courseyear', 'trim|required');
		if ($this->form_validation->run()) {
			$data = array(
				"collegesession" => $this->input->post("collegesession"),
				"courseyear" => $this->input->post("courseyear")
			);
			$search["bastudents"] = $this->admissionm->searchstudentba($data);
			$this->load->view('admin/ugstudentview',$search);
		} else {
			# code...
		}
	}
}