<?php
/**
 * 
 */
class Books extends CI_Controller
{
	public function index(){
		$this->load->view('admin/index');
	}

	public function addbooks(){
		
		$data["fetched"] = $this->adminm->showcategory();
		$data["fauther"] = $this->adminm->showauthor();
		$this->load->view('admin/addbooks', $data);
	}

	public function bookvalidate(){
		$this->form_validation->set_rules('bookname', 'Enter Book Name', 'trim|required');
		$this->form_validation->set_rules('category', 'Enter Book Name', 'trim|required');
		$this->form_validation->set_rules('author', 'Enter Book Name', 'trim|required');
		$this->form_validation->set_rules('isbn', 'Enter Book Name', 'trim|required');
		$this->form_validation->set_rules('qty', 'Enter Book Name', 'trim|required');
		$this->form_validation->set_rules('price', 'Enter Book Name', 'trim|required');

		if ($this->form_validation->run()) {
			$data = array(
				"BookName" => $this->input->post("bookname"),
				"CatId" => $this->input->post("category"),
				"AuthorId" => $this->input->post("author"),
				"ISBNNumber" => $this->input->post("isbn"),
				"Qty" => $this->input->post("qty"),
				"BookPrice" => $this->input->post("price")
			);
			
			$this->adminm->addbook($data);
			redirect(base_url() . 'books/addbooks/saved','refresh');
			//echo $this->input->post("bookname");
		} else {
			$this->addbooks();
		}
	}

	public function categoryvalidate(){

		$this->form_validation->set_rules('categoryname', 'Enter Category Name', 'trim|required');
		if ($this->form_validation->run()) {
			$data = array("CategoryName" => $this->input->post("categoryname"), "Status" => $this->input->post("cstatus") );
			
			$this->adminm->addcategory($data);
			redirect(base_url() . 'addbook','refresh');
		} else {
			$this->addbooks();
		}
	}

	public function authorvalidate(){
		$this->form_validation->set_rules('authorname', 'Enter Author Name', 'trim|required');
		if ($this->form_validation->run()) {
			$data = array("AuthorName" => $this->input->post("authorname"));
			
			$this->adminm->addauthor($data);
			redirect(base_url() . 'addbook','refresh');
		} else {
			$this->addbooks();
		}
	}

	public function allbooks()
	{
		
		$data["books"] = $this->adminm->showbook();
		$this->load->view('admin/allbooks', $data);
	}

	public function bookedit()
	{
		$id = $this->uri->segment(3);
		
		$data["alldata"] = $this->adminm->updatebook($id);
		$data["cat"] = $this->adminm->showcategory();
		$data["authe"] = $this->adminm->showauthor();
		$this->load->view('admin/update', $data);
	}

	public function bookupdate()
	{
		$id = $this->uri->segment(3);
		$this->form_validation->set_rules('bookname', 'Book Name', 'trim|required');
		$this->form_validation->set_rules('categoryname', 'Select Category', 'trim|required');
		$this->form_validation->set_rules('authorname', 'Select Author', 'trim|required');
		$this->form_validation->set_rules('isbn', 'ISBN Number', 'trim|required');
		$this->form_validation->set_rules('qty', 'Qunatity', 'trim|required');
		$this->form_validation->set_rules('price', 'Price', 'trim|required');
		if ($this->form_validation->run()) {
			$data = array(
 				"BookName" => $this->input->post("bookname"),
 				"CatId" => $this->input->post("categoryname"),
 				"AuthorId" => $this->input->post("authorname"),
 				"ISBNNumber" => $this->input->post("isbn"),
 				"Qty" => $this->input->post("qty"),
 				"BookPrice" => $this->input->post("price")
			);
			
			$this->adminm->saveupdate($data,$id);
			redirect(base_url() . 'allbooks','refresh');

		} else {
			$this->allbooks();
		}
	}

	public function deletebook()
	{
		$id = $this->uri->segment(3);
		
		$this->adminm->deletebook($id);
		redirect(base_url() . 'allbooks','refresh');
	}

}

