<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WAPH-Login page</title>
  <script type="text/javascript">
      function displayTime() {
        document.getElementById('digit-clock').innerHTML = "Current time:" + new Date();
      }
      setInterval(displayTime,500);
  </script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  

  <form action="userprofile.php" method="POST" class="form login">
  <div class="container">
    <h1>A Simple login form, WAPH</h1>
    Username:<input type="text" class="text_field" name="username" /> <br>
    Password: <input type="password" class="text_field" name="password" /> <br>
    <button class="registerbtn" type="submit">Login</button>
  </form>
  </div>
    <div id="digit-clock"></div>  
<?php
  //some code here
  echo "Visited time: " . date("Y-m-d h:i:sa")
?>
</body>
</html>
