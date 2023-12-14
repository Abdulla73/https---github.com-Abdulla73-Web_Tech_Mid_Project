<?php
include_once 'database.php';

function textpost($username,$postText){
    $conn =getConnection();
    $sql = "INSERT INTO post (user_name,post) VALUES ('$username', '$postText')";
    $res=mysqli_query($conn,$sql);
    return $res;
}

?>


