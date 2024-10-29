 <!-- main section strt  -->
 <main class="container">
          
            <!-- blog strt  -->
            <div class="row mt-5 ">
                <div class="col-md-12 float text-center mb-5 ">
                    <h1  style="font-weight:bold;"> Blogs </h1>
                    <nav class="navbar " style="float:right;">
                            <div class="container-fluid">
                                <form class="d-flex " role="search" method="GET" action="">
                                <input class="form-control me-2 " type="text" placeholder="Search Blog Name" name="q" value="<?php echo $search_data;?>" aria-label="Search">
                                <button class="btn btn-outline-info"   type="submit">Search</button>
                                </form>
                            </div>
                        </nav>
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
