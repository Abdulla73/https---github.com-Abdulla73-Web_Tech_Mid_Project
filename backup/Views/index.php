<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="../Css/index.css">
        <title>LOGIN || REGISTRATION</title>
    </head>

    <body>
        <div class="index">
        <div class="login-form" id="loginForm">
                <form action="../Controls/loginctrl.php" method="post">
                    <div class="logicn">
                        <i class="fa-solid fa-user" id="log_user"></i>
                        <i class="fa-solid fa-key" id="log_pass" ></i>
    
                    </div>
                    <h1>Login to Your Account</h1>
                    <p id="greet">Welcome back! </p> 
                    <p id="greet">Use your username and password to login</p>
                    <input type="mail" name="user" placeholder="User name">
                    <input type="Password" name="password" placeholder="Enter password">
                    <a href="recover-pass.php">Forget password?</a>
                    <button type="submit" name="login">Sign In</button>
                    <p>Don't have an account?</p>
                    <button type="button" name="newacc"> Create a New Account</button>
                    
                    
                </form>
            </div>
    
            <div class="reg-form" id="regForm">
                <form action="../Controls/regctrl.php" method="post" >
                    <div class="regicn">
                        <i class="fa-solid fa-user"></i>
                        <i class="fa-solid fa-envelope"></i>
                        <i class="fa-solid fa-mobile"></i>
                        <i class="fa-solid fa-key"></i> 
                        <i class="fa-solid fa-key"></i> 
                    </div>
                    <h1>New Here?</h1>
                    <p id="greet">Just fillip the registration form and join right in</p>
                    <input type="text" name="user_name" placeholder="Enter user name" >
                    <input type="email" name="Email" placeholder="Enter mail id" >
                    <input type="text" name="phone_number" placeholder="Enter your phone number" >
                    <input type="password" name="password" placeholder="Enter password" >
                    <input type="password" name="confrim_password" placeholder="Re-type your password" >
                    <button type="submit" name="Sin up" >Sign Up</button>
                </form>
    
    
            </div>

            <script src="../js/index.js"></script>
            

        </div>
        
        

    </body>

</html>