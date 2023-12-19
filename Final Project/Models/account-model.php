<?php 
include_once 'database.php';

function bank_name($name){
    $conn= getConnection();
    $sql= "SELECT * FROM bank_info WHERE user_name='$name'";
    $res=mysqli_query($conn,$sql);
    return $res;

}

function acc_holder($name){
    $conn= getConnection();
    $sql= "SELECT * FROM bank_info WHERE user_name='$name'";
    $res=mysqli_query($conn,$sql);
    return $res;

}


function acc_number($name){
    $conn= getConnection();
    $sql= "SELECT * FROM bank_info WHERE user_name='$name'";
    $res=mysqli_query($conn,$sql);
    return $res;

}

function acc_type($name){
    $conn= getConnection();
    $sql= "SELECT * FROM bank_info WHERE user_name='$name'";
    $res=mysqli_query($conn,$sql);
    return $res;

}

function total_bal($name){
    $conn= getConnection();
    $sql= "SELECT * FROM bank_info WHERE user_name='$name'";
    $res=mysqli_query($conn,$sql);
    return $res;

}

function new_bal($name){
    $conn= getConnection();
    $sql= "SELECT total_bal FROM bank_info WHERE user_name='$name'";
    $res=mysqli_query($conn,$sql);
    return $res;
}

function update_bal($name,$newTotalBalance){
    $conn= getConnection();
    $sqlUpdateBalance = "UPDATE bank_info SET total_bal = $newTotalBalance WHERE user_name='$name'";
    $res=mysqli_query($conn,$sqlUpdateBalance);
    return $res;
}

?>