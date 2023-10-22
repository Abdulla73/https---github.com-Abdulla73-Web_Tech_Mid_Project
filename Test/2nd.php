<!DOCTYPE html>
<html>
<head>
    <title>Display User Name</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        echo "<h1>Hello, $username!</h1>";
    } else {
        echo "<h1>No username provided!</h1>";
    }
    ?>
</body>
</html>
