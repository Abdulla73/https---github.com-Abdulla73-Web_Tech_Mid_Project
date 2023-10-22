<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["user"]) && isset($_GET["password"])) {
        $userj = $_GET["user"];
        $password = $_GET["password"];
        echo "<h1>Hello, $userj!</h1>";
        echo $password;
    } else {
        echo "<h1>No username or password provided!</h1>";
    }
} else {
    echo "<h1>Invalid request method!</h1>";
}
?>