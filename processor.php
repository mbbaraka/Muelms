<?php
	include_once 'includes/sessions.php';
	require_once 'includes/connection.php';

	if (isset($_POST['staff-login'])) {
		if ((!isset($_POST['username'])) || ($_POST['username'] == "")) {
			$_SESSION['ErrorMessage'] = "Username must be filled";
			redirect_to('login.php');
		}
		else
		{
			$username = strip_tags(trim(htmlspecialchars($_POST['username'])));
		}
		if ((!isset($_POST['password']))||($_POST['password'] == "")) {
			$_SESSION['ErrorMessage'] = "Password must be filled";
			redirect_to('login.php');
		}
		else
		{
			$password = strip_tags(trim($_POST['password']));
		}
		 $errors = $_SESSION['ErrorMessage'];

		    if(!$errors){
		        
		        $stmt = $db_con->prepare("SELECT * FROM employees_tb WHERE username = ?");
		        
		        $stmt->bind_param('s', $username);
		        
		        $stmt->execute();
		        
		        $result = $stmt->get_result();
		      
		        $row = $result->num_rows;
		        
		        if($row == 1){
		            
		           
		            $rows = $result->fetch_object();
		            
		            if(password_verify($password, $rows->password)){
		               
		               session_start();
		                    $_SESSION['staff-user'] = $rows->username;
		                    $_SESSION['staff-email'] = $rows->email;
		                    $_SESSION['fname'] = $rows->first_name;
		                    $_SESSION['staff-level'] = $rows->staff_level;

		                redirect_to("/");
		                
		            }else{
		            
		                $_SESSION['ErrorMessage'] = "Incorrect Password";
		                    
		                redirect_to('login.php');
		                    
		            }
		                

		        } else{
		            
		            $_SESSION['ErrorMessage'] = "Username provided is not registered";
		            
		             redirect_to('login.php');
		            
		        }
		        
		    } else{
		        
		        $_SESSION['ErrorMessage'] = "An error occured. Try again later";
		         Redirect_to('login.php');
		}
	}



	elseif (isset($_POST['other-login'])) {
		if ((!isset($_POST['username'])) || ($_POST['username'] == "")) {
			$_SESSION['ErrorMessage'] = "Username must be filled";
			redirect_to('login.php');
		}
		else
		{
			$username = strip_tags(trim(htmlspecialchars($_POST['username'])));
		}
		if ((!isset($_POST['password']))||($_POST['password'] == "")) {
			$_SESSION['ErrorMessage'] = "Password must be filled";
			redirect_to('login.php');
		}
		else
		{
			$password = strip_tags(trim($_POST['password']));
		}
		 $errors = $_SESSION['ErrorMessage'];

		    if(!$errors){
		        
		        $stmt = $db_con->prepare("SELECT * FROM employees_tb WHERE username = ?");
		        
		        $stmt->bind_param('s', $username);
		        
		        $stmt->execute();
		        
		        $result = $stmt->get_result();
		      
		        $row = $result->num_rows;
		        
		        if($row == 1){
		            
		           
		            $rows = $result->fetch_object();
		            
		            if(password_verify($password, $rows->password)){
		               
		               session_start();
	                	$_SESSION['staff-user'] = $rows->username;
	                    $_SESSION['staff-email'] = $rows->email;
	                    $_SESSION['fname'] = $rows->first_name;
	                    $_SESSION['staff-level'] = $rows->staff_level;

	                    redirect_to('/');
		                
		            }else{
		            
		                $_SESSION['ErrorMessage'] = "Incorrect Password";
		                    
		                redirect_to('login.php');
		                    
		            }
		                

		        } else{
		            
		            $_SESSION['ErrorMessage'] = "Username provided is not registered";
		            
		             redirect_to('login.php');
		            
		        }
		        
		    } else{
		        
		        $_SESSION['ErrorMessage'] = "An error occured. Try again later";
		         Redirect_to('login.php');
		}

	}elseif (isset($_POST['admin-login'])) {
		if ((!isset($_POST['username'])) || ($_POST['username'] == "")) {
			$_SESSION['ErrorMessage'] = "Username must be filled";
			redirect_to('login.php');
		}
		else
		{
			$username = strip_tags(trim(htmlspecialchars($_POST['username'])));
		}
		if ((!isset($_POST['password']))||($_POST['password'] == "")) {
			$_SESSION['ErrorMessage'] = "Password must be filled";
			redirect_to('login.php');
		}
		else
		{
			$password = strip_tags(trim($_POST['password']));
		}
		 $errors = $_SESSION['ErrorMessage'];

		    if(!$errors){
		        
		        $stmt = $db_con->prepare("SELECT * FROM admin_tb WHERE username = ?");
		        
		        $stmt->bind_param('s', $username);
		        
		        $stmt->execute();
		        
		        $result = $stmt->get_result();
		      
		        $row = $result->num_rows;
		        
		        if($row == 1){
		            
		           
		            $rows = $result->fetch_object();
		            
		            if(password_verify($password, $rows->password)){
		               
		               session_start();
	                	$_SESSION['admin-user'] = $rows->username;
	                    $_SESSION['admin-email'] = $rows->email;
	                    $_SESSION['fname'] = $rows->first_name;

	                    redirect_to('/admin');
		                
		            }else{
		            
		                $_SESSION['ErrorMessage'] = "Incorrect Password";
		                    
		                redirect_to('login.php');
		                    
		            }
		                

		        } else{
		            
		            $_SESSION['ErrorMessage'] = "Username provided is not registered";
		            
		             redirect_to('login.php');
		            
		        }
		        
		    } else{
		        
		        $_SESSION['ErrorMessage'] = "An error occured. Try again later";
		         Redirect_to('login.php');
		}

	}
	elseif(isset($_POST['register'])) {
    //first name    
	    if(!isset($_POST['firstname']) || $_POST['firstname'] == ''){

	            $_SESSION['ErrorMessage']="First Name is required";
	            Redirect_to('register.php');

	    }
	    else{
	        
	        $firstname = strip_tags(trim(htmlspecialchars($_POST['firstname'])));        
	    }
	    //lastname
	    if(!isset($_POST['lastname']) || $_POST['lastname'] == ''){

	            $_SESSION['ErrorMessage']="Last Name is required";
	            Redirect_to('register.php');

	    }
	    else{
	        
	        $lastname = strip_tags(trim(htmlspecialchars($_POST['lastname'])));        
	    }
	   
	    //username
	    if(!isset($_POST['username']) || $_POST['username'] == ''){

	            $_SESSION['ErrorMessage']="Username is required";
	            Redirect_to('register.php');

	    }elseif (strlen($_POST['username']) < 5) {
	            $_SESSION['ErrorMessage']="Username must be valid. Use at least 5 characters";
	            Redirect_to('register.php');
	    }else{
	        
	        $username = strip_tags(trim(htmlspecialchars($_POST['username'])));
	    }
	    //staff id
	    if(!isset($_POST['staff_id']) || $_POST['staff_id'] == ''){

	            $_SESSION['ErrorMessage']="Username is required";
	            Redirect_to('register.php');

	    }elseif (strlen($_POST['staff_id']) < 5) {
	            $_SESSION['ErrorMessage']="Staff ID must be valid.";
	            Redirect_to('register.php');
	    }else{
	        
	        $staff_id = strip_tags(trim(htmlspecialchars($_POST['staff_id'])));
	    }
	     //department
	    if(!isset($_POST['department']) || $_POST['department'] == ''){

	            $_SESSION['ErrorMessage']="Please select your department";
	            Redirect_to('register.php');

	    }
	    else{
	        
	        $department = strip_tags(trim(htmlspecialchars($_POST['department'])));        
	    }
	    //designation
	    if(!isset($_POST['designation']) || $_POST['designation'] == ''){

	            $_SESSION['ErrorMessage']="You must select your designation";
	            Redirect_to('register.php');

	    }else{

	        $designation = strip_tags(trim(htmlspecialchars($_POST['designation'])));
	        
	    }
	    //phone number
	    if(!isset($_POST['phonenumber']) || $_POST['phonenumber'] == ''){

	            $_SESSION['ErrorMessage']="Phone number is needed";
	            Redirect_to('register.php');

	    }else{

	        $phonenumber = strip_tags(trim(htmlspecialchars($_POST['phonenumber'])));
	        
	    }
	    //Date registered
	    $date_registered = date("d-m-Y");
	    //email
	    if(!isset($_POST['email']) || $_POST['email'] == ''){

	            $_SESSION['ErrorMessage'] = 'Email address is required';
	            Redirect_to('register.php');

	        } else if(!((strpos($_POST['email'], ".") > 0) && (strpos($_POST['email'], "@") > 0)) || 
	                preg_match("/[^a-zA-Z0-9.@_-]/", $_POST['email'])){

	            $_SESSION['ErrorMessage'] = 'Email is invalid. Check your email and try again';
	            Redirect_to('register.php');

	    } else{
	        
	        $email = strip_tags(trim(htmlspecialchars($_POST['email'])));
	        
	    }
	    //password
	    if(!isset($_POST['password']) || $_POST['password'] == ''){
	        
	        $_SESSION['ErrorMessage'] = 'Password is required';
	        Redirect_to('register.php');
	        
	    } elseif(strlen($_POST['password']) < 8){
	        
	        $_SESSION['ErrorMessage'] = 'Password must not be less than 8 characters';
	        Redirect_to('register.php');
	        
	    }
	    else{
	        $password = password_hash(strip_tags(trim($_POST['password'])), PASSWORD_DEFAULT);
	    }
	    //confirm password
	    if(!isset($_POST['confpassword']) || $_POST['confpassword'] == ''){
	        
	        $_SESSION['ErrorMessage'] = 'You have to confirm password';
	        Redirect_to('register.php');
	        
	    }else{
	        $confpassword = password_hash(strip_tags(trim($_POST['confpassword'])), PASSWORD_DEFAULT);
	    }
	     //checking whether the same username exists
	    $query = $db_con->query("SELECT * FROM employees WHERE username = '$username' OR 
	        email = '$email'");

	    if($query->num_rows > 0){
	        $_SESSION['ErrorMessage'] = "There is already a user with these details";
	        Redirect_to('register.php');
	    }
		//verifying passwords
		 if (($_POST['password']) !== ($_POST['confpassword'])) {

	        $_SESSION['ErrorMessage'] = "Passwords do not match. Check your password and try again";
	        Redirect_to('register.php');
	    }

	    //sending to database
	     if (!($_SESSION['ErrorMessage'])) {
	        $stmt = $db_con->prepare("INSERT INTO employees_tb(staff_id, first_name, last_name, username, department, designation, phone_number, email, password, date_registered) 
	            VALUES('$staff_id','$firstname','$lastname','$username','$department','$designation','$phonenumber','$email','$password','$date_registered')");

	        
	        $stmt->execute();
	            
	        $result = $stmt->get_result();
	            
	        $row = $db_con->affected_rows;
	        
	        
	        if($row == 1){
	            
	            $_SESSION['SuccessMessage']="You have successfully registered.";
	            Redirect_to('thanks.php');
	        }
	        else
	        {
	            $_SESSION['ErrorMessage']="An error occured, Not registered";
	            Redirect_to('register.php');
	        }

	    }
	}


?>