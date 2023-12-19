<?php
session_start();
include_once '../Models/view-donor-model.php';

$res= getdonor();
$name = $_SESSION["user_name"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/donor.css">
    <title>Donorlist</title>
</head>
<body>
<body>
    <form action="../Controllers/donor-ctrl.php" method="post">
        <div class="main-container">
            <div class="header">
                <div class="logo">
                    <img src="../Resources/unicef.png" alt="logo">
                </div>

                <div class="header">
                    <div class="text">
                        <h1>Active Donors List</h1>
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

        <div class="body-part">
            <div class="content">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                    </tr>
                    <?php while($r= mysqli_fetch_assoc($res)){ ?>
                        <tr>
                        <td><?php echo $r["name"] ; ?></td>
                        <td><?php echo $r["mobile"] ; ?></td>
                        <td><?php echo $r["email"] ; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
</body>
</html>