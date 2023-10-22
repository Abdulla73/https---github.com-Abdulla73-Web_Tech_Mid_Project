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
                    <img src="logo_main.png" alt="logo" style="height:50px; width: 50px;"> <sup>DOT NGO</sup>
                   
                </th>
                <th style="width:1950px; text-align:center; color:aqua;">
                    Welcome To your profie!
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

        <fieldset style="height: 510px; text-align:center; width:200px; float: left; border-radius: 10px; " >
            <h1 style="margin: 0; position: relative; float:left; top: 50%; transform: translateY(-50%);">hni</h1>
            
        </fieldset>
        
       
        <fieldset style="height: 510px; width: 999px; float: left; border-radius: 10px; ">
            <table style="height: 30%; width:1000px;" align="right" >
                <tr>
                    <td>
                        <img src="child_ngo.png" alt="Ngo logo" height="100" width="100" >
                        
                    </td>
                    <td>
                        <h1 align="center" >Every child deserves a happy childhood 🙌 </h1>
                        <p>"Empowering every child's dreams, one smile at a time 
                            – because their futures are our brightest colors." 🌟</p>
                    </td>
                    <td>
                        <img src="child_logo3.jpg" alt="child logo" height="150" width="150">
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
                            <img src="verified.png" alt="Active logo" height="20" width="20" >
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
                            <img src="ratio.jpg" alt="ratio meter" height="50" width="50" >
                        </td>
                    </tr>
                </table>
            </fieldset>

        </fieldset>



    </form>
   
  
</body>
</html>