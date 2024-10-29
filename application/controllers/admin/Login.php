<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$this->load->library('form_validation');
		
		$this->load->view('admin/login');
	}
	public function authentication(){
		$this->load->library('form_validation');
		$this->load->model('Admin_modal');
		
			$admin_email = $this->input->post('admin_email');
			// print_r($admin_password);
			$admin = $this->Admin_modal->getByUsername($admin_email);
			if(!empty($admin)){
				$admin_password = $this->input->post('admin_password');
				$hash_password = md5($admin_password);
				if($hash_password == $admin['admin_password']){
					$admin_details['admin_id'] = $admin['admin_id'];
					$admin_details['username'] = $admin['admin_username'];
					$this->session->set_userdata('admin_details', $admin_details);
					$this->session->set_flashdata('SuccessMessage', 'Your are Login Sucessfully');
					redirect(base_url().'admin/dashboard');

				} else {
					$this->session->set_flashdata('errorMessage','Password Is Inncorrect');
					redirect(base_url().'admin/login');
				}
			} else {
				$this->session->set_flashdata('errorMessage','Email Or Password Is Inncorrect');
				redirect(base_url().'admin/login');
			}

	}
	public function change_password(){
        $admin_verification = $this->session->userdata('admin_details');
		if(empty($admin_verification)){
			$this->session->set_flashdata('errorMessage', 'Plz Login First');
			redirect(base_url().'admin/login');
		}
        else {
          
		    $this->load->view('admin/change_password'); 
	
        }
    }
	
    // code for update admin password
    public function update_password(){
		$this->load->model('Curd_model');
      
            // getting the input value
            $password = $this->input->post('new_password');
            $confirmpassword = $this->input->post('confirmpassword');
			if($password == $confirmpassword){
			
            // convert the password into hash value
            $md5password = md5($password);
            $admin_value = $this->session->userdata('admin_details'); // fetching the session value
            // added value we need to update for password
            $admin_id = $admin_value['admin_id'];
            $data['admin_password'] = $md5password;
            $where='admin_id';
            $update_password=$this->Curd_model->edit_record('admin',$admin_id,$data,$where);
            if ($update_password) {
                $this->session->unset_userdata('admin_details');
                $this->session->set_flashdata('SuccessMessage','Password Update Successfully Login With New Password');
                redirect('admin/login','refresh');
            }
            else {
                $this->session->set_flashdata('errorMessage','Password Was Not Update Successfully');
                redirect('admin/login/change_password','refresh');
            }
		}
		else {
			$this->session->set_flashdata('errorMessage','Password Does not Match');
			redirect('admin/login/change_password','refresh');
		}
		

        }
        
    
	function logout(){
		$this->session->set_flashdata('SuccessMessage', 'You are Logout Sucessfully');
		$this->session->unset_userdata('admin_details');
		

		redirect(base_url().'admin/login/index');
	}
	
}