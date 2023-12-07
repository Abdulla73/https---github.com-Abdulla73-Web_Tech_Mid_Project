<?php 
include_once '../Models/database.php';

function validation($user_mail,$password)
{
    $con=getConnection();
	$sql="SELECT user_mail, password FROM login WHERE user_mail = '$user_mail' AND password='$password'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count==1)
	{
		return true;
	}
	else
	{
		return false;
	}


}

function getUsername($user_mail)
{
    $con = getConnection();
    $sql = "SELECT user_name FROM login WHERE user_mail = '$user_mail'";
    $res = mysqli_query($con, $sql);
    
    if ($res && $row = mysqli_fetch_assoc($res)) {
        return $row['user_name'];
    }

    return null; 
}


?>