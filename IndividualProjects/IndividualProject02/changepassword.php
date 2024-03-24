 <!DOCTYPE html>
 <html lang="en">
  <head>
    <meta charset="utf-8">
<style>
	body {
	  font-family: Arial, Helvetica, sans-serif;
	  background-color: burlywood;
	}
</style>
</head>
<body>
<?php
$username= $_POST["username"];
$password= $_POST["password"];
if(isset($username) and isset($password)){

	if (chnagepassword($username,$password)){
		echo "password chnaged success";
	}else{
	echo "Failed to change password";
	}
}
else{
	echo "no username/password provided.";
}
	
  	function chnagepassword($username, $password) {
  	
	$mysqli = new mysqli('localhost','jaindy','#nanuDJ2024' ,'waph' );
	
	if($mysqli->connect_errno){
	printf("DB connection failed",$mysqli->connect_error);
	return false;
	}
  	
	//$sql= "SELECT * FROM users WHERE username=? AND password=md5(?)";
	$prepared_sql="UPDATE account set password=md5(?) where username=?";
  	$stmt=$mysqli->prepare($prepared_sql);
  	$stmt->bind_param("ss",$username, $password); 	
  	if($stmt->execute()) 	return TRUE;
  	return false;
  	}
?>
</body>
</html>


