 <!DOCTYPE html>
 <html lang="en">
  <head>
    <meta charset="utf-8">
</head>
<body>
<?php
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
  	
	$mysqli = new mysqli('localhost','waphteam15','123456' ,'WAPH_TEAM' );
	
	if($mysqli->connect_errno){
	printf("DB connection failed",$mysqli->connect_error);
	return false;
	}
  	
	//$sql= "SELECT * FROM users WHERE username=? AND password=md5(?)";
	$prepared_sql="UPDATE users set password=md5(?) where username=?;";
  	$stmt=$mysqli->prepare($prepared_sql);
  	$stmt->bind_param("ss", $password,$username); 	
  	if($stmt->execute()) 	return TRUE;
  	return false;
  	}

?>

<a href="Loginform.php"> Login </a>
</body>
</html>
