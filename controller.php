<!-- This page contains all the controls for the 
	human resource officer, the head of department and the university secretary.
	It's then  included in the dashboard printig data basing on the account status 
	That's is the hod account being different from the hod and the university secretary
-->
<?php
	if ($_SESSION['staff-level'] == "") {
		if ((isset($_GET['tab'])) && $_GET['tab'] == 1.1 ){
		
		include 'actions/staff_accepted.php';
		}

		elseif ((isset($_GET['tab'])) && $_GET['tab'] == 1.2) {
			
			include 'actions/staff_pending.php';
		}

		elseif ((isset($_GET['tab'])) && $_GET['tab'] == 1.3) {
			
			include 'actions/staff_rejected.php';
		}
		elseif ((isset($_GET['tab'])) && $_GET['tab'] == 1.4) {
			
			include 'actions/new_application.php';
		}
		elseif ((isset($_GET['tab'])) && $_GET['tab'] == 1.5) {
			
			include 'actions/staff_history.php';
		}
		else
		{
			include 'actions/dashboard.php';
		}
	}
	elseif ($_SESSION['staff-level'] == "hod") {
		/* Pending leaves*/
		if ((isset($_GET['tab'])) && $_GET['tab'] == 1) {

			include 'actions/pending.php';
		}
		/* Approved leaves*/
		elseif ((isset($_GET['tab'])) && $_GET['tab'] == 2) {
			
			include 'actions/accepted.php';		
		}
		/* Rejected leaves*/
		elseif ((isset($_GET['tab'])) && $_GET['tab'] == 3) {

			include 'actions/rejected.php';	
		}

		elseif (isset($_GET['tab']) && $_GET['tab'] == 4) {
			include ('actions/track_leaves.php');
		}
		else
		{
			include 'actions/dashboard.php';
		}

	}elseif ($_SESSION['staff-level'] == "hr") {
		/* Pending leaves*/
		if ((isset($_GET['tab'])) && $_GET['tab'] == 2.1) {

			include 'actions/pending.php';
		}
		/* Approved leaves*/
		elseif ((isset($_GET['tab'])) && $_GET['tab'] == 2.2) {
			
			include 'actions/accepted.php';		
		}
		/* Rejected leaves*/
		elseif ((isset($_GET['tab'])) && $_GET['tab'] == 2.3) {

			include 'actions/rejected.php';	
		}
		else
		{
			include 'actions/dashboard.php';
		}

	}elseif ($_SESSION['staff-level'] == "us") {
		/* Pending leaves*/
		if ((isset($_GET['tab'])) && $_GET['tab'] == 3.1) {

			include 'actions/pending.php';
		}
		/* Approved leaves*/
		elseif ((isset($_GET['tab'])) && $_GET['tab'] == 3.2) {
			
			include 'actions/accepted.php';		
		}
		/* Rejected leaves*/
		elseif ((isset($_GET['tab'])) && $_GET['tab'] == 3.3) {

			include 'actions/rejected.php';	
		}
		else
		{
			include 'actions/dashboard.php';
		}

	}
	// This is for displaying the contents viewed by the normal staff logged in

	
	
?>
						