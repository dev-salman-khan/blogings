
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class project_enquiry extends CI_Controller {
  // Cant Login with Out The authentication If Logining page It will redirect to login page 
	public function __construct(){
		parent::__construct();
		$admin_verification = $this->session->userdata('admin_details');
		if(empty($admin_verification)){
			$this->session->set_flashdata('errorMessage', 'Plz Login First');
			redirect(base_url().'admin/login');
		}
       $this->load->model('Curd_model');
	}

	public function index(){
    
   
        $product_enquiry = $this->Curd_model->get_data_by_query("SELECT * FROM `product_enquiry`AS pr LEFT JOIN blog AS sa ON sa.blog_id = pr.product_enquiry_service_id WHERE pr.`product_enquiry_status` = 1 AND sa.blog_status = 1 ORDER BY product_enquiry_id DESC");
        $contact_data['product_enquiry'] = $product_enquiry;
   
        $this->load->view('admin/admin_include/header');
		$this->load->view('admin/admin_include/side_bar');
		$this->load->view('admin/project_enquiry',$contact_data);
		$this->load->view('admin/admin_include/footer');
	}
    public function view_product_enquiry($id){
        $product_enquiry = $this->Curd_model->get_data_by_query(" SELECT * FROM `product_enquiry`AS pr LEFT JOIN blog AS sa ON sa.blog_id = pr.product_enquiry_service_id WHERE pr.`product_enquiry_status` = 1 AND sa.blog_status = 1 AND pr.product_enquiry_id ='$id'");
        $contact_data['product_enquiry'] = $product_enquiry;
   
        $this->load->view('admin/admin_include/header');
		$this->load->view('admin/admin_include/side_bar');
		$this->load->view('admin/view_product_enquiry',$contact_data);
		$this->load->view('admin/admin_include/footer');
    }
    public function delete_view($my_work_id){
       
        $my_works = $this->Curd_model->get_data_by_query("SELECT * FROM `product_enquiry`AS pr LEFT JOIN blog AS sa ON sa.blog_id = pr.product_enquiry_service_id WHERE pr.`product_enquiry_status` = 1 AND sa.blog_status = 1");
        $where = 'product_enquiry_id';
        $data['product_enquiry_status'] = 0;

      $this->Curd_model->edit_record('product_enquiry',$my_work_id,$data,$where);
      $this->session->set_flashdata('SuccessMessage','Enquiry Delete SuccessFully');
                 redirect(base_url().'admin/project_enquiry/index');
      

    }
}
