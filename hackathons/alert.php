<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

</head>
<body>
 
<?php

  echo "<script>alert('level 6 hack by divyani jain');window.location='http://waph-hackathon.eastus.cloudapp.azure.com/xss/level6/echo.php';</script>";
	die();

?>
  <form method="POST" class="form login">
    Username:<input type="text" class="text_field" name="username" /> <br>
    Password: <input type="password" class="text_field" name="password" /> <br>
    <button class="button" type="submit">Login</button>
  </form>
</body>
</html>
