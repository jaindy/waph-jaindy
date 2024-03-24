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
//echo "change password -> username=$username; password=$password";
	if (changepassword($username,$password)){
		echo "Password changed successfully";
	}else{
	echo "Change password failed";
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
  	
	
	$prepared_sql="UPDATE account SET password =md5(?) WHERE username=?";
  	$stmt=$mysqli->prepare($prepared_sql);
  	$stmt->bind_param("ss",$username, $password); 	
  	if($stmt->execute()) 	return TRUE;
  	return false;
  	}
?>
</body>
</html>


