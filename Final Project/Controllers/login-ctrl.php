<?php
include_once '../Models/login-model.php';
session_start();
		
	if (isset($_REQUEST["sign-in"])) {
		$user_mail=$_REQUEST["user-mail"];
		$password =$_REQUEST["password"];
		
		if(empty($user_mail) || empty($password) ){
		echo " Use name or mail empty ";
		}

		else
		{
			$status= validation($user_mail,$password);
			if($status)
			{
				$_SESSION["user_name"] = $status;
				echo "login successful";
				exit();
			}
			else
			{
				echo "Invalid User Name or Password";
			}
		}
	}
	
	
	
	if (isset($_REQUEST["new-acc"])) {
		 header("Location:../Views/registration.php");
		
		exit();
	}
		
		
	?>
	