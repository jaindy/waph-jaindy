  <!DOCTYPE html>
  <html lang="en">
  <head>
  	<meta charset="utf-8">
  </head>
  <body>
  	<?php

  	$lifetime=15*60;
  	$path="/";
  	$domain="waph-team15.minifacebook.com";
  	$secure=TRUE;
  	$httponly=TRUE;
  	session_set_cookie_params($lifetime,$path,$domain,$secure,$httponly); 
  	session_start();    
  	
  	$username=$_POST["username"];
  	$password=$_POST["password"];


  	if (checklogin_mysql($username,$password)) {
  		?>
  		<h2> Welcome <?php echo htmlentities($_POST['username']); ?> !</h2>
  		<?php		
  	}else{
  		echo "<script>alert('Invalid username/password');window.location='Loginform.php';</script>";
  		die();
  	}
  	

  	function checklogin_mysql($username, $password) {
  		$mysqli = new mysqli('localhost','waphteam15','123456' ,'WAPH_TEAM' );
  		
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
  	<a href="logout.php"> Logout </a>
  </body>
  </html>

