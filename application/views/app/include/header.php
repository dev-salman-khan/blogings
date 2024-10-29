
<?php 
// segment one path 
$page_url = $this->uri->segment(1);
	 
	// segment two path 
 	 $page_slug = $this->uri->segment(2);

	if ($page_url == 'blog-details') {
        $blog = $this->Curd_model->get_data_by_query("SELECT * FROM `blog` WHERE `blog_status`='1' AND `blog_slug`='$page_slug'");
        
        foreach ($blog as $blog) {
            $SEOTitle =  $blog['blog_title'];
            $SEOKeyword =  $blog['seo_keyword'];
            $SEODescription =  $blog['seo_description'];
        }
   
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (!empty($SEOTitle)) { echo ucwords($SEOTitle); } else { echo "The Prashat Kumar LTD";} ?></title>
        <meta name="keywords" content="<?php if (!empty($SEOKeyword)) { echo $SEOKeyword; } else { echo "The Prashat Kumar LTD";} ?>">
        <meta name="description" content="<?php if (!empty($SEODescription)) { echo $SEODescription; } else { echo "The Prashat Kumar LTD";} ?>">
    <!-- bootstrap css link  -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/assets/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?php echo base_url()?>public/assets/bootstrap/css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="<?php echo base_url()?>public/assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>public/assets/bootstrap/css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="<?php echo base_url()?>public/assets/bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="<?php echo base_url()?>public/assets/bootstrap/css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="<?php echo base_url()?>public/assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>public/assets/bootstrap/css/bootstrap-reboot.min.css.map">
    <link rel="stylesheet" href="<?php echo base_url()?>public/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>public/assets/bootstrap/css/bootstrap.css.map">
    <link rel="stylesheet" href="<?php echo base_url()?>public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>public/assets/bootstrap/css/bootstrap.min.css.map">
    <!-- font  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color: #f7f7fc;">
    <!-- header Start  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-white  ">
        <a class="navbar-brand  text-dark" href="#"><img src="<?php echo base_url()?>public/assets/images/1689925044571.jpg"  height="100px" width="100px" alt=""></a>
   
        <div class="navbar-collapse collapse font-bold  " id="navbarColor01"  >
        </div>
        <ul class="navbar-nav mr-auto p-2 " >
            <li class="nav-item active  ">
              <a class="nav-link active  text-dark" href="<?php echo base_url();?>">Home</a>
            </li>
            <li class="nav-item  ">
              <a class="nav-link text-dark" href="<?php echo base_url();?>blogs">Blogs</a>
            </li>
          </ul>
    </nav>
      <!-- header End  -->