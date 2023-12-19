<?php 
include_once 'database.php';
session_start();
$name = $_SESSION["user_name"];

function getpost(){
    $conn = getConnection();
    $sql= "select * from post";
    $res =mysqli_query($conn,$sql);
    return $res;
}

function getlikes($created){
    $conn= getConnection();
    $sql= "UPDATE post SET likes = likes + 1 WHERE created = '$created'";
    $res =mysqli_query($conn,$sql);
    return $res;
}
function getdislikes($created){
    $conn= getConnection();
    $sql= "UPDATE post SET dislike_count = dislike_count + 1 WHERE created = '$created'";
    $res =mysqli_query($conn,$sql);
    return $res;
}





?>