<?php
  
  $main_title = "Forgot Password";
  include_once ('includes/head.php');
  include_once ('includes/styles.php');

?>

<body>
  <div class="row justify-content-center py-5">
    <div class="col-lg-4">
      <div class="card border-primary">
        <div class="card-header bg-primary">
          <h5 class="card-title">Forgot Password</h5>
        </div>
        <div class="card-body">
          <strong>Enter Registered Email below to reset password</strong>
          <br><br>
          <form>
            <div class="form-group">
              <input type="text" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <button class="btn btn-primary container">Submit</button>
          </form>
        </div>
        <div class="card-footer bg-primary">
          <span>Need an Account? </span><a href="register.php" class="text-light">Register</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
