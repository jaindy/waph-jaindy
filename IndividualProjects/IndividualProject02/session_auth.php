 <?php
  	$lifetime=15*60;
  	$path="/";
  	$domain="192.168.56.101";
  	$secure=TRUE;
  	$httponly=TRUE;
  	session_set_cookie_params($lifetime,$path,$domain,$secure,$httponly); 
 	session_start();  
  	if(!isset($_SESSION['authenticated']) AND $_SESSION['authenticated'] !=TRUE){
  		session_destroy();
  		echo "<script>alert('You are not Logged in. Please login');</script>";
  		header("Refesh:0; url=Loginform.php");
  		die();
  	}
  	if($_SESSION['browser'] !=$_SESSION['HTTP_USER_AGENT']){
  		session_destroy();
  		echo "<script>alert('Session hijacking attack is detected!');</script>";
  		header("Refesh:0; url=Loginform.php");
  		die();
  		
  	}

	
?>





