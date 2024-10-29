<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_modal extends CI_Model {
	public function getByUsername($admin_email)
	{
		$this->db->where('admin_email',$admin_email);
		$admin = $this->db->get('admin')->row_array();
		return $admin;
	}
}
