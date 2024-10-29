<div class="container">
    <div class="card">
        <div class="card-header">
             <span> Blog Enquiry List</span>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    if (!empty($this->session->flashdata('errorMessage'))) {
                            $message = $this->session->flashdata('errorMessage');
                        ?>
                    <div class="alert alert-danger">
                        <strong>Action Denied! </strong> <?php echo $message;?>
                    </div>
                    <?php
                        } else{
                        if (!empty($this->session->flashdata('SuccessMessage'))) {

                            $messages_sucess = $this->session->flashdata('SuccessMessage');
                            ?>
                    <div class="alert alert-success">
                        <strong>Action Success! </strong> <?php echo $messages_sucess;?>
                    </div>
                    <?php
                        }
                    }
                ?>
                </div>
            </div>

            <div class="box box-primary" style="margin-top:25px;">
                <section class="content">
                    <div class="row">
                        
                    <div class="box-header with-border" style="margin-bottom:20px;">
                                        <h3 class="box-title"> Blog Enquiry</h3>
                                    </div>
                        <nav class="navbar ">
                            <div class="container-fluid">
                           
                            </div>
                        </nav>
                        <div class="col-md-12">
                        
                        <div class="table-responsive">
                        <table id="University" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>S NO</th>
                                    <th>Blog Enquiry Person Name</th>
                                    <th>Blog Image</th>
                                    <th>Blog Enquiry Name</th>
                                    <th>Blog Enquiry Email</th>
                                    <th>Blog Enquiry Mobile Number</th>
                               
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                        $i = 1;
                                        foreach($product_enquiry as $product_list) {
                                        ?>
                                <tr>
                                    <td><?php echo "$i"; ?></td>
                                    <td><?php echo ucwords($product_list['product_enquiry_name']);?></td>
                                    <td><img
                                    src='<?php echo base_url() ."upload/blog/" . $product_list['blog_image']; ?>'
                                    alt="" width="150px" height="150px"></td>
                                    <td><?php echo $product_list['blog_title']?></td>
                                    <td><?php echo $product_list['product_enquiry_email']?></td>
                                    <td><?php echo $product_list['product_enquiry_phone']?></td>

                                   
                                 
                                    <td><a href="<?php echo base_url().'admin/project_enquiry/view_product_enquiry/'.$product_list['product_enquiry_id'];?>">
                                                <button type="button" class="btn btn-primary"  onclick="if (!confirm('Are you sure want to View This blog Enquiry ?')) return false;"><i class="fa fa-eye"></i>&nbsp;View</button>
                                            </a>|<a href="<?php echo base_url().'admin/project_enquiry/delete_view/'.$product_list['product_enquiry_id'];?>">
                                                <button onclick="if (!confirm('Are you sure want to delete blog Enquiry ?')) return false;" type="button"
                                                    class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;Delete</button></a>
                                                </td> 
                                </tr>
                                <?php 
					                        $i++; }
                                         ?>

                            </tbody>
                        </table>
                    </div>
            </section>
        </div>
    </div>
</div>