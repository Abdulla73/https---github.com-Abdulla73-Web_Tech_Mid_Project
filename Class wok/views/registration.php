<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form method="post" action="../controllers/checkreg.php">
        <center>
            <fieldset style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); " >
                <u><h1 align= "Center">Registration</h1><br> </u>
                Name: <input type="text" name="user_name"><br>
                <hr><br>
                Email: <input type="email" name="Email" ><br>
                <hr><br>
                Paasword:    <input type="password" name="password" ><br>
                <hr><br>
                Confrim passord: <input type="password" name="confrim_password"><br> 
                <hr><br>
                <label for="user_type">Select User Type:</label>
                <select name="user_type" id="user_type">
                    <option value="ngo">NGO</option>
                    <option value="Donar">User</option>
                </select>
                <hr><br>
              
                <center>
                <button type="submit" name="confirm" >Confirm registration</button>

            </fieldset>
        </center>
    </form>