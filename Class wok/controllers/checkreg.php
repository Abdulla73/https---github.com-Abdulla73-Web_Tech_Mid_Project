<?php  
include_once '../models/reg.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["confirm"]))
{
    $user_name=$_REQUEST['user_name'];
    $mail=$_REQUEST['Email'];
    $password=$_REQUEST['password'];
    $Confirm_pass=$_REQUEST['confrim_password'];
    $user_type=$_REQUEST['user_type'];
    $status= auth($mail);
    $regstatus= registration($user_name, $mail, $password, $user_type);
    


    if (empty($user_name) || empty($mail) || empty($password) || empty($Confirm_pass) || empty($user_type))
    {
        echo "Please fill all the fields ";
    }

    elseif($password != $Confirm_pass)
    {
        echo "password and confirm password not matched";
    }

    
    elseif($status)
    {
        echo "Account with this name already exits";
    }

    if($regstatus)
    {
       echo "registration successful";
       header ('Location: ../models/Home.php');
    }
    else{
        echo "failed";
    }
    
    
}

else{
    echo "registration failed. Please try again";
    header ('Location: ../models/reg.php');
}


?>