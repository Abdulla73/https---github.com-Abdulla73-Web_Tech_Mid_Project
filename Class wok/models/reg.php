<?php 
include_once 'database_conn.php';
include_once '../controllers/checkreg.php';

function auth($mai)
{
    $con=connection();
	$sql="select mail from user_lgin_info where mail='$mai'";
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

function registration($user_name,$mail,$password,$user_type)
{
    $conn= connection();
    $sql = "INSERT INTO user_lgin_info (user_name, mail, password, user_type) VALUES (?, ?, ?, ?)";
                
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $user_name, $mail, $password, $user_type); 
	if ($conn->query($sql) === TRUE) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		return false;
	}
   

}


?>