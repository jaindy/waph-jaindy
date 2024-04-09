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
   $name= $_POST["name"];
   $email= $_POST["email"];
   if(isset($username) and isset($password) and isset($name) and isset($email) ){

    if (addnewuser($username,$password,$name,$email)){
     $_SESSION['authenticated']=TRUE;
     $_SESSION['username']= $_POST["username"];
     $_SESSION['browser']=$_SESSION['HTTP_USER_AGENT'];
     echo "Congratulations! you have sucessfully registered in the system";
     echo "<script>alert('Congratulations! you have sucessfully registered in the system');window.location='Loginform.php';</script>";

   }else{
     
     echo "Registration failed! please try again.";
     session_destroy();
     die();
   }
 }
 else{
  
  echo "<script>alert('No username/password provided');window.location='registrationform.php';</script>";
  
  
}

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

function addnewuser($username, $password,$name,$email) {
  
  $mysqli = new mysqli('localhost','jaindy','#nanuDJ2024' ,'waph' );
  
  if($mysqli->connect_errno){
   printf("DB connection failed",$mysqli->connect_error);
   return false;
 }
 

 $query = "SELECT * FROM account WHERE username = ?";
 $st = $mysqli->prepare($query);
 $st->bind_param('s', $username);
 $st->execute();
 $result = $st->get_result();
 if($result->num_rows ==1)
 {
  echo "<script>alert('Username is already exists. please provide another username.');</script>";
  return false; 
}else{


  $prepared_sql="INSERT INTO account (username,password,name,email)Values(?,md5(?),?,?)";
  $stmt=$mysqli->prepare($prepared_sql);
  $stmt->bind_param("ssss",$username, $password,$name,$email); 	
  if($stmt->execute()) 	

    return TRUE;
  
  return false;
  
}
}
?>
<br/>

</body>
</html>

