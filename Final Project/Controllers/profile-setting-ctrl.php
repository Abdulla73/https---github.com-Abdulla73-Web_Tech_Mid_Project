<?php 
session_start();
$name = $_SESSION["user_name"];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["apply"])) {
        $new_mail = $_POST['update-mail'];
        $new_pass = $_POST['cng-password'];
        $con_pass = $_POST['con-cng-password'];
        $contract= $_POST['contract'];

        if(empty( $new_mail) && empty($new_pass) && empty($con_pass) &&($contract)){
            echo "Nothig to update ";
        }

        if(!empty($new_mail)){
            $update_usermail = user_mail($new_mail,$name);

            if($update_usermail){
                echo "updated";
            }

            else{
                echo "error user-mail";
            }
        }

        if(!empty($new_pass) && !empty( $con_pass)){
           $update_userpass=user_pass($new_pass,$name);

           if($update_userpass){
            echo "updated";
           }

           else{
            echo "error password";
        }
        }

        if(!empty($contract)){

            $update_contract = user_contract($contract, $name);

            if($update_contract){
                echo "updated";
            }
            else{
                echo "error contract";
            }

        }

    }

    else{
        echo "error occupied";
    }
}

?>