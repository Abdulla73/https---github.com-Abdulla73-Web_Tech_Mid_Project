<?php 
function connection(){
    $servername ="localhost";
    $username ="root";
    $passwoed ="";
    $dbname ="home";
    $conn = new mysqli($servername, $username, $passwoed, $dbname) ;
    return $conn;

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}
?>