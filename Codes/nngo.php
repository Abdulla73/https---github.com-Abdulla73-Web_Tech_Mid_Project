<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Link to the CSS file -->
    <title>NGO Profile</title>
</head>
<body >
   
    
    <form method="post">
        <fieldset style="height: 50px;" >
            <table  style="height: 40px;" >
                <th style="width:450px; text-align:left; color:yellow;" valign="top;">
                    <img src="logo_main.png" alt="logo" style="height:50px; width: 50px;"> <sup>DOT NGO</sup>
                   
                </th>
                <th style="width:1950px; text-align:center; color:aqua;">
                    Welcome To Dashboard!
                </th>

                <?php
                    session_start(); 
                    if (isset($_SESSION['username'])) { ?>
                        <th style="width:40px;">
                        <button type="submit" name="submit_button" style="height: 50px; width: 50px; padding: 0; border: none;">
                            <img src="login_logo.jpg" alt="Submit" width="50" height="50">
                        
                        </button>
                       
                        <?php $userName = $_SESSION['username'];?>
                        <td style="width:400px; color:yellow;"><?php  echo " Welcome ". $userName; ?></td>
                            
                        </th>
                
                <?php }?>  
            </table>
        </fieldset>

        <fieldset style="height: 510px; text-align:center; width:200px; float: left; " >
            <h1 style="margin: 0; position: relative; float:left; top: 50%; transform: translateY(-50%);">hni</h1>
            
        </fieldset>

        <fieldset style="height: 510px; width: 999px; float: left;">
            <h1 style="float: left;">Everyone child deserves a better childhood</h1>
            <img src="child_logo3.jpg" alt="ngo logo" height="200" width="200">
        </fieldset>

    </form>
   
  
</body>
</html>