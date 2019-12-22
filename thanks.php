<?php
  $main_title = "Registered Successfully";
  include_once 'includes/head.php';
  include_once ('includes/sessions.php');
  
?>

<body>

  <div>
    <!-- Page Content -->
    <div id="page-content-wrapper">
       <div class="row justify-content-center py-5">
          <div class="container col-lg-10">
            <div>
            <?php
               echo successMessage();
            ?>
            </div>

            <div>
              <p>Please wait for approval from the admin to prove that you are an employee of Muni University</p>
              <p>
                Email the admin : <a href="#">admin@muelms.com</a>
              </p>
            </div>
          </div>
        </div>
    </div>
</div>
    <?php 
      include_once ('includes/scripts.php');
    ?>
    <!-- /#page-content-wrapper -->
</body>

</html>

