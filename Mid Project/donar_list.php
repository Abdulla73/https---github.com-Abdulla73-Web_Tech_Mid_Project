<?php
session_start();
include_once 'database_conn.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account</title>
    </head>

    <body>
        <form method="post">
            <fieldset style="height: 50px; border-radius: 10px;">
                <table style="height: 40px;">
                    <th style="width:450px; text-align:left; color:yellow;" valign="top;">
                        <img src="img/logo_main.png" alt="logo" style="height:50px; width: 50px;"> <sup>DOT NGO</sup>

                    </th>
                    <th style="width:1950px; text-align:center; color:aqua;">
                        Your Account!
                    </th>

                    <?php
                    if (isset($_SESSION['username'])) { ?>
                        <th style="width:40px;">
                            <button type="submit" name="submit_button" style="height: 50px; width: 50px; padding: 0; border: none;">
                                <img src="img/login_logo.jpg" alt="Submit" width="50" height="50">
                            </button>
                            <?php
                            $userName = $_SESSION['username'];
                            echo "<td style='width:400px; color:yellow;'>Welcome " . $userName . "</td>";
                            ?>
                        </th>
                    <?php } else {
                        header('location: login_page.php');
                        exit;
                    }
                    ?>

                </table>
            </fieldset>
        </form>
        <form method="post">
            <fieldset style="height: 500px; text-align:center; width:1230px; float: left; border-radius: 10px; ">
        </form>
    </body>

</html>