  <!-- /**********Scripts go here***************/
  /**********By 
  /**************Baraka Mark Bright and Bazirakye Tonny**************/ -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/datatables-bs4/js/dataTables.bootstrap4.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
    $(function () {
    $("#muelms_table").DataTable();
     });
  </script>
  <script>
    // Tooltip & popovers
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover();
  </script>
  <script>
   
   function checkForm(form) // Submit button clicked
  {

    form.staff_login.disabled = true;
    form.staff_login.value = "Loading...";
    return true;
  }

  </script>