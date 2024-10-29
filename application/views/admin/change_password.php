
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Managment System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Center form vertically */
    .login-container {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #f8f9fa;
    }
    /* Form styling */
    .login-form {
      width: 100%;
      max-width: 400px;
      padding: 30px;
      border-radius: 8px;
      background-color: white;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #495057;
    }
    .login-header {
      font-size: 1.5rem;
      margin-bottom: 1rem;
      text-align: center;
      color: #495057;
    }
  </style>
</head>
<body>
  <div class="login-container">

    <div class="login-form">
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
      <h2 class="login-header">Chanage Password</h2>
      <form action="<?php echo base_url()?>admin/login/update_password" name="change" id="login_form"
         method="POST">
        <!-- Username input -->
        <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="New Password" name="new_password" id="new_password" required>
        </div>
        <!-- Password input -->
        <div class="mb-3">
          <label for="password" class="form-label">Confirm Password</label>
          <input type="text" class="form-control" placeholder="Confirm New Password" name="confirmpassword" id="confirm_new_password" required>
         
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary w-100 mt-2">Change Password</button>
      </form>
     
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
