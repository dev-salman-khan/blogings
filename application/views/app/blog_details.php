       <!-- main section strt  -->
       <main class="container">
           <h1 class="mt-3" style="font-weight:bold;"><?php echo $blog_details[0]['blog_title']?></h1>
            <div class="row mt-5">

                <div class="col-md-8 col-lg-8 col-sm-12 justify-content ">
                <img  src="<?php echo base_url().'upload/blog/'.$blog_details[0]['blog_cover_image']?>" alt="Card image cap"  class="img-fluid">
                    <h1 class="mt-3"><?php echo $blog_details[0]['blog_title']?></h1>
                    <p><?php echo $blog_details[0]['blog_description']?></p>
                   
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <h2>Recent Blogs</h2>
                    <?php
                    foreach ($blog_listing as $blog_list) {
                    ?>
                    <div class="p-2">

                    <a href="<?php echo base_url()?>blog-details/<?php echo $blog_list['blog_slug'] ?>">  <img  src="<?php echo base_url().'upload/blog/'.$blog_list['blog_image']?>" alt="Card image cap"  height="100px" width="200px"></a>
                        <span class="mt-3"><?php echo $blog_list['blog_title']?></span> 
                    </div>
                <?php }?>
                </div>
            </div>
            <div class="contanier bg-white p-5 rounded">
                <h3>Leave a Commets</h3>
                <!-- <p>Your email address will not be published. Required fields are marked * </p> -->
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

                            $messages = $this->session->flashdata('SuccessMessage');
                            ?>
                        <div class="alert alert-success">
                            <strong>Action Success! </strong> <?php echo $messages;?>
                        </div>
                        <?php
                        }
                    }
                ?>
                    </div>
                </div>
                <form action="<?php echo base_url();?>home/get_services" method="POST">
                    <div class="row">
                        <div class="col-lg-6">
                            <label>Name</label>
                            <input type="text" name="product_enquiry_name" class="form-control" placeholder="Enter The Name">
                        </div>
                        <div class="col-lg-6">
                            <label>Phone Number</label>
                            <input type="text" name="product_enquiry_phone" class="form-control" placeholder="Enter Phone Number">
                        </div>
                        <div class="col-lg-6">
                            <label>Email</label>
                            <input type="email" name="product_enquiry_email"  class="form-control" placeholder=" Enter The Email Id">
                        </div>
                        <div class="col-lg-6">
                            <label>Blog Name</label>
                            <input type="text" value="<?php echo $blog_details[0]['blog_title']?>"
                                placeholder="Blog Name" class="form-control">
                            <input type="hidden" name="product_enquiry_service_id"
                                value="<?php echo $blog_details[0]['blog_id']?>">
                            <input type="hidden" name="service_slug"
                                value="<?php echo $blog_details[0]['blog_slug']?>">
                        </div>
                        <div class="col-lg-12">
                            <label>Message</label>
                            <textarea name="product_enquiry_details" class="form-control" placeholder="Enter The Message"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <div class=" text-center">
                                <button type="submit" class="btn btn-info mt-2">Submit Now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
          
          
        </main>
        <!-- main section end  -->