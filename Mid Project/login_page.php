<?php 
    include_once 'database_conn.php';
    session_start();
?>

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
                Mail: <input type="mail" name="user"><br>
                <hr><br>
                Password:<input type="Password" name="password"><br>
                <hr><br>
                <center>
                    <button type="submit" name="login">Submit</button><br>
                    <p>Don't have an account?</p><br>
                    <button type="submit" name="registration" formaction="registration_page.php" >Registration</button>

                </center>
            </fieldset>
        </Center>
        
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
                header("Refresh: 05; url=http://localhost/Mid%20Project/login_page.php");
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
                    header("Refresh: 03; url=http://localhost/Mid%20Project/login_page.php");
                    
                }
            }
        }
    }
    
    $conn->close();
    
?>
</body>
</html>