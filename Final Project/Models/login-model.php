<?php 
include_once '../Models/database.php';

function validation($user_mail,$password)
{
    $con=getConnection();
	$sql="SELECT user_mail, user_name, password FROM login WHERE user_mail = '$user_mail' AND password='$password'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($res && $row = mysqli_fetch_assoc($res))
	{
		return $row['user_name'];
	}
	else
	{
		return false;
	}


}

?>