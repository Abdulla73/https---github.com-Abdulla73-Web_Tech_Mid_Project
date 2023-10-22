
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO Registration</title>
</head>
<body>
    <form method="post">
        <center>
            <fieldset style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); " >
                <u><h1 align= "Center">Registration</h1><br> </u>
                NGO name: <input type="text" name="user_name"><br>
                <hr><br>
                NGO Email: <input type="email" name="Email" ><br>
                <hr><br>
                Paasword:    <input type="password" name="password" ><br>
                <hr><br>
                Confrim passord: <input type="password" name="confrim_password"><br> 
                <hr><br>

              
                <center>
                <button type="submit" name="confirm" >Confirm registration</button>

            </fieldset>
        </center>
    </form>

    <?php
        include_once 'database_conn.php';
        session_start();


        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["confirm"]))
        {
             
           
            // Retrieve data from POST
            $name = $_POST["user_name"];
            $email = $_POST["Email"];
            $password = $_POST["password"];
            $confirmPassword = $_POST["confrim_password"];
            
            // Set the default user_type
            $userType = "ngo";
            
            // Validate the data (you can add more validation)
            if (empty($name) || empty($email) || empty($password) || empty($confirmPassword)) {
                echo '<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">';
                echo '<p style="background-color: #f2dede; color: #a94442; padding: 10px;">Please fill all the fields!</p>';
                echo '</div>';
                header("Refresh: 05; url=http://localhost/Project/registration_page.php");
            } elseif ($password != $confirmPassword) {
                echo '<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">';
                echo '<p style="background-color: #f2dede; color: #a94442; padding: 10px;">Password do not match!</p>';
                echo '</div>';
                header("Refresh: 05; url=http://localhost/Project/registration_page.php");
            } else {
                // Create a SQL query using a prepared statement
                $sql = "INSERT INTO user_lgin_info (user_name, mail, password, user_type) VALUES (?, ?, ?, ?)";
                
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssss", $name, $email, $password, $userType); // Add $userType here
                        
                if ($stmt->execute()) {
                    echo '<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">';
                    echo '<p style="background-color: #f2dede; color: #a94442; padding: 10px;">Registration successful !</p>';
                    echo '</div>';
                    header("Refresh: 05; url=http://localhost/Project/login_page.php");
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            }
        
        }
    ?>

</body>
</html>