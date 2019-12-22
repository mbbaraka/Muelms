<?php
  $main_title = "Login to Continue";
  include_once 'includes/head.php';
?>

<body>

  <div>

    <!-- Page Content -->
    <div id="page-content-wrapper">
           <div class="row justify-content-center py-5">
              <div class="card col-lg-3">
              <div class="card-header bg-light">
                <div class="card-title">
                  <h4 class="text-center text-sm-center">Welcome to Muelms</h4>
                </div>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" name="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" name="" class="form-control">
                  </div>
                  <div>
                    <a href="#" class="btn btn-primary float-right">Login</a>
                  </div>           
                </form>
                <small><a href="forgotPassword.php">Forgot Password?</a></small>
                <small></small>

              </div>
              <div class="card-footer bg-light">
                <span>Not registered? <a href="register.php">Click here</a></span>
              </div>
            </div>
        </div>
    </div>

    <!-- /#page-content-wrapper -->
</body>

</html>

