 <!DOCTYPE html>
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<?php

  	$lifetime=15*60;
  	$path="/";
  	$domain="192.168.56.101";
  	$secure=TRUE;
  	$httponly=TRUE;
  	session_set_cookie_params($lifetime,$path,$domain,$secure,$httponly); 
  	  
  	session_start();  
$username= $_POST["username"];
$password= $_POST["password"];
$token=$_POST['nocsrftoken'];

if(isset($token) or ($token!=$_SESSION["nocsrftoken"])){
	echo "CSRF Attack is detected";
	die();
}

if(isset($username) and isset($password)){

	if (changepassword($username,$password)){

		echo "password changed success";
	}else{
	echo "Failed to change password";
	}
}
else{
	echo "no username/password provided.";
}

  	function changepassword($username, $password) {
  	
$mysqli = new mysqli('localhost','jaindy','#nanuDJ2024' ,'waph' );
	
	if($mysqli->connect_errno){
	printf("DB connection failed",$mysqli->connect_error);
	return false;
	}
  
	$prepared_sql="UPDATE account set password=md5(?) where username=?;";
  	$stmt=$mysqli->prepare($prepared_sql);
  	$stmt->bind_param("ss", $password,$username); 	
  	if($stmt->execute()) 	return TRUE;
  	return false;
  	}

?>
<div class="header">
  	<p style="text-align: left;">Password changed successfully</p>
<a href="Loginform.php"> Login </a>
</div>
</body>
</html>
