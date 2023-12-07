<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/registration.css">
    <title>Sing-Up</title>
</head>

<body>

    <div class="card" id="reg-card">
        <form action="../Controllers/registration-ctrl.php" method="post">
            <div class="reg-form" id="reg-form">
                <h1>Sing-Up</h1>
                <input type="text" name="user-name" placeholder="Enter User Name">
                <input type="text" name="user-mail" placeholder="Enter Mail Id">
                <input type="Password" name="user-pass" placeholder="Create a password">
                <input type="password" name="user-con-pass" placeholder="Confirm Your Password">
                <button type="submit" name="confirm-acc">Create Accout</button>
                <h3>Already have an account?</h3>
                <button type="submit" name="go-to-signin">></button>
            </div>

        </form>
    </div>
</body>

</html>