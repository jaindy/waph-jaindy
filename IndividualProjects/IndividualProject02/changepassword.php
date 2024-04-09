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
 			$_SESSION['authenticated']=TRUE;
 			$_SESSION['username']= $_POST["username"];
 			$_SESSION['browser']=$_SESSION['HTTP_USER_AGENT'];

 			echo "<script>alert(' Password changed successfully');window.location='Loginform.php';</script>";

 		}else{
 			session_destroy();
 			echo "Failed to change password";
 			die();
 		}
 	}
 	else{
 		echo "<script>alert('No new password provided');window.location='changepasswordform.php';</script>";

 	}


 	if(!isset($_SESSION['authenticated']) AND $_SESSION['authenticated'] !=TRUE){
 		session_destroy();
 		echo "<script>alert('Please change your password');</script>";
 		header("Refesh:0; url=changepasswordform.php");
 		die();
 	}
 	if($_SESSION['browser'] !=$_SESSION['HTTP_USER_AGENT']){
 		session_destroy();
 		echo "<script>alert('Session hijacking attack is detected!');</script>";
 		header("Refesh:0; url=changepasswordform.php");
 		die();

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

 		<a href="Loginform.php"> Login </a>
 	</div>
 </body>
 </html>
