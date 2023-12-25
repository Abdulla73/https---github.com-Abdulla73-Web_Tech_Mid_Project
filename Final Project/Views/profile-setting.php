<?php
session_start();
$name = $_SESSION["user_name"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/peofile-settings.css">

    <title>Profile Settings</title>
</head>

<body>
    <form action="../Controllers/profile-setting-ctrl.php" method="post">
        <div class="main-container">
            <div class="header">
                <div class="logo">
                    <img src="../Resources/unicef.png" alt="logo">
                </div>

                <div class="header">
                    <div class="text">
                        <h1>Profile Settings</h1>
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
        </div>
    </form>

    <div class="area">
        <div class="body-section">
            <div class="inputs-section">
                <form action="../Controllers/profile-setting-ctrl.php" method="post" >
                    <input type="text" name="update-mail" placeholder="Change user mail" >
                    <input type="password" name="cng-password" placeholder="Change password">
                    <input type="password" name="con-cng-password" placeholder="Confirm password" >
                    <input type="text" name="contract" placeholder="Contract number" >
                    <button type="submit" name="apply" >Apply</button>
                    
                </form>
            </div>
        </div>
    </div>
</body>