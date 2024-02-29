<?php
	session_start();    
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	if(isset($_POST["username"]) and isset($_POST["password"])){

		


	if (checklogin_mysql($username,$password)) {
	$_SESSION['authenticated']=TRUE;
	$_SESSION['username']= $_POST["username"];
	}else{
		session_destroy();
		echo "<script>alert('Invalid username/password');window.location='form.php';</script>";
		die();
	}
}

	if(!isset($_SESSION['authenticated']) or $_SESSION['authenticated'] !=TRUE){
		session_destroy();
		echo "<script>alert('You are not login. Please login again');</script>";
		header("Refesh:0; url=form.php");
		die();
	}
	
	function checklogin($username, $password) {
	
			$account = array("admin","1234");
		if (($username== $account[0]) and ($password == $account[1])) 
		  return TRUE;
		else 
		  return FALSE;
  	}
  	
  	function checklogin_mysql($username, $password) {
  	
	$mysqli = new mysqli('localhost','jaindy','#nanuDJ2024' ,'waph' );
	
	if($mysqli->connect_errno){
	printf("DB connection failed",$mysqli->connect_error);
	exit();
	}
  	
	$sql= "SELECT * FROM users WHERE username=? AND password=md5(?)";
  	$stmt=$mysqli->prepare($sql);
  	$stmt->bind_param("ss",$username, $password);
  	$stmt->execute();
  	$result=$stmt->get_result();
  	
  	if($result->num_rows ==1) 	return TRUE;
  	return false;
  	}
?>





	<h2> Welcome <?php echo htmlentities($_SESSION['username']); ?> !</h2>

<a href="logout.php"> Logout</a>