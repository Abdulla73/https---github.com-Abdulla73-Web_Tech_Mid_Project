<?php
include_once '../Models/reg-model.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["confirm-acc"])) {
        $user_name=$_POST["user-name"];
        $user_mail =$_POST["user-mail"];
        $password =$_POST["user-pass"];
        $confirm_pass =$_POST["user-con-pass"];

        if(empty($user_name) || empty($password) || empty($user_mail) || empty($confirm_pass) ){
           
            echo "please fillup all the information";
        }

        elseif($password!=$confirm_pass)
        {
            echo "Password and confirm password don't match";
        }

        elseif(strlen($password) < 8)
        {
            echo "Password need to be atleast 8 charecter long";
        }

        else
        { 
            $status= check_acc($user_mail);
            if($status)
            {
                echo "Account with this mail already exits. Please Sign-in";
            }
            else
            {
                $insert= create_acc($user_name,$user_mail,$password);

                if($insert)
                {
                    echo" Registration successful";
                    header("Location:../Views/login.php");
                    exit();
                }
                else{
                    echo "Registration failed. Please try again.";
                    header("Location:../Views/registration.php");
                    exit();
                }
            }

        }

    }
    

}

if (isset($_POST["go-to-signin"])) {
    header("Location:../Views/login.php");
    exit();
}

?>