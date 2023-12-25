<?php 
include_once 'database.php';

function user_mail($new_mail,$name){
    $conn= getConnection();
    $sql= "UPDATE login SET user_mail = $new_mail WHERE user_name='$name'";
    $res=mysqli_query($conn,$sql);
    return $res;
}

function user_pass($new_pass,$name){
    $conn= getConnection();
    $sql= "UPDATE login SET  password=$new_pass WHERE user_name='$name'";
    $res=mysqli_query($conn,$sql);
    return $res;
}

function user_contract($contract, $name){
    $conn= getConnection();
    $sql= "UPDATE login SET contract=$contract WHERE user_name='$name'";
    $res=mysqli_query($conn,$sql);
    return $res;
}
