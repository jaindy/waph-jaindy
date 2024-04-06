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
  	$username=$_POST["username"];
  	$password=$_POST["password"];

if(isset($_POST["username"]) and isset($_POST["password"])){

if (checklogin_mysql($username,$password)) {
		$_SESSION['authenticated']=TRUE;
		$_SESSION['username']= $_POST["username"];
		$_SESSION['browser']=$_SESSION['HTTP_USER_AGENT'];
	}else{
		session_destroy();
		echo "<script>alert('Invalid username/password');window.location='Loginform.php';</script>";
		die();
	}
}


if(!isset($_SESSION['authenticated']) AND $_SESSION['authenticated'] !=TRUE){
    session_destroy();
    echo "<script>alert('You are not login. Please login again');</script>";
    header("Refesh:0; url=Loginform.php");
    die();
  }
  if($_SESSION['browser'] !=$_SESSION['HTTP_USER_AGENT']){
    session_destroy();
    echo "<script>alert('Session hijacking attack is detected!');</script>";
    header("Refesh:0; url=Loginform.php");
    die();
    
  }

  	function checklogin_mysql($username, $password) {
  		$mysqli = new mysqli('localhost','jaindy','#nanuDJ2024' ,'waph' );
  
  
  		if($mysqli->connect_errno){
  			printf("DB connection failed",$mysqli->connect_error);
  			exit();
  		}
  		
  		$sql= "SELECT * FROM account WHERE username=? AND password=md5(?)";
  		$stmt=$mysqli->prepare($sql);
  		$stmt->bind_param("ss",$username, $password);
  		$stmt->execute();
  		$result=$stmt->get_result();
  		
  		if($result->num_rows ==1)
  			return TRUE;
  		return false;
  	}
  	?>
  	<div class="header">
  	<p style="text-align: left;">
  	Welcome  echo "<?php echo htmlentities($_POST['username']); ?>";
  	</p>
<a href="editProfile.php"> Manage Profile</a>
<a href="logout.php">Logout</a>

</div>
  	
  </body>
  </html>

