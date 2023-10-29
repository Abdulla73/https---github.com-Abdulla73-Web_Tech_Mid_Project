<?php
    session_start(); 
    include_once 'database_conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Feed</title>
</head>
    <body>
        <form method="post" >
            <fieldset style="height: 50px; border-radius: 10px;" >
                <table  style="height: 40px;" >
                    <th style="width:450px; text-align:left; color:yellow;" valign="top;">
                        <img src="img/logo_main.png" alt="logo" style="height:50px; width: 50px;"> <sup>DOT NGO</sup>
                    
                    </th>
                    <th style="width:1950px; text-align:center; color:aqua;">
                        NEWS FEED!
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
                        <?php }
                            else 
                            {
                                header('location: login_page.php');
                                exit; 
                            }
                        ?>

                </table>
            </fieldset>

            <fieldset style="height: 500px; text-align:center; width:1230px; float: left; border-radius: 10px; " >

                <?php 
                    $sql12="SELECT Ngo_post.*, Ngo_info.contact
                    FROM Ngo_post
                    RIGHT JOIN Ngo_info ON Ngo_post.Ngo_name = Ngo_info.Ngo_Name
                    ORDER BY Ngo_post.created_at DESC";
                    
                    $res= mysqli_query($conn,$sql12);                
                ?>
                <table border="1">
                    <tr>
                        <th style="width: 240px;">Account</th>
                        <th style="width: 350px;" >Post</th>
                        <th style="width: 240px;" >Date/Time</th>                      
                        <th style="width: 240px;" >Like Post</th>
                        <th style="width: 240px;" >Dislike Post</th>
                        <th style="width: 240px;" >Contract</th>

                    </tr>
                    

                    <?php while($r= mysqli_fetch_assoc($res)){ ?>
                    <tr>
                        <td><?php echo $r["Ngo_name"] ; ?></td>
                        <td><?php echo $r["post"] ; ?></td>
                        <td><?php echo $r["created_at"] ; ?></td>                       
                        <td> 
                            <form method="post">
                                <input type="hidden" name="created_at" value="<?php echo $r['created_at']; ?>">
                                <button type="submit" name="like" style="height: 50px; width: 50px; padding: 0; border: none; text-align:left;"  >
                                    <img src="img/like_logo.jpg" alt="Submit" width="50" height="50">
                                </button>
                                
                            </form>
                            <?php echo $r["likes"]  ;?>
                        </td>
                        <td>
                            <form method="post" >
                                <input type="hidden" name="created_at" value="<?php echo $r['created_at']; ?>">
                                <button type="submit" name="dislike" style="height: 50px; width: 50px; padding: 0; border: none;">
                                    <img src="img/dislike_logo.jpg" alt="Submit" width="50" height="50">
                                </button>
                            </form>
                            <?php echo $r["dislikes"]  ;?>
                        </td>
                        <td><?php echo $r["contact"] ; ?></td>
                    </tr>
                    <?php } ?>
                </table>



            </fieldset>

            <?php
            
            if (isset($_POST['like']) && isset($_POST['created_at'])) {
                $created_at = $_POST['created_at'];
                $sql22 = "UPDATE ngo_post SET likes = likes + 1 WHERE created_at = '$created_at'";
                $conn->query($sql22);
                
            }
            
            if (isset($_POST['dislike']) && isset($_POST['created_at'])) {
                $created_at = $_POST['created_at'];
                $sql23 = "UPDATE ngo_post SET dislikes = dislikes + 1 WHERE created_at = '$created_at'";
                $conn->query($sql23);
                
            }
            
        
               
            ?>
 

        </form>
    </body>
</html>