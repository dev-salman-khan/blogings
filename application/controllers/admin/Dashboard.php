<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	// Cant Login with Out The authentication If Logining page It will redirect to login page 
	public function __construct(){
		parent::__construct();
		$this->load->model('Curd_model');
		 

		$admin_verification = $this->session->userdata('admin_details');
		if(empty($admin_verification)){
			$this->session->set_flashdata('errorMessage', 'Plz Login First');
			redirect(base_url().'admin/login');
		}
		
	}
	public function index()
	{	


		$product_enquiry = $this->Curd_model->get_data_by_query("SELECT COUNT(*)FROM product_enquiry WHERE product_enquiry_status = 1 ");
		$product_enquiry3 = $this->Curd_model->get_data_by_query("SELECT COUNT(*)FROM blog WHERE blog_status = 1 ");
		$data['product_enquiry3'] = $product_enquiry3;
		$data['product_enquiry'] = $product_enquiry;
		$this->load->view('admin/admin_include/header');
		$this->load->view('admin/admin_include/side_bar');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/admin_include/footer');

	}
	
}
