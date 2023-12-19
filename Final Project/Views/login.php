<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/login.css">
    <title>Sing-In</title>
</head>
<body>

    <div class="card" id="login-card">

        <form action="../Controllers/login-ctrl.php" method="REQUEST" >

            <div class="login-form" id="login-form" >
                <h1>Sign-In</h1>
                <input type="text" name="user-mail" id="mail" placeholder="Enter User Mail" >
                <p id="error"></p>
                <input type="password" name="password" id="password" placeholder="Enter Password" >
                <button type="button" name="sign-in" onclick="showWarning()" >Sign-In</button>
                <h3>Don't have account?</h3>
                <button type="submit" name="new-acc" >></button>
            </div>

            
        </form>

    </div>
        <script src="../Js/login.js"></script>
    
</body>
</html>