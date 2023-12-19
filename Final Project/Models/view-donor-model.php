<?php
include_once 'database.php';
function getdonor(){
    $conn= getConnection();
    $sql = "SELECT name, mobile, email FROM donor_list;";
    $res=mysqli_query($conn,$sql);
    return $res;
}

?>