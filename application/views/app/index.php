
       <!-- main section strt  -->
       <main class="container">
            <div class="row mt-5">
                <div class="col-md-6 col-lg-6 col-sm-6 justify-content mt-5">
                    <h1 class="mt-3"  style="font-weight:bold;">Who Is Prashant Kumar LTD </h1>
                    <p>Prashant Kumar LTD empowers organizations with feature-rich, user-friendly systems that streamline operations and drive engagement in an increasingly digital world.</p>
                    <button type="button" class="btn btn-info" >Contact Us</button>
                    <button type="button" class="btn btn-dark">Know More</button>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <img src="<?php echo base_url()?>public/assets/images/banners.jpg" class="img-fluid" style="border-radius: 100%;" alt="">
                </div>
            </div>
            <!-- blog strt  -->
            <div class="row mt-5 ">
                <div class="col-md-12 float text-center mb-5 ">
                    <h1  style="font-weight:bold;">Popular Blogs </h1>
            </div>
            <?php
                  if(!empty($blog)){
                    
                    foreach ($blog as $blog_list) {
            ?>
                <div class="col-md-6 col-lg-4 col-sm-12 p-2">
                    <div class="card" >
                    <a href="<?php echo base_url()?>blog-details/<?php echo $blog_list['blog_slug'] ?>"> <img class="card-img-top" src="<?php echo base_url().'upload/blog/'.$blog_list['blog_image']?>" alt="Card image cap"></a>
                        <div class="card-body">
                          <h4 class="" style="font-weight:bold;"><?php echo $blog_list['blog_title']?></h4>
                          <p class="float-end"><span class="post-author">By Admin</span> &nbsp;<span class="post-date" style="float:right;"><i class="fa fa-calendar"></i>&nbsp;04-Feb-24</span></p>
                          <p class="card-text"><?php echo $blog_list['blog_small_description']?></p>
                          <a href="<?php echo base_url()?>blog-details/<?php echo $blog_list['blog_slug'] ?>" class="btn btn-info">View More &nbsp;<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                      </div>
                </div>
                <?php } }?>
                
            </div>
            <!-- blog end  -->
          
        </main>
        <!-- main section end  -->
