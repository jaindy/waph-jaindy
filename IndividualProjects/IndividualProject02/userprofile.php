  <!DOCTYPE html>
  <html lang="en">
  <head>
  	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
    <script>
     function editprofile() {
        var myprofile = document.getElementById("myprofile");
        if (myprofile.style.display === "none") {
            myprofile.style.display = "block";
        } else {
            myprofile.style.display = "none";
        }
    };
    </script>

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

?>
	<div class="header">
  	<p style="text-align: left;"> Welcome <?php echo htmlentities($_POST['username']); ?> !</p>	
		<a href="#myprofile" id="profile" onclick="editprofile()"> Edit Profile</a>
		<a href="Loginform.php">Logout</a>

	</div>
		
	<?php	
			
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
  		while ($row = $result->fetch_assoc()) {
  		  echo "Name: " .$row['name']."</br>";
  		  echo "Email: ".$row['email'];
}
  
  		if($result->num_rows ==1)
  			return TRUE;
  		return false;			
  	}
  	?>
   
  
    <!-- Myprofile-->
    <section class="resume-section" id="myprofile" style="display:None">
      <div>
        
    <form id="accesspanel" method="post">
      <h1 id="litheader">Edit Information</h1>
      <div class="inset">
          <p>
          <input type="text" class="text_field" name="username" placeholder="Enter username" required>
        </p>
        <p>
          <input type="text" class="text_field" name="name" placeholder="Enter full name" required>
        </p>

       <p>
         <input type="text" class="text_field" name="email" required
         pattern="^[\w.-]+@[\w-]+(.[\w-]+)*$" title="Enter a valid email"
         placeholder="Enter a valid email" onchange="this.setCustomValidity(this.validity.patternMismatch?this.title: '');"/><br>
       </p>

     </div>
      <p class="p-container">
      <input type="submit" name="update" id="go" value="Update">
    </p>
   </form>
      </div>
    </section>
  
  <?php

if(isset($_POST['update'])){

  if(editprofile($_POST["name"], $_POST["email"],$_POST["username"])){
 echo "<script>alert('profile updated');</script>";
    }else{
    session_destroy();
    echo "<script>alert('Invalid name/email')</script>";
    die();
}}

  function editprofile($name, $email,$username) {

      $mysqli = new mysqli('localhost','jaindy','#nanuDJ2024' ,'waph' );
   
      if($mysqli->connect_errno){
        printf("DB connection failed",$mysqli->connect_error);
        exit();
      }
      
      $sql= "UPDATE account set name=?, email=? WHERE username=?";
      $stmt=$mysqli->prepare($sql);
      $stmt->bind_param("sss",$name, $email,$username);

      if($stmt->execute())  return TRUE;
    return false;
   
    }
  ?>
 

</body>
</html>







  </body>
  </html>

