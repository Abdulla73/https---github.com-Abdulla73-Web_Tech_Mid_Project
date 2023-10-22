<?php 
    include_once 'databse.php'
?>

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
                Id: <input type="text" name="id"><br>
                <hr><br>
                Name: <input type="text" name="user_name"><br>
                <hr><br>
                Email: <input type="email" name="Email" ><br>
                <hr><br>
                Paasword:<input type="password" name="password" ><br>
                <hr><br>

                <center>
                <button type="submit" name="confirm" >Confirm registration</button>

            </fieldset>
        </center>
    </form>

    <?php
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["confirm"]))
        {
            $id = $_POST ["id"];
            $name = $_POST["user_name"];
            $email = $_POST["Email"];
            $password = $_POST["password"];

            if (empty($id) || empty($name) || empty($email) || empty($password)) {
                echo "please fillup all the information";
            }
            else
            {
                $sql2 =" INSERT INTO info1 (`id`, `name`, `email`, `password`) VALUES ($id, '$name', '$email', '$password')";
                $res1= $res= mysqli_query($conn,$sql2);
                echo "registration sucessful!";
                header("Location: lab2.php");

            }
           
        }
        else
        
        $conn->close();
    ?>
    
</body>