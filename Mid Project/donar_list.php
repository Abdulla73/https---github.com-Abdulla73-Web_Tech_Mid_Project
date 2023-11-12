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
                        Donor list!
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

            <table border="1" style="margin-left: 40px;" >
                <tr>
                    <th style="width: 350px;">Name</th>
                    <th style="width: 350px;">E-mail</th>
                    <th style="width: 350px;">Contract</th>
                </tr>

            
                <?php 
                    get_donor_info();
                ?>
              
            </table>
        </form>
        
        <?php
        function get_donor_info()
        {
            global $conn;
            $sql = "SELECT user_name, mail FROM user_lgin_info WHERE user_type='user'";
            $res= mysqli_query($conn,$sql);
            if ($res) {
                while ($r = mysqli_fetch_assoc($res)) {
                    echo "<tr>";
                    echo "<td>" . $r["user_name"] . "</td>";
                    echo "<td>" . $r["mail"] . "</td>";
                    
                    echo "</tr>";
                }
            } else {
                echo "Oops, something went wrong!";
            }
        }
        ?>

    </body>

</html>