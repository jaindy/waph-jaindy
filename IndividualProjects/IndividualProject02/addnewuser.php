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
$name= $_POST["name"];
$email= $_POST["email"];
if(isset($username) and isset($password) and isset($name) and isset($email) ){

	if (addnewuser($username,$password,$name,$email)){
		echo "Congratulations! you have sucessfully registered in the system" <a href='./Loginform.php'>Please Login<a>;
	}else{
	echo "Registration failed! please try again.";
	}
}
else{
	echo "No username/password provided.";
}
	
  	function addnewuser($username, $password,$name,$email) {
  	
	$mysqli = new mysqli('localhost','jaindy','#nanuDJ2024' ,'waph' );
	
	if($mysqli->connect_errno){
	printf("DB connection failed",$mysqli->connect_error);
	return false;
	}
  	
	$prepared_sql="INSERT INTO account (username,password,name,email)Values(?,md5(?),?,?)";
  	$stmt=$mysqli->prepare($prepared_sql);
  	$stmt->bind_param("ssss",$username, $password,$name,$email); 	
  	if($stmt->execute()) 	return TRUE;
  	return false;
  	}
?>
</body>
</html>

