<div class="container">
    <div class="card">
        <div class="card-header">
             <span> Blog List</span>
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
                                        <h3 class="box-title">Blog List</h3>
                                    </div>
                        <nav class="navbar ">
                            <div class="container-fluid">
                                <form class="d-flex" role="search" method="GET" action="">
                                <input class="form-control me-2" type="text" placeholder="Search Blog Name" name="q" value="<?php echo $search_data;?>" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </nav>
                        <div class="col-md-12">
                        
                                    <div class="table-responsive">
                                        <table id="tabless" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>S No</th>
                                                    <th> Blog Title</th>
                                                    <th>Blog Image</th>
                                                    <th>Blog Cover Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if(!empty($blog)){
                                                                $i = 1;
                                                                foreach ($blog as $blog_list) {
                                                            ?>
                                                <tr>
                                                    <td><?php echo $i;?>
                                                    <td><?php echo $blog_list['blog_title'];  ?>
                                                        <a href="<?php echo base_url();?>admin/blog/popular_blog/<?php echo $blog_list['blog_id'];?>"
                                                            onclick="if (!confirm('Are you sure want to Add This Blog On Home Page ?')) return false;"><small
                                                                class="bg-primary text-white p-1 rounded "><i
                                                                    class="fa fa-home">&nbsp;</i>Do Popular </small></a>  &nbsp;|
                                                        <a href="<?php echo base_url();?>admin/blog/remove_blog/<?php echo $blog_list['blog_id'];?>"
                                                            onclick="if (!confirm('Are you sure want to Remove This Blog From Home Page ?')) return false;"><small
                                                                class="bg-primary text-white p-1 rounded "><i
                                                                    class="fa fa-home">&nbsp;</i> Remove Popular</small></a>
                                                    </td>
                                                    <td> <img
                                                            src='<?php echo base_url() ."upload/blog/" . $blog_list['blog_image']; ?>'
                                                            alt="" width="150px" height="150px"></td>
                                                    <td> <img
                                                            src='<?php echo base_url() ."upload/blog/" . $blog_list['blog_cover_image']; ?>'
                                                            alt="" width="150px" height="150px"></td>

                                                    <td> <a data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal_<?php echo $blog_list['blog_id'];?>">
                                                            <button type="button" class="btn btn-success"
                                                                onclick="if (!confirm('Are you sure want to Edit This Blog ?')) return false;"><i
                                                                    class="fa fa-edit"></i>&nbsp;Edit</button>
                                                        </a>|<a
                                                            href="<?php echo base_url()?>admin/blog/delete_blog/<?php echo $blog_list['blog_id'];?>">
                                                            <button type="button"
                                                                onclick="if (!confirm('Are you sure want to Delete This Blog ?')) return false;"
                                                                class="btn btn-danger"><i
                                                                    class="fa fa-trash"></i>&nbsp;Delete</button></a>
                                                    </td>
                                                </tr>
                                                <!-- model strt  -->
                                                <div class="modal fade"
                                                    id="exampleModal_<?php echo $blog_list['blog_id'];?>" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">

                                                                <h3 class="modal-title" id="exampleModalLabel">Edit Blog
                                                                </h3>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form role="form" enctype="multipart/form-data"
                                                                action="<?php echo base_url();?>admin/blog/update_blog"
                                                                method="POST">
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Blog
                                                                                    Title<span
                                                                                        class="text-danger">*</span>
                                                                                </label>
                                                                                <input type="hidden" name="blog_id"
                                                                                    value="<?php echo $blog_list['blog_id'];?>">
                                                                                <input type="text" class="form-control"
                                                                                    name="blog_title" required
                                                                                    placeholder="Enter The Blog Title"
                                                                                    value="<?php echo $blog_list['blog_title'];?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Blog
                                                                                    Image<span
                                                                                        class="text-danger">*</span>
                                                                                    <small style="color:blue">[For
                                                                                        Best View Of image
                                                                                        Width="400px"
                                                                                        Height="243px"]
                                                                                    </small></label>
                                                                                <input type="file" class="form-control"
                                                                                    name="blog_image" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Blog Cover
                                                                                    Image<span
                                                                                        class="text-danger">*</span>
                                                                                    <small style="color:blue">[For
                                                                                        Best View Of image
                                                                                        Width="920px"
                                                                                        Height="513px"]
                                                                                    </small></label>
                                                                                <input type="file" class="form-control"
                                                                                    name="blog_cover_image"
                                                                                    placeholder="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Blog
                                                                                    Image<span
                                                                                        class="text-danger">*</span><br>
                                                                                    <img src='<?php echo base_url() ."upload/blog/" . $blog_list['blog_image']; ?>'
                                                                                        alt="" width="150px"
                                                                                        height="150px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Blog Cover
                                                                                    Image<span
                                                                                        class="text-danger">*</span><br>
                                                                                    <img src='<?php echo base_url() ."upload/blog/" . $blog_list['blog_cover_image']; ?>'
                                                                                        alt="" width="150px"
                                                                                        height="150px">

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="password">Blog
                                                                                    Small Description<span
                                                                                        class="text-danger">*</span>
                                                                                    <small style="color:blue">[For
                                                                                        Best View Of For
                                                                                        small description
                                                                                        character must be
                                                                                        150 to
                                                                                        180]
                                                                                    </small></label>
                                                                                <textarea name="blog_small_description"
                                                                                    placeholdder=" " cols="8" rows="3"
                                                                                    class="form-control"
                                                                                    required><?php echo $blog_list['blog_small_description'];?></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="about university">
                                                                                    Blog Description
                                                                                </label>
                                                                                <textarea name="blog_description"
                                                                                    id="about_university"
                                                                                    placeholdder="" cols="8" rows="6"
                                                                                    class="form-control"><?php echo $blog_list['blog_description'];?></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <h1> Blog SEO</h1>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="password">SEO
                                                                                    Keyword<span
                                                                                        class="text-danger">*</span>
                                                                                </label>
                                                                                <textarea name="seo_keyword"
                                                                                    placeholdder="SEO Keyword " cols="8"
                                                                                    rows="4" class="form-control"
                                                                                    required><?php echo $blog_list['seo_keyword'];?></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="password">SEO
                                                                                    Description<span
                                                                                        class="text-danger">*</span>
                                                                                </label>
                                                                                <textarea name="seo_description"
                                                                                    placeholdder="SEO Description "
                                                                                    cols="8" rows="4"
                                                                                    class="form-control"
                                                                                    required><?php echo $blog_list['seo_description'];?></textarea>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-primary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit" name="submit"
                                                                        class="btn btn-warning">Edit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>
                                    <?php
                                                            $i++;
                                                            }
                                                        }
                                                            else{
                                                                echo "Data Not Found";
                                                            }
                                                     ?>
                                    </table>
                             
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
</div>