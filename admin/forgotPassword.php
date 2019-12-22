<?php
  
  $page_title = "Forgot Password";

  include_once ('includes/styles.php');

?>

<body>

  <div>

    <!-- Page Content -->
    <div id="page-content-wrapper">
           <div class="row justify-content-center py-5">
              <div class="card col-lg-4">
              <div class="card-header bg-light">
                <div class="card-title">
                  <h4 class="text-center text-sm-center">Forgot Password</i> </h4>
                </div>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <label for="Password">Email to receive token</label>
                    <input type="email" name="" class="form-control">
                  </div>
                  <div>
                    <a href="#" class="btn btn-primary float-right">Send me Link</a>
                  </div>             
                </form>
              </div>
              <div class="card-footer bg-light">
                <span>Not registered? </i> <a href="register.html">Click here</a></span>
              </div>
            </div>
        </div>
    </div>

    <!-- /#page-content-wrapper -->

  </div>
</body>

</html>
