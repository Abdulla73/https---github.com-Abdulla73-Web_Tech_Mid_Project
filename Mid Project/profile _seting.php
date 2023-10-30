<?php
    session_start(); 
    include_once 'database_conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Setting</title>
</head>
    <body>
        <form method="post">
            <fieldset style="height: 50px; border-radius: 10px;" >
                <table  style="height: 40px;" >
                    <th style="width:450px; text-align:left; color:yellow;" valign="top;">
                        <img src="img/logo_main.png" alt="logo" style="height:50px; width: 50px;"> <sup>DOT NGO</sup>
                    
                    </th>
                    <th style="width:1950px; text-align:center; color:aqua;">
                        Welcome To your profile!
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
            <fieldset style="height: 500px; text-align:center; width:1230px; float: left; border-radius: 10px; " >
                <center>
                    <fieldset style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); " >
                        <h1 align="Center">Edit Personal Information</h1><br> 
                        Change Name: <input type="text" name="user_name">
                        <button name="aplyname">Apply</button>  <br>
                        <hr><br>
                        Change Email: <input type="email" name="Email" >
                        <button name="applymail">Apply</button><br>
                        <hr><br>
                        Change Password:<input type="password" name="password" ><br>
                        <hr><br>
                        Confirm Password: <input type="password" name="confrim_password">
                        <button name="applypass">Apply</button><br> 
                        <hr><br>
                        Add Contact: <input type="text" name="contact">
                        <button name="addcont">Apply</button>  <br>
                    </fieldset>
                </center>
            </fieldset>
        </form>

        <?php 
            if (isset($_SESSION['username'])) 
            {
                $userName = $_SESSION['username'];
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["aplyname"]))
                {
                    $cngname = $_POST["user_name"];

                    if(empty($cngname))
                    {
                        echo "Please enter the new user name";
                    }
                    else
                    {
                        $sql24 = "UPDATE user_lgin_info SET user_name='$cngname' WHERE user_name='$userName'";
                        $conn->query($sql24);

                        $sql25 = "UPDATE ngo_info SET Ngo_Name='$cngname' WHERE Ngo_Name='$userName'";
                        $conn->query($sql25);

                        $sql26 = "UPDATE ngo_post SET Ngo_name='$cngname' WHERE Ngo_name='$userName'";
                        $conn->query($sql26);

                        session_destroy();
                        header('location:login_page.php');
                        exit;
                    }
                }

   
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["applymail"]))
                {
                    $cngmail = $_POST["Email"];

                    if(empty($cngmail))
                    {
                        echo "Please enter the new email ";
                    }
                    else
                    {
                        $sql27 = "UPDATE user_lgin_info SET mail='$cngmail' WHERE user_name='$userName'";
                        $conn->query($sql27);

                        $sql28 = "UPDATE ngo_info SET mail='$cngmail' WHERE Ngo_Name='$userName'";
                        $conn->query($sql28);

                        session_destroy();
                        header('location:login_page.php');
                        exit;
                    }
                }
                                    
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["applypass"]))
                {
                    $cngpass = $_POST["password"];
                    $cngcpass = $_POST["confrim_password"];

                    if(empty($cngpass) || empty($cngcpass))
                    {
                        echo "Please enter the new password ";
                    }
                    elseif($cngpass !== $cngcpass)
                    {
                        echo "Confirm password doesn't match ";
                    }
                    else
                    {
                        $sql30 = "UPDATE user_lgin_info SET password='$cngcpass' WHERE user_name='$userName'";
                        $conn->query($sql30);

                        session_destroy();
                        header('location:login_page.php');
                        exit;
                    }
                }
                
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addcont"]))
                {
                    $cngcontact = $_POST["contact"];

                    if(empty($cngcontact))
                    {
                        echo "Please enter the contact ";
                    }
                    else
                    {
                        $sql31 = "UPDATE ngo_info SET contact='$cngcontact' WHERE Ngo_Name='$userName'";
                        $conn->query($sql31);

                        session_destroy();
                        header('location:login_page.php');
                        exit;
                    }
                }
                
            }
        ?>
    </body>
</html>
