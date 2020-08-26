<?php
/**
 * 
 */
// Require composer autoload
		
class Admissionfeesc extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admissionfeesm');
	}
	public function index()
	{
		$data["fees"] = $this->admissionfeesm->paydata();
		$this->load->view('admin/admissionfees', $data);
	}

	public function payfees()
	{
		$this->form_validation->set_rules('admformno', 'Admission Form Number', 'trim|required');
		$this->form_validation->set_rules('studname', 'Student Name', 'trim|required');
		$this->form_validation->set_rules('admdate', 'Admission Date', 'trim|required');
		$this->form_validation->set_rules('course', 'Select Course', 'trim|required');
		$this->form_validation->set_rules('courseyear', 'Course Year', 'trim|required');
		$this->form_validation->set_rules('studfees', 'Student Fees', 'trim|required');
		if ($this->form_validation->run()) {
			$data = array(
				"formno" => $this->input->post("admformno"),
				"studname" => $this->input->post("studname"),
				"admdate" => $this->input->post("admdate"),
				"course" => $this->input->post("course"),
				"courseyear" => $this->input->post("courseyear"),
				"admfee" => $this->input->post("studfees")
			);
		$this->admissionfeesm->payfeesm($data);
		redirect(base_url() . 'admissionfees','refresh');
		}
	}

	public function printpdf()
	{
		$id = $this->uri->segment(3);
		$data["printdata"] = $this->admissionfeesm->printdata($id);
		
		// Create an instance of the class:
		$mpdf = new \Mpdf\Mpdf();

		$html = $this->load->view('admin/feespdf', $data, TRUE);

		$mpdf->WriteHTML($html);

		$mpdf->Output();
	}
}