<?php 
session_start();
$name = $_SESSION["user_name"];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["apply"])) {
        $new_mail = $_POST['update-mail'];
        $new_pass = $_POST['cng-password'];
        $con_pass = $_POST['con-cng-password'];
        $contract= $_POST['contract'];

        $update=update_setting( $new_mail,$new_pass,$contract,$name);

        if($update){
            echo "updated";
        }
        else{
            echo "can not update";
        }
    }
}

?>