<?php 
include_once '../Models/account-model.php';
session_start();
$name = $_SESSION["user_name"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["with-draw-btn"])) {
        $amountToWithdraw = $_POST['withdraw-bal'];
        $update_bal = new_bal($name);

        if ($update_bal->num_rows > 0) {
            $row = $update_bal->fetch_assoc();
            $currentTotalBalance = $row['total_bal'];

            if ($currentTotalBalance >= $amountToWithdraw) {
                $newTotalBalance = $currentTotalBalance - $amountToWithdraw;

                $latest_bal = update_bal($name, $newTotalBalance);

                if ($latest_bal) {
                    echo "Balance updated";
                    header("Location:../Views/account.php");
			        exit();
                } else {
                    echo "Balance not updated";
                    header("Location:../Views/account.php");
			        exit();
                }
            } else {
                echo "Insufficient Balance";
                header("Location:../Views/account.php");
                exit();
            }
        } else {
            echo "Balance not found";
            header("Location:../Views/account.php");
            exit();
        }
    }
}

?>
