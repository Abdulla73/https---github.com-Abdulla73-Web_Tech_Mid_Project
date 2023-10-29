<?php
    session_start(); 
    include_once 'database_conn.php';
?>

<?php
         
        if (isset($_POST['logout'])) {
            session_destroy();
            header('location:login_page.php');
            exit;
        }
        
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO Profile</title>
</head>
<body >
   
    
    <form method="post">
        <fieldset style="height: 50px; border-radius: 10px;" >
            <table  style="height: 40px;" >
                <th style="width:450px; text-align:left; color:yellow;" valign="top;">
                    <img src="img/logo_main.png" alt="logo" style="height:50px; width: 50px;"> <sup>DOT NGO</sup>
                   
                </th>
                <th style="width:1950px; text-align:center; color:aqua;">
                    Welcome To your profie!
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

        <div style="display: flex;">
            <fieldset style="height: 510px; text-align:center; width:200px; float: left; border-radius: 10px; " >
                <h1>Options:</h1>
                <center>

                <table align="left">
                        <tr>
                            <td>
                                <img src="img/post_logo.png" alt="Upload logo" width="40" height="40">
                            </td>
                            <td>
                                <button type="submit" name="newPost">New Post</button>
                            </td>
                        </tr>
                    </table>

                    <table align="left">
                        <tr>
                            <td>
                                <img src="img/donor_logo.jpg" alt="Donor logo" width="50" height="50">
                            </td>
                            <td>
                                <button formaction="donar_list.php" >Donor list</button>
                            </td>
                        </tr>
                    </table>
                
                    <table align="left">
                        <tr>
                            <td>
                                <img src="img/Account_logo.jpg" alt="Accoun logo"  width="50" height="50">
                            </td>
                            <td>
                                <button formaction="account.php" >Account</button>
                            </td>
                        </tr>
                    </table>

                    <table align="left">
                        <tr>
                            <td >
                                <img src="img/profile_logo.jpg" alt="profile setting"  width="50" height="50" >
                            </td>
                            <td>
                                <button formaction="profile _seting.php">Profile setings</button>
                            </td>
                        </tr>
                    </table>
                    
                    <table align="left"  style="position: absolute; top: 530px; left: 20px;" >
                    
                        <tr>
                            <td>
                                <img src="img/logout_logo.png" alt="Logout logo" width="50" height="50">
                            </td>
                            <td>
                                <button name="logout">Log Out</button>
                            </td>
                        </tr>
                    
                    </table>
                </center>
                
                
            </fieldset>
            

            <fieldset style="height: 510px; width: 999px; float:left; border-radius: 10px; ">
                <table style="height: 30%; width:1000px;" align="right" >
                    <tr>
                        <td>
                            <img src="img/child_ngo.png" alt="Ngo logo" height="100" width="100" >
                            
                        </td>
                        <td>
                            <h1 align="center" >Every child deserves a happy childhood 🙌 </h1>
                            <p>"Empowering every child's dreams, one smile at a time 
                                – because their futures are our brightest colors." 🌟</p>
                        </td>
                        <td>
                            <img src="img/child_logo3.jpg" alt="child logo" height="150" width="150">
                        </td>
                    </tr>
                </table><br> <br>
                
                <fieldset style="width: 960px; height: 50px; border-radius: 20px; background-color:lightgray; ">
                    <table style="width:960px;">
                        <tr>
                            <td>
                                <p>
                                    Activation Status
                                </p>
                            </td>

                            <td style="text-align:right;" >
                                <img src="img/verified.png" alt="Active logo" height="20" width="20" >
                                <sup>Active</sup>
                            
                            </td>
                        </tr>
                    </table>
                </fieldset><br>


                <fieldset style="width: 960px; height: 50px; border-radius: 20px; background-color:lightgray;">
                    <table style="width:960px;">
                        <tr>
                            <td>
                                <p>
                                    Donation Progress
                                </p>
                            </td>

                            <td style="text-align:right;">
                                <progress max="100" value="50">
                                    
                                </progress>
                                
                            </td>
                        </tr>
                    </table>
                </fieldset> <br>

                <fieldset style="width: 960px; height: 50px; border-radius: 20px; background-color:lightgray;">
                    <table style="width:960px;">
                        <tr>
                            <td>
                                <p>
                                    Next Event Date
                                </p>
                            </td>

                            <td style="text-align:right;">
                                <b>01-Nov-2023</b>
                            </td>
                        </tr>
                    </table>
                </fieldset><br>

                <fieldset style="width: 960px; height: 50px; border-radius: 20px; background-color:lightgray;">
                    <table style="width:960px;">
                        <tr>
                            <td>
                                <p>
                                    New Donar's Join Ratio
                                </p>
                            </td>

                            <td style="text-align:right;">
                                <img src="img/ratio.jpg" alt="ratio meter" height="50" width="50" >
                            </td>
                        </tr>
                    </table>
                </fieldset>

            </fieldset>

        </div>



    </form>
    
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["newPost"])) {
                echo '<form method="post">
                        <textarea name="postText" rows="4" cols="50"></textarea><br>
                        <input type="submit" value="Post">
                    </form>';
            } 
            elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["postText"])) {
                $postText = $_POST["postText"];
                if(!empty($postText)) 
                {
                    $userName = $_SESSION['username'];
                    $sqlNgopost = "INSERT INTO ngo_post (Ngo_name, post) VALUES ('$userName','$postText')";
                    $conn->query($sqlNgopost);
                    
                }
                else
                {
                    echo "Error posting: " . $conn->error;
                }
                
               
                
            }
        ?>
        <?php
            $conn->close();
        ?>
    </body>
</html>