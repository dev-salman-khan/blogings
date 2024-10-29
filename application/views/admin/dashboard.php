<section class="content">

    <div class="container">
        <div class="card">
            <div class="card-header">
                Dashboard
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
                <div class="row">


                    <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-danger p-2 text-center rounded">
                    <div class="inner text-white">
                        <p>Total Blogs</p>
                        <h3>
                           
                            <div class="icon">
                                <i class="fa fa-book" style="font-size:20px;"></i>
                            </div>
                            <?php echo $product_enquiry3[0]['COUNT(*)'];?>
                        </h3>
                    </div>
                    <a href="<?php echo base_url() ?>admin/blog" class="btn btn-success">More info
                        <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-primary p-2 text-center rounded">
                    <div class="inner text-white">
                        <p>Total Blogs Enquiry</p>
                        <h3>
                           
                            <div class="icon">
                                <i class="fa fa-book" style="font-size:20px;"></i>
                            </div>
                            <?php echo $product_enquiry[0]['COUNT(*)'];?>
                        </h3>
                    </div>
                    <a href="<?php echo base_url() ?>admin/project_enquiry" class="btn btn-success">More info
                        <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            

                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
</section>