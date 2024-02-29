<?php
	session_start();    
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	if (checklogin_mysql($username,$password)) {
?>
	<h2> Welcome <?php echo htmlentities($_POST['username']); ?> !</h2>
<?php		
	}else{
		echo "<script>alert('Invalid username/password');window.location='form.php';</script>";
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
  	
  	if($result->num_rows ==1)
  	return TRUE;
  	return false;
  	}
?>


