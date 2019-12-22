<?php
  
  $main_title = "Home";

  include_once ('includes/head.php');
  include_once ('includes/sessions.php');
  include_once ('includes/connection.php');

  if (isset($_SESSION['staff-user']) && $_SESSION['staff-user'] !=="") {
    # code...
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
        <div id="page-content" class="container-fluid">
          <?php include_once 'controller.php'; 
          ?>
        </div>
      </div>
     <?php include_once ('includes/footer.php'); ?>
    </div>


    <!-- /#page-content-wrapper -->

  </div>

   

  <?php   
    include_once ('includes/modals.php');
    include_once ('includes/scripts.php');
    }
    else
    {
      redirect_to("login.php");
    }
  ?>

</body>

</html>

