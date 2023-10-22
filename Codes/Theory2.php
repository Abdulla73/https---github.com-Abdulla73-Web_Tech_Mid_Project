
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <Center>
                <fieldset style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); ">
                <h1 align= "Center">Login</h1>
                Mail: <input type="text" name="user"><br>
                <hr><br>
                Password:<input type="Password" name="password"><br>
                <hr><br>
                <center>
                    <button type="submit" name="login" >Submit</button><br>
                    <p>Don't have an account?</p><br>
                    <button type="submit" name="registration"  >Registration</button>

                </center>
            </fieldset>
        </Center>
        
    </form>

<?php

    if (isset($_POST["login"])) {

        header("Location:user_page.php");

    }
    if (isset($_POST["registration"]))
    {
        header("Location: registration_page.php");
    } 
    
?>
</body>
</html>