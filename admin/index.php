<?php
  if (isset($_GET['tab'])&&$_GET['tab']==1) {
    $main_title ="Approve Registered Users";
  }elseif (isset($_GET['tab'])&&$_GET['tab']==2) {
    $main_title ="Assign Roles";
  }elseif (isset($_GET['tab'])&&$_GET['tab']==3) {
    $main_title ="Leave Applications";
  }elseif (isset($_GET['tab'])&&$_GET['tab']==4) {
    $main_title ="Settings";
  }elseif (isset($_GET['tab'])&&$_GET['tab']==5) {
    $main_title ="Leave Manager";
  }else {
    $main_title ="Dashboard";
  }

  include_once ('../includes/head.php');
  include_once ('../includes/styles.php');
  include_once ('../includes/sessions.php');
  include_once ('../includes/connection.php');
  ?>

<body>

  <div class="d-flex" id="wrapper">
    <!-- Including side bar -->
    <?php 
      include_once ('../includes/sideBar.php');
    ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <!--including the navigation menu -->
      <?php 
        include_once ('includes/navBar.php');
      ?>
      <div class="card" style="min-height: 100vh;">
        <div id="page-content" class="container-fluid">
          <div>
            <?php
               echo successMessage();
               echo errorMessage();
            ?>
          </div>
          <?php include_once 'controller.php'; 
          ?>
        </div>
      </div>
     <?php include_once ('../includes/footer.php'); ?>
    </div>


    <!-- /#page-content-wrapper -->

  </div>

   

  <?php   
    include_once ('../includes/modals.php');
    include_once ('../includes/scripts.php');
  ?>

</body>

</html>
