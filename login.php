<?php
  
  $main_title = "Login";

  include_once 'includes/head.php';
  include_once 'includes/sessions.php';
  if (isset($_SESSION['staff-user']) && $_SESSION['staff-user'] !=="") {
    redirect_to('/');
  }elseif (isset($_SESSION['admin-user']) && $_SESSION['admin-user'] !=="") {
    redirect_to('/admin');
  }
    else
    {

  ?>

<body>

  <div class="d-flex" id="wrapper">
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="row justify-content-center pt-5">
        <div class="col-lg-6">
          <div class="pt-5">
            <?php
              echo successMessage();
              echo errorMessage();
            ?>
          </div>
          <div class="card-group">
            <div class="card bg-primary">
              <div class="card-header">
                <h5 class="text-center text-light">Select Login Type</h5>
              </div>
              <div class="card-body">
                <div class="list-group">
                  <ul class="nav navbar-nav">
                    <li>
                      <a href="login.php" class="link nav-link nav-pills list-group-item pl-5 bg-primary menu-items">Staff</a>
                    </li>
                    <li>
                      <a href="?tab=1" class="link nav-link nav-pills list-group-item pl-5 bg-primary menu-items">Head of Department</a>
                    </li>
                    <li>
                      <a href="?tab=2" class="link nav-link nav-pills list-group-item pl-5 bg-primary menu-items">Human Resource</a>
                    </li>
                    <li>
                      <a href="?tab=3" class="link nav-link nav-pills list-group-item pl-5 bg-primary menu-items">University Secretary</a>
                    </li>
                    <li>
                      <a href="?tab=4" class="link nav-link nav-pills list-group-item pl-5 bg-primary menu-items">Administrator</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
              <?php
                if (isset($_GET['tab']) && $_GET['tab'] == 1) {
                  echo '
                    <div class="card border-primary">
                      <div class="card-header">
                        <h5 class="text-center text-primary">Head of Department Login</h5>
                      </div>
                      <div class="card-body">
                        <div>
                          <form method="post" action ="processor.php">
                            <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="username">Password</label>
                              <input type="password" name="password" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-outline-primary container" value="Submit" name="other-login" onclick="this.form.submit(); this.disabled=true; this.value=/"Sending…/"; ">
                          </form>
                          <hr class="bg-primary">
                          <div class="justify-content-between">
                            <span class="col-lg-6"><a href="forgotpassword.php" >Forgot Password?</a></span>
                            <span class="col-lg-6"><a href="register.php" >Register</a></span>
                          </div>
                        </div>
                      </div>
                   </div>
                  ';
                }
                elseif (isset($_GET['tab']) && $_GET['tab'] == 2) {
                  echo '
                    <div class="card border-primary">
                      <div class="card-header">
                        <h5 class="text-center text-primary">Human Resource Login</h5>
                      </div>
                      <div class="card-body">
                        <div>
                          <form method="post" action ="processor.php">
                            <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="username">Password</label>
                              <input type="password" name="password" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-outline-primary container" value="Submit" name="other-login">
                          </form>
                          <hr class="bg-primary">
                          <div class="justify-content-between">
                            <span class="col-lg-6"><a href="forgotpassword.php" >Forgot Password?</a></span>
                            <span class="col-lg-6"><a href="register.php" >Register</a></span>
                          </div>
                        </div>
                      </div>
                   </div>
                  ';
                }
                elseif (isset($_GET['tab']) && $_GET['tab'] == 3) {
                  echo '
                    <div class="card border-primary">
                      <div class="card-header">
                        <h5 class="text-center text-primary">University Secretary Login</h5>
                      </div>
                      <div class="card-body">
                        <div>
                          <form method="post" action ="processor.php">
                            <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="username">Password</label>
                              <input type="password" name="password" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-outline-primary container" value="Submit" name="other-login">
                          </form>
                          <hr class="bg-primary">
                          <div class="justify-content-between">
                            <span class="col-lg-6"><a href="forgotpassword.php" >Forgot Password?</a></span>
                            <span class="col-lg-6"><a href="register.php" >Register</a></span>
                          </div>
                        </div>
                      </div>
                   </div>
                  ';
                }elseif (isset($_GET['tab']) && $_GET['tab'] == 4) {
                  echo '
                    <div class="card border-primary">
                      <div class="card-header">
                        <h5 class="text-center text-primary">Administrator Login</h5>
                      </div>
                      <div class="card-body">
                        <div>
                          <form method="post" action ="processor.php">
                            <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="username">Password</label>
                              <input type="password" name="password" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-outline-primary container" value="Submit" name="admin-login">
                          </form>
                          <hr class="bg-primary">
                          <div class="justify-content-between">
                            <span class="col-lg-6"><a href="forgotpassword.php" >Forgot Password?</a></span>
                            <span class="col-lg-6"><a href="register.php" >Register</a></span>
                          </div>
                        </div>
                      </div>
                   </div>
                  ';
                }else
                {
                  echo '
                    <div class="card border-primary">
                      <div class="card-header">
                        <h5 class="text-center text-primary">Staff Login</h5>
                      </div>
                      <div class="card-body">
                        <div>
                          <form method="post" action ="processor.php">
                            <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="username">Password</label>
                              <input type="password" name="password" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-outline-primary container" value="Submit" name="staff-login">
                          </form>
                          <hr class="bg-primary">
                          <div class="justify-content-between">
                            <span class="col-lg-6"><a href="forgotpassword.php" >Forgot Password?</a></span>
                            <span class="col-lg-6"><a href="register.php" >Register</a></span>
                          </div>
                        </div>
                      </div>
                   </div>
                  ';
                }

              ?>
          </div>
      </div>
      </div>
    </div>


    <!-- /#page-content-wrapper -->

  </div>

   

  <?php   
    include_once ('includes/modals.php');
    include_once ('includes/scripts.php');
  }
  ?>

</body>

</html>

