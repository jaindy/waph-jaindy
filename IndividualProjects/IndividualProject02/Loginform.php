<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WAPH-Login page</title>
  
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="header">
<a href='registrationform.php'> Sign UP </a>
</div>

  <form action="userprofile.php" method="POST" id="accesspanel" >
    <h1 id="litheader">A Simple login form, WAPH</h1>
 <div class="inset">
   <p>
    <input type="text" class="text_field" name="username" placeholder="Enter username" required /> <br>
  </p>
  <p>
    <input type="password" class="text_field" name="password" placeholder="Enter password" required /> <br>
  </p>
  </div>
    <p class="p-container">
      <input type="submit" name="Login" id="go" value="Login">
    </p>
  
  </form>



</body>
</html>
