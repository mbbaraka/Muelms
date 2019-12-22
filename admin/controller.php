<?php
	/* New users to be approved*/
	if ((isset($_GET['tab'])) && $_GET['tab'] == 1) {
		
		include '../actions/new_users.php';		
	}
	/* Assign Roles to registered staff. Roles like hod, hr and or us*/
	elseif ((isset($_GET['tab'])) && $_GET['tab'] == 2) {

		include '../actions/roles.php';
	}
	/* Rejected leaves*/
	elseif ((isset($_GET['tab'])) && $_GET['tab'] == 3) {

		include '../actions/leave_applications.php';
	}
	elseif ((isset($_GET['tab'])) && $_GET['tab'] == 4) {
		include ('../actions/settings.php');
	}

	elseif ((isset($_GET['tab'])) && $_GET['tab'] == 5) {
		
		include '../actions/leaves.php';
	}
	else
	{
		include '../actions/admin-dashboard.php';
	}
	?>
	