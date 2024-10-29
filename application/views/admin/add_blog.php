<section class="content">

    <div class="container">
        <div class="card">
            <div class="card-header">
                Manager Blog
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
                    <div class="col-md-12">
                        <div class="box box-primary" style="margin-top:25px;">
                            <div class="box-header with-border" style="margin-bottom:20px;">
                                <h3 class="box-title">Add Blog</h3>
                            </div>
                            <form role="form" method="POST" action="<?php echo base_url()?>admin/blog/insert_service" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="row">
                                        <!-- title  -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Blog Title<span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="blog_title" required
                                                    placeholder="Blog Title">
                                            </div>
                                        </div>
                                        <!-- blog image  -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Blog Image<span class="text-danger">*</span>
                                                    <small style="color:blue">[For Best View Of Banner Width="400px"
                                                        Height="243px"]
                                                    </small></label>
                                                <input type="file" class="form-control" name="blog_image" required
                                                    placeholder=" ">
                                            </div>
                                        </div>
                                        <!-- blog cover image  -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Blog Cover Image<span class="text-danger">*</span>
                                                    <small style="color:blue">[For Best View Of Banner Width="920px"
                                                        Height="513px"]
                                                    </small></label>
                                                <input type="file" class="form-control" name="blog_cover_image" required
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <!-- blog small description  -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="password">Blog Small Description<span
                                                        class="text-danger">*</span> <small style="color:blue">[For
                                                        Best View Of For small description character must be 150 to
                                                        180]
                                                    </small></label>
                                                <textarea name="blog_small_description" value="" placeholdder=" "
                                                    cols="8" rows="3" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <!-- bllog description  -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="about university"> Blog Description </label>
                                                <textarea name="blog_description" id="about_university" placeholdder=""
                                                    cols="8" rows="6" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <!-- blog seo  -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h1> Blog SEO</h1>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="password">SEO Keyword<span class="text-danger">*</span>
                                                </label>
                                                <textarea name="seo_keyword" value="" placeholdder="SEO Keyword "
                                                    cols="8" rows="4" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="password">SEO Description<span class="text-danger">*</span>
                                                </label>
                                                <textarea name="seo_description" value=""
                                                    placeholdder="SEO Description " cols="8" rows="4"
                                                    class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-5 mb-5 text-center">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary" name="submit">Add
                                                    Blog</button>
                                            </div>
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>