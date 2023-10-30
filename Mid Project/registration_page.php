
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form method="post">
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

    <?php
        include_once 'database_conn.php';
        session_start();


        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["confirm"]))
        {

            $name = $_POST["user_name"];
            $email = $_POST["Email"];
            $password = $_POST["password"];
            $confirmPassword = $_POST["confrim_password"];
            $userType = $_POST["user_type"];

            if (empty($name) || empty($email) || empty($password) || empty($confirmPassword) || empty($userType)){
                echo '<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">';
                echo '<p style="background-color: #f2dede; color: #a94442; padding: 10px;">Please fill all the fields!</p>';
                echo '</div>';
                header("Refresh: 05; url=http://localhost/Mid Project/registration_page.php");
            } elseif ($password != $confirmPassword) {
                echo '<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">';
                echo '<p style="background-color: #f2dede; color: #a94442; padding: 10px;">Password do not match!</p>';
                echo '</div>';
                header("Refresh: 05; url=http://localhost/Mid Project/registration_page.php");
            } else {
                
                $sql = "INSERT INTO user_lgin_info (user_name, mail, password, user_type) VALUES (?, ?, ?, ?)";
                
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssss", $name, $email, $password, $userType); // Add $userType here

                if ($userType === "ngo") {
                    $sqlNgoInfo = "INSERT INTO ngo_info (Ngo_Name, mail) VALUES ('$name', '$email')";
                    if ($conn->query($sqlNgoInfo) === TRUE) {
                        echo "New record created successfully in ngo_info.";
                    } else {
                        echo "Error: " . $sqlNgoInfo . "<br>" . $conn->error;
                    }
                }

                if ($stmt->execute()) {
                    echo '<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">';
                    echo '<p style="background-color: #f2dede; color: #a94442; padding: 10px;">Registration successful !</p>';
                    echo '</div>';
                    header("Refresh: 05; url=http://localhost/Mid Project/login_page.php");
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            }
        
        }
    ?>

</body>
</html>