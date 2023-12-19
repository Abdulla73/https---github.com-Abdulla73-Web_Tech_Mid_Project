<?php
include_once '../Models/account-model.php';
session_start();
$name = $_SESSION["user_name"];

$bankResult = bank_name($name);
$bankData = mysqli_fetch_assoc($bankResult);
$bank = $bankData['bank_name'];

$acc_data = acc_holder($name);
$acckData = mysqli_fetch_assoc($acc_data);
$acc = $acckData['account_holder'];

$acc_num = acc_number($name);
$acnData = mysqli_fetch_assoc($acc_num);
$acn = $acnData['account_number'];

$act_data = acc_type($name);
$actData = mysqli_fetch_assoc($act_data);
$act = $actData['account_type'];

$acb_data = total_bal($name);
$acbData = mysqli_fetch_assoc($acb_data);
$acb = $acbData['total_bal'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/account.css">

    <title>Account</title>
</head>

<body>
    <form action="../Controllers/account-control.php" method="post">
        <div class="main-container">
            <div class="header">
                <div class="logo">
                    <img src="../Resources/unicef.png" alt="logo">
                </div>

                <div class="header">
                    <div class="text">
                        <h1>Access Your Account</h1>
                    </div>
                </div>

                <div class="header">
                    <div class="user-info">
                        <h1>Welcome </h1>
                    </div>
                </div>

                <div class="header">
                    <div class="user-name">
                        <h1><?php echo $name ?></h1>
                    </div>
                </div>
            </div>
            <div class="body-part">
                <div class="content">
                    <table>
                        <tr>
                            <td>Bank Name</td>
                            <td><?php echo $bank; ?></td>
                        </tr>
                        <tr>
                            <td>Account Holder</td>
                            <td><?php echo $acc; ?></td>
                        </tr>
                        <tr>
                            <td>Account Number</td>
                            <td><?php echo $acn; ?></td>
                        </tr>
                        <tr>
                            <td>Account Type</td>
                            <td><?php echo $act; ?></td>
                        </tr>
                        <tr>
                            <td>Total Balance</td>
                            <td><?php echo $acb; ?></td>
                        </tr>
                        <tr>
                            <td>Withdraw Ammount</td>
                            <td><input type="text" name="withdraw-bal" placeholder="Enter Ammount to Withdraw"></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><button type="submit" name="with-draw-btn">Withdraw</button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </form>
</body>

</html>