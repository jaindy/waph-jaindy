  <!DOCTYPE html>
  <html lang="en">
  <head>
  	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
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



function displayinformation() {
  		$mysqli = new mysqli('localhost','jaindy','#nanuDJ2024' ,'waph' );  
  		if($mysqli->connect_errno){
  			printf("DB connection failed",$mysqli->connect_error);
  			exit();
}  		
  		
$query = "SELECT * FROM account WHERE username='jaindy'";
if ($result = $mysqli->query($query)) {
          
        
        while ($row = $result->fetch_assoc()) {
    echo $row['name'];
}
        
        
return true;
}
else{
return false;
}
}
  	?>
   <?php
  	
    function displayinformation() {
  
      $mysqli = new mysqli('localhost','jaindy','#nanuDJ2024' ,'waph' );
      if($mysqli->connect_errno){
        printf("DB connection failed",$mysqli->connect_error);
        exit();
      }

      $query = "SELECT * FROM account WHERE username='jaindy'";
     if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
    
        $field1name = $row["name"];
        $field2name = $row["email"];
        echo  "Name: ";
        echo $field1name.'<br />';
        echo "Email: ";
        echo $field2name.'<br />';    
    }
return true;
}
else{
return false;
}
    }
?>
  </body>
  </html>

  







  </body>
  </html>

