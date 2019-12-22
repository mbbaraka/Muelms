<?php
  
  $main_title = "Dashboard";

  include_once ('includes/head.php');
  include_once ('includes/sessions.php');
  include_once ('includes/functions.php');
?>

<body>

  <div class="d-flex" id="wrapper">
    <!-- Including side bar -->
    <?php 
      include_once ('includes/sideBar.php');
    ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <!--including the navigation menu -->
      <?php 
        include_once ('includes/navBar.php');
      ?>
      <div class="card" style="min-height: 100vh;">
        <div class="card-body">
          <div class="container-fluid">
            <h3>Profile</h3>
            <div class="row">
              <!--Account profile overview details start-->
              <div class="col-lg-7">
                <div class="card">
                  <div class="card-header text-center">
                    <h4 class="card-title">Account Details</h4>
                  </div>
                  <div class="card-body">
                    <div class="row p-3">
                      <label class="col-lg-5 text-capitalize">First Name :</label>
                      <span class="col-lg-7 text-capitalize text-muted"><?php echo $rows->first_name; ?> </span>
                    </div>
                    <div class="row p-3">
                      <label class="col-lg-5 text-capitalize">Last Name :</label>
                      <span class="col-lg-7 text-capitalize text-muted"><?php echo $rows->last_name; ?> </span>
                    </div>
                    <div class="row p-3">
                      <label class="col-lg-5 text-capitalize">Email :</label>
                      <span class="col-lg-7 text-capitalize text-muted"><?php echo $rows->email; ?> </span>
                    </div>
                    <div class="row p-3">
                      <label class="col-lg-5 text-capitalize">Phone Number :</label>
                      <span class="col-lg-7 text-capitalize text-muted"><?php echo $rows->phone_number; ?> </span>
                    </div>
                    <div class="row p-3">
                      <label class="col-lg-5 text-capitalize">Username :</label>
                      <span class="col-lg-7 text-capitalize text-muted"><?php echo $rows->username; ?> </span>
                    </div>
                    <div class="row p-3">
                      <label class="col-lg-5 text-capitalize">Designation :</label>
                      <span class="col-lg-7 text-capitalize text-muted"><?php echo $rows->designation; ?> </span>
                    </div>
                    <div class="row p-3">
                      <label class="col-lg-5 text-capitalize">Department :</label>
                      <span class="col-lg-7 text-capitalize text-muted"><?php echo $rows->department; ?> </span>
                    </div>
                  </div>
                </div>
                <br>
              </div>
              <!--Change password settings start -->
              <div class="col-lg-5">
               <div class="card">
                  <div class="card-header text-center">
                    <h4 class="card-title">Update Account Details</h4>
                  </div>
                  <div class="card-body">
                    <strong>Only fill in the fields you want to change</strong>
                    <br><br>
                    <form>
                        <!--Hidden fields to us for chamgimg password -->
                        <div>
                          <input type="hidden" name="staff_id" value="<?php echo $rows->staff_id; ?>" >
                          <input type="hidden" name="username" value="<?php echo $rows->username; ?>" >
                        </div>
                        <!--Hidden fields-->
                        <div class="form-group">
                          <label for="Username">Old Password</label>
                          <input type="text" name="" class="form-control col-lg-12">
                        </div>
                        <div class="form-group">
                          <label for="newpassword">New Password</label>
                          <input type="text" name="" class="form-control col-lg-12">
                        </div>
                        <div class="form-group">
                          <label for="confpassword">Confirm Password</label>
                          <input type="text" name="" class="form-control col-lg-12">
                        </div>
                        <button class="btn btn-success container-fluid">Update</button>
                    </form>
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <?php include_once ('includes/footer.php'); ?>
    </div>


    <!-- /#page-content-wrapper -->

  </div>

   

  <?php   
    include_once ('includes/modals.php');
    include_once ('includes/scripts.php');
  ?>

</body>

</html>


