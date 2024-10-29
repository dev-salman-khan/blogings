<?php 
$admin = $this->session->userdata('admin_details');

?>
<div
      class="offcanvas offcanvas-start "
      tabindex="-1"
      id="offcanvasExample"
      aria-labelledby="offcanvasExampleLabel" style="background-color:#17a2b8;"
    >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel" style="font-weight:bold;">Blog Managment System</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body">
     
        <a href="<?php echo base_url()?>admin/dashboard" class="btn btn-white col-12"> <i class="fa fa-dashboard">&nbsp;</i>Dashboard </a>

        <div class="dropdown">
          <button
            class="btn btn-white dropdown-toggle col-12"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fa fa-book"></i> Manager Blog
          </button>
          <ul class="dropdown-menu col-12">
            <li><a class="dropdown-item" href="<?php echo base_url()?>admin/blog/add_blog">Add Blog</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url()?>admin/blog">Blog List</a></li>
          </ul>
        </div>
        <a href="<?php echo base_url()?>admin/project_enquiry" class="btn btn-white col-12"> <i class="fa fa-books">&nbsp;</i>Blog Enquiry </a>

       
          <div class="dropdown">
            <button
              class="btn btn-white dropdown-toggle col-12"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <i class="fa fa-user"></i> <?php echo ucwords($admin['username']);?> 
            </button>
            <ul class="dropdown-menu col-12">
              <li><a class="dropdown-item" href="<?php echo base_url()?>admin/login/change_password">Change Password</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url()?>admin/login/logout">Logout</a></li>
            </ul>
          </div>
      </div>
    </div>
    <!-- main  -->