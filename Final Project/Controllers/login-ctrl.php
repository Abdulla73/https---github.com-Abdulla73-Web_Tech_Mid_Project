<?php
include_once '../Models/login-model.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["sign-in"])) {
        $user_mail=$_POST["user-mail"];
        $password =$_POST["password"];

        if(empty($user_mail) || empty($password) ){
            echo "please enter your user username and password";
        }

		else
		{
			$status= validation($user_mail,$password);
			if($status)
			{
				$_SESSION["user_name"] = $status;
                header("Location: ../Views/dashboard.php");
                exit();
			}
			else
			{
				echo "Invalid credintial. Please Check your username and password";
			}
		}
    }

}

if (isset($_POST["new-acc"])) {
	header("Location:../Views/registration.php");
	exit();
}

?>