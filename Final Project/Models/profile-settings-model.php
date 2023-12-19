<?php 
include_once 'database.php';

function update_setting( $new_mail,$new_pass,$contract,$name){
    $conn= getConnection();
    $sql= "UPDATE login SET user_mail = $new_mail, password=$new_pass, contract=$contract WHERE user_name='$name'";
    $res=mysqli_query($conn,$sql);
    return $res;

}
