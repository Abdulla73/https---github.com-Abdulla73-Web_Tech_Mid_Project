<?php 
include_once '../Models/database.php';

function check_acc($user_mail)
{
    $con=getConnection();
	$sql="SELECT user_mail FROM login WHERE user_mail = '$user_mail'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count>0)
	{
		return true;
	}
	else
	{
		return false;
	}


}

function create_acc ($user_name,$user_mail,$password)
{
    $conn =getConnection();
    $sql = "INSERT INTO login (user_name, user_mail, password) VALUES ('$user_name', '$user_mail', '$password')";
    $res=mysqli_query($conn,$sql);
    return $res;
}

?>