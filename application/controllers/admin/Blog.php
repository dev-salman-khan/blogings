<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class Blog extends CI_Controller {
	// Cant Login with Out The authentication If Logining page It will redirect to login page 
	public function __construct(){
		parent::__construct();
		$this->load->model('Curd_model');
		$this->load->library('upload'); 

		$admin_verification = $this->session->userdata('admin_details');
		if(empty($admin_verification)){
			$this->session->set_flashdata('errorMessage', 'Plz Login First');
			redirect(base_url().'admin/login');
		}
		
	}
    public function index(){
		// When Search box serch data Query 
		$search_data =$this->input->get('q');
		$params['search_data'] = $search_data;
		// model For the Blog 
		$blog = $this->Curd_model->get_search($params);
		// blog Query Passing In Array
        $data['blog'] = $blog;
        $data['search_data'] = $search_data;
        $this->load->view('admin/admin_include/header');
		$this->load->view('admin/admin_include/side_bar');
		$this->load->view('admin/blog_list',$data);
		$this->load->view('admin/admin_include/footer');
    }
    // private funtion for insrting multiple images 
    private function uploads_blog($reename){   
		$config = array();
		$config['file_name'] = $reename; 
		$config['upload_path'] = 'upload/blog/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['overwrite']     = FALSE;
		return $config;
	}
   
    // add blog 
    public function add_blog(){
        $this->load->view('admin/admin_include/header');
        $this->load->view('admin/admin_include/side_bar');
        $this->load->view('admin/add_blog');
        $this->load->view('admin/admin_include/footer');
    }
  
    public function insert_service(){
        $data['blog_title'] = $this->input->post('blog_title');
        $blog_image = $_FILES['blog_image']['name'];
		if($blog_image !== ""){
		  $imagePrefix = time(); 
		  $extension = explode(".", $blog_image);
		  $extension1 = end($extension);
		  $string1=$imagePrefix.'.'.$extension1;
		  $this->upload->initialize($this->uploads_blog($string1));
		  $this->upload->do_upload('blog_image');
		  $dataInfo[] = $this->upload->data();
		  $data['blog_image']=$string1;
		}
        $data['blog_status'] = 1 ;
        $service_to_lower = strtolower($data['blog_title']);
        $blog_slug = str_replace(' ','-',$service_to_lower);
        $data['blog_slug'] = $blog_slug;

        $data['blog_datetime'] =  date("M-d-Y");
        $data['blog_description'] = $this->input->post('blog_description');
        $blog_cover_image = $_FILES['blog_cover_image']['name'];
		if($blog_cover_image !== ""){
		  $imagePrefix = time(); 
		  $extension = explode(".", $blog_cover_image);
		  $extension1 = end($extension);
		  $string2= '1'.$imagePrefix.'.'.$extension1;
		  $this->upload->initialize($this->uploads_blog($string2));
		  $this->upload->do_upload('blog_cover_image');
		  $dataInfo[] = $this->upload->data();
		  $data['blog_cover_image']=$string2;
		}
        $data['blog_small_description'] = $this->input->post('blog_small_description');
        $data['seo_keyword'] = $this->input->post('seo_keyword');
        $data['seo_description'] = $this->input->post('seo_description');
       $this->Curd_model->insert_record('blog',$data);
       
		$this->session->set_flashdata('SuccessMessage','Blog Added  SuccessFully');
		redirect(base_url().'admin/blog/add_blog');
  
    }
	public function update_blog(){
		$blog_id = $this->input->post('blog_id');
        $blog_image = $_FILES['blog_image']['name'];
		if($blog_image !== ""){
			$data_img =$this->Curd_model->get_data_by_query("SELECT blog_id,blog_image FROM `blog` WHERE `blog_status`='1' AND `blog_id`='$blog_id'");
			$blog = $data_img[0]['blog_image'];
			$link="upload/blog/".$blog;
			unlink($link);
			$imagePrefix = time(); 
			$extension = explode(".", $blog_image);
			$extension1 = end($extension);
			$string1=$imagePrefix.'.'.$extension1;
			$this->upload->initialize($this->uploads_blog($string1));
			$this->upload->do_upload('blog_image');
			$dataInfo[] = $this->upload->data();
			$data['blog_image']=$string1;
		}
		$data['blog_title'] = $this->input->post('blog_title');
        $data['blog_status'] = 1 ;
        $service_to_lower = strtolower($data['blog_title']);
        $blog_slug = str_replace(' ','-',$service_to_lower);
        $data['blog_slug'] = $blog_slug;

        $data['blog_datetime'] =  date("M-d-Y");
        $data['blog_description'] = $this->input->post('blog_description');
        $blog_cover_image = $_FILES['blog_cover_image']['name'];
		if($blog_cover_image !== ""){
			$data_img =$this->Curd_model->get_data_by_query("SELECT blog_id,blog_cover_image FROM `blog` WHERE `blog_status`='1' AND `blog_id`='$blog_id'");
			$blog2 = $data_img[0]['blog_cover_image'];
			$link="upload/blog/".$blog2;
			unlink($link);
		  $imagePrefix = time(); 
		  $extension = explode(".", $blog_cover_image);
		  $extension1 = end($extension);
		  $string2= '1'.$imagePrefix.'.'.$extension1;
		  $this->upload->initialize($this->uploads_blog($string2));
		  $this->upload->do_upload('blog_cover_image');
		  $dataInfo[] = $this->upload->data();
		  $data['blog_cover_image']=$string2;
		}
        $data['blog_small_description'] = $this->input->post('blog_small_description');
        $data['seo_keyword'] = $this->input->post('seo_keyword');
        $data['seo_description'] = $this->input->post('seo_description');
		$where = 'blog_id';

		$this->Curd_model->edit_record('blog',$blog_id,$data,$where);
       
		$this->session->set_flashdata('SuccessMessage','Blog Updated  SuccessFully');
		redirect(base_url().'admin/blog');

	}
	public function delete_blog($id){
		$delete_blog = $this->Curd_model->get_data_by_query("SELECT * FROM 	blog WHERE blog_status = 1 AND blog_id ='$id'");
	
		$where = "blog_id";
		$data['blog_status'] = 0 ;
		if(empty($id)){
			$this->session->set_flashdata('errorMessage',' Data Not found');
			redirect(base_url().'admin/blog/index');
		}
		// $fetch_data['delete_blog'] = $delete_blog ;
		$detele_img = $delete_blog[0]['blog_image'];
		$link ="upload/blog/".$detele_img;
		if(file_exists($link)){
			unlink($link);
		}
		$detele_img2 = $delete_blog[0]['blog_cover_image'];
		$link2 ="upload/blog/".$detele_img2;
		if(file_exists($link2)){
			unlink($link2);
		}
		$this->Curd_model->edit_record('blog',$id,$data,$where);
		$this->session->set_flashdata('SuccessMessage','Blog Delete SuccessFully');
		redirect(base_url().'admin/blog/index');
		
	}
	public function popular_blog($id){
		// echo $id;
		$where = "blog_id";
		$data['blog_popular'] = 1 ;
		$this->Curd_model->edit_record('blog',$id,$data,$where);
		$this->session->set_flashdata('SuccessMessage','Blog  Add To Home Page  SuccessFully');
		redirect(base_url().'admin/blog');
	}
	public function remove_blog($id){
		$where = "blog_id";
		$data['blog_popular'] = 0 ;
		$this->Curd_model->edit_record('blog',$id,$data,$where);
		$this->session->set_flashdata('SuccessMessage','Blog Remove From Home Page SuccessFully');
		redirect(base_url().'admin/blog');
	}
}
