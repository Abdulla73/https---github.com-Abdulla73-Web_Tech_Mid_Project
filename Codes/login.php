<?php 
    include_once 'databse.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Link to the CSS file -->
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <div class="center-container">
            <fieldset class="login-form">
                <h1>Login</h1>
                <label for="user">Mail:</label>
                <input type="email" name="user" id="user">
                <hr>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
                <hr>
                <div class="form-buttons">
                    <button type="submit" name="login" class="login-button">Submit</button>
                    <p>Don't have an account?</p>
                    <button type="submit" name="registration" formaction="registration_page.php" class="register-button">Registration</button>
                </div>
            </fieldset>
        </div>
    </form>

    <?php

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["login"])) {
                $mail = $_POST["user"];
                $password = $_POST["password"];
                
                // Check if email and password are empty
                if (empty($mail) || empty($password)) {
                    echo '<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">';
                    echo '<p style="background-color: #f2dede; color: #a94442; padding: 10px;">Please enter both email and password!</p>';
                    echo '</div>';
                    header("Refresh: 05; url=http://localhost/Project/login_page.php");
                } else
                {
                    //sql query
                    $sql = "SELECT * FROM user_lgin_info WHERE mail = '$mail' AND password = '$password'";
                    $result = $conn->query($sql);
        
                    if ($result->num_rows > 0) {
                        
                        $row = $result->fetch_assoc();
                        $userType = $row["user_type"];
                        $_SESSION['username'] = $row["user_name"];
                        if ($userType === "admin") {
                        
                            header("Location: admin_page.php");
                            exit; 
                        } 
                        elseif($userType== "ngo")
                        {
                        
                            header("Location: ngo_page.php?");
                            exit;
                            
                            
                        }
                        
                    } 
                    else
                    {
                        echo '<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">';
                        echo '<p style="background-color: #f2dede; color: #a94442; padding: 10px;">Login failed! Please check your email and password!</p>';
                        echo '</div>';
                        header("Refresh: 03; url=http://localhost/Project/login_page.php");
                        
                    }
                }
            }
        }
        
        $conn->close();
    
    ?>
</body>
</html>