<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->model('Curd_model');
    }
	public function index()
	{	
		$blog = $this->Curd_model->get_data_by_query("SELECT * FROM blog WHERE blog_status = 1 AND blog_popular = 1 ORDER BY blog_id DESC");
		
        $data['blog'] = $blog;
      
		$this->load->view('app/include/header');
		$this->load->view('app/index',$data);
		$this->load->view('app/include/footer');

	}
	public function blog_details(){
		$blog_slug = $this->uri->segment(2);
		// fetching data by slug 
		$blog_details = $this->Curd_model->get_data_by_query("SELECT * FROM blog WHERE blog_status = 1 AND blog_slug = '$blog_slug'");
		// fecthing data for recent File
		$blog_listing = $this->Curd_model->get_data_by_query("SELECT * FROM blog WHERE blog_status = 1 ORDER BY blog_id DESC LIMIT 5");
		$data['blog_details'] = $blog_details;
		$data['blog_listing'] = $blog_listing;
		$this->load->view('app/include/header');
		$this->load->view('app/blog_details',$data);
		$this->load->view('app/include/footer');
	}
	public function get_services(){
		$service_slug = $this->input->post('service_slug');
		$product_enquiry_name = $this->input->post('product_enquiry_name');
		$product_enquiry_phone = $this->input->post('product_enquiry_phone');
		$product_enquiry_details = $this->input->post('product_enquiry_details');
		$product_enquiry_service_id = $this->input->post('product_enquiry_service_id');
		$product_enquiry_email = $this->input->post('product_enquiry_email');
		$data['product_enquiry_name']=$product_enquiry_name;
		$data['product_enquiry_phone']=$product_enquiry_phone;
		$data['product_enquiry_details']=$product_enquiry_details;
		$data['product_enquiry_service_id']=$product_enquiry_service_id;
		$data['product_enquiry_email']=$product_enquiry_email;
		
		$data['product_enquiry_status']= 1;
		$data['product_enquiry_date']=date('d-m-Y h:i:s');
		$insert = $this->Curd_model->insert_record('product_enquiry',$data);
			// For Sending Email Comment This Redirect Pageb And Session 
			// for Commets strt 
			$this->session->set_flashdata('SuccessMessage', 'Data  Send Successfully!!! We Will Contact You Shortly.');
			redirect(base_url().'blog-details/'.$service_slug); 
			// for Commets End 
	
			$product_enquiry = $this->Curd_model->get_data_by_query(" SELECT * FROM `product_enquiry`AS pr LEFT JOIN blog AS sa ON sa.blog_id = pr.product_enquiry_service_id WHERE pr.`product_enquiry_status` = 1 AND sa.blog_status = 1 AND pr.product_enquiry_id ='$product_enquiry_service_id'");
			$blog_name = $product_enquiry[0]['blog_title'];
		
			$to = "salmancode79@gmail.com";
				$subject = "Enquiry Mail";
				$message = "
					<html>
						<head>
							<title>Service Enquiry </title>
						</head>
						<body>
							<p>Service Enquiry </p>
							<table border='1' width='100%'>
								<tr>
									<th>Firstname</th>
									<td>" . $product_enquiry_name . "</td>
								</tr>
								<tr>
									<th>Email</th>
									<td>" . $product_enquiry_email . "</td>
								</tr>
								<tr>
									<th>Blog  Name</th>
									<td>" . $blog_name  . "</td>
								</tr>
								<tr>
									<th>Phone No</th>
									<td>" . $product_enquiry_phone . "</td>
								</tr>
								<tr>
									<th>Details of  Service Enquiry</th>
									<td>" . $product_enquiry_details . "</td>
								</tr>
							</table>
						</body>
					</html>
				";
				// Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				if (mail($to, $subject, $message, $headers)) {
					$this->session->set_flashdata('SuccessMessage', 'Data  Send Successfully!!! We Will Contact You Shortly.');
					redirect(base_url().'blog-details/'.$service_slug); 
					
				}
				else {
				
					$this->session->set_flashdata('errorMessage', 'Data Not Send');
					redirect(base_url().'blog-details/'.$service_slug); 
					
				}	
	}
	public function blogs(){
		// When Search box serch data Query 
		$search_data =$this->input->get('q');
		$params['search_data'] = $search_data;
		// model For the Blog 
		$blog = $this->Curd_model->get_search($params);
		// blog Query Passing In Array
        $data['blog'] = $blog;
        $data['search_data'] = $search_data;
		$this->load->view('app/include/header');
		$this->load->view('app/blogs',$data);
		$this->load->view('app/include/footer');
	}
	
	}

	
    

