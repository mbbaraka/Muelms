<?php
  
  $main_title = "Register New Account";

  include_once ('includes/head.php');
  include_once ('includes/sessions.php');


?>

<body>

  <div>

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="row justify-content-center py-5">
        <div class="col-lg-8">
          <div class="card border-primary">
          <div class="card-header bg-primary">
            <div class="card-title">
              <h4 class="text-center text-sm-center">Register for a new account</h4>
            </div>
          </div>
          <div class="card-body">
            <div class="pt-5">
              <?php
                 echo errorMessage();
                 echo successMessage();
              ?>
            </div>
            <form class="container" action="processor.php" method="post">
            <div>
              
            </div>
               <div class="form-group">
                <div class="row">
                  <label class="col-lg-2" for="firstname">First Name</label>
                  <input type="text" name="firstname" class="col-lg-4 form-control">
                  <label class="col-lg-2" for="lastname">Last Name</label>
                  <input type="text" name="lastname" class="col-lg-4 form-control">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-lg-2" for="username">Username</label>
                  <input type="text" name="username" class="col-lg-4 form-control">
                  <label class="col-lg-2" for="dob">Staff ID</label>
                  <input type="text" name="staff_id" class="col-lg-4 form-control">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-lg-2" for="department">Department</label>
                  <select class="col-lg-4 form-control" name="department">
                    <option>--Select Department --</option>
                    <option value="department one">Department one</option>
                    <option value="department two">Department two</option>
                    <option value="depaertment three">Department three</option>
                    <option value="department four">Department four</option>
                  </select>
                  <label class="col-lg-2" for="department">Designation</label>
                  <select class="col-lg-4 form-control" name="designation">
                    <option>--Select Designation --</option>
                    <option value="designation">Designation one</option>
                    <option value="designation">Designation two</option>
                    <option value="designation">Designation three</option>
                    <option value="designation">Designation four</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <label class="col-lg-2" for="phonenumber">Phone Number</label>
                    <input type="text" name="phonenumber" class="col-lg-4 form-control">
                    <label class="col-lg-2" for="email">Email Address</label>
                    <input type="email" name="email" class="col-lg-4 form-control">
              </div>
            </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-lg-2" for="password">Password</label>
                  <input type="password" name="password" class="col-lg-4 form-control">
                  <label class="col-lg-2" for="confpassword">Confirm Password</label>
                  <input type="password" name="confpassword" class="col-lg-4 form-control">
                </div>
              </div>
              <hr>
              <div class="float-right">
                <button class="btn btn-primary" type="submit" name="register">
                  <i class="fa fa-sign-up"></i>
                  <span>Register</span>
                </button>
              </div>             
            </form>
          </div>
          <div class="card-footer bg-primary">
            <span>Already registered? <a href="login.php" class="text-light">Click here</a></span>
          </div>
        </div>
        </div>
      </div>
    </div>

    <!-- /#page-content-wrapper -->

  </div>
  <?php
    include_once ('includes/scripts.php');
  ?>
</body>

</html>
             