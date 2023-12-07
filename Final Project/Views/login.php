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

        <form action="../Controllers/login-ctrl.php" method="post" >

            <div class="login-form" id="login-form" >
                <h1>Sign-In</h1>
                <input type="text" name="user-mail" placeholder="Enter User Mail" >
                <input type="password" name="password" placeholder="Enter Password" >
                <button type="submit" name="sign-in" >Sign-In</button>
                <h3>Don't have account?</h3>
                <button type="submit" name="new-acc" >></button>
            </div>


        </form>

    </div>
        
    
</body>
</html>