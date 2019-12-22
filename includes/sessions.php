<?php
	session_start();
	function errorMessage()
	{
		if (isset($_SESSION['ErrorMessage'])) {
			# code..
			$errorDiv="<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>";
			$errorDiv.=htmlentities($_SESSION['ErrorMessage']);
			$errorDiv.='</div>';
			$_SESSION['ErrorMessage'] = null;
			return $errorDiv;
		}
	}
	function successMessage()
	{
		if (isset($_SESSION['SuccessMessage'])) {
			# code..
			$successDiv="<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>";
			$successDiv.=htmlentities($_SESSION['SuccessMessage']);
			$successDiv.='</div>';
			$_SESSION['SuccessMessage'] = null;
			return $successDiv;
		}
	}
	//redirecting pages
	function redirect_to($location)
	{
	    header("Location:".$location);
	    exit();
	}
?>