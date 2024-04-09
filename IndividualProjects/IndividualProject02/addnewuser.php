  <!DOCTYPE html>
  <html lang="en">
  <head>
  	<meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="styles.css">

 </head>
 <body>
   <?php
   require "session_auth.php";

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

