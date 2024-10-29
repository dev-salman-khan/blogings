<section class="content">

    <div class="container">
        <div class="card">
            <div class="card-header">
                View Blog Enquiry
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
                    <?php 
                        foreach ($product_enquiry as $enquiry_list_view) {
                            # code...
                        }
                        ?>
                    <div class="row">
                        
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">View blog Enquiry</h3>
                                </div>
                                <div class="box-header with-border">

                                    <div class="box-body">
                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="username">blog Name</label>
                                                <input type="text" class="form-control" name="Enquiry_title"
                                                    value="<?php echo $enquiry_list_view['blog_title']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="username">Person Name</label>
                                                <input type="text" class="form-control" name="Enquiry_title"
                                                    value="<?php echo $enquiry_list_view['product_enquiry_name']; ?>"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">Person Email<span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $enquiry_list_view['product_enquiry_email']; ?>"
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">Person Phone Number<span
                                                        class="text-danger">*</span> </label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $enquiry_list_view['product_enquiry_phone']; ?>"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">Blog Image </label><br>

                                                <img src='<?php echo base_url() ."upload/blog/" . $enquiry_list_view['blog_image']; ?>'
                                                    alt="" width="150px" height="150px">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Person description </label>
                                                <textarea name="Enquiry_description" cols="8" rows="3"
                                                    class="form-control"
                                                    readonly><?php echo $enquiry_list_view['product_enquiry_details']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-5">
                                            <div class="form-group">
                                                <a target="_blank"
                                                    href="mailto:'<?php echo $enquiry_list_view['product_enquiry_email']; ?>'"
                                                    class="btn btn-success"><i class="fa fa-reply"></i> Replay To
                                                    Mail</a>
                                                <a target="_blank"
                                                    href="tel:'<?php echo $enquiry_list_view['product_enquiry_phone']; ?>'"
                                                    class="btn btn-danger" style="float:right;"><i
                                                        class="fa fa-reply"></i> Call To
                                                    Person</a>

                                            </div>
                                        </div>

                                    </div>

                     
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>