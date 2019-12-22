<!--This is the main file for processing forms 
	Prepared by Baraka Mark Bright and Bazirakye Tonny Mubangizi
	Both students of Muni University
-->
<?php
	include_once 'includes/sessions.php';
	include_once 'includes/functions.php';
	require_once 'includes/connection.php';

	//Adding leave types
	if (isset($_POST['new_leave'])) {
		if (!(isset($_POST['leave_type'])) || ($_POST['leave_type'])=="") {
			$_SESSION['ErrorMessage'] = "Leave Type must not be empty";
			redirect_to('/admin?tab=5');
		}else{
			$leave_type = strip_tags(trim(htmlspecialchars($_POST['leave_type'])));
		}
		if (!(isset($_POST['designation']))||($_POST['designation'])=="") {
			$_SESSION['ErrorMessage'] = "Please Select Designation to apply this Leave Type";

			redirect_to('/admin?tab=5');
		}else{			

			$designation = strip_tags(trim(htmlspecialchars($_POST['designation'])));

		}
		if (isset($_POST['number_days']) && ($_POST['number_days']) == "") {

			$_SESSION['ErrorMessage'] = "Please specify the number of days of the leave type";

			redirect_to('/admin?tab=5');	
		}else
		{
			$allowed_days = stripcslashes(trim(htmlspecialchars($_POST['number_days'])));
		}
		$leave_id = date('mdiYs');//leave ID randomly created

		//Inserting Data into the database
		if (!($_SESSION['ErrorMessage'])) {
			$leave_insert_query = $db_con->prepare("INSERT INTO leaves_tb(leave_id, leave_type,designation,allowed_days)VALUES('$leave_id','$leave_type','$designation','$allowed_days')");

			$leave_insert_query->execute();

			$result = $leave_insert_query->get_result();

			$rows=$db_con->affected_rows;
			if ($rows == 1) {
				$_SESSION['SuccessMessage'] = "Leave type successfully added";
				redirect_to('/admin?tab=5');
			}else
			{
				$_SESSION['ErrorMessage'] = "An error occured. Leave not added";
				redirect_to('/admin?tab=5');
			}

		}else
		{
			$_SESSION['ErrorMessage'] = "Leave type successfully added";
				redirect_to('/admin?tab=5');
		}
	}

?>