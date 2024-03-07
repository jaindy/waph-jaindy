<?php
$username= $_POST["username"];
$password= $_POST["password"];
if(isset($username) and isset($password)){
echo "change password -> username=$username; password=$password";
	/*if (addnewuser($username,$password)){
		echo "Registration success";
	}else{
	echo "Registration failed";
	}*/
}
else{
	echo "no username/password provided.";
}
	
  	function addnewuser($username, $password) {
  	
	$mysqli = new mysqli('localhost','jaindy','#nanuDJ2024' ,'waph' );
	
	if($mysqli->connect_errno){
	printf("DB connection failed",$mysqli->connect_error);
	return false;
	}
  	
	//$sql= "SELECT * FROM users WHERE username=? AND password=md5(?)";
	$prepared_sql="INSERT INTO users (username,password)Values(?,md5(?))";
  	$stmt=$mysqli->prepare($prepared_sql);
  	$stmt->bind_param("ss",$username, $password); 	
  	if($stmt->execute()) 	return TRUE;
  	return false;
  	}
?>


