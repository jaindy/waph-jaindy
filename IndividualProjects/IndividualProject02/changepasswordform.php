<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WAPH-Change password page</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="header">

</div>

  <form action="changepassword.php" method="POST" class="form login">
    <h1>Change password form, WAPH</h1>
    <div class="inset">
   <p>
    <input type="text" class="text_field" name="username" placeholder="Enter username"/> <br>
   </p>
   <p><input type="password" name="password" required
      pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&])[\w!@#$%^&]{8,}$"
      placeholder="Enter password" title="Password must have at least 8 characters with 1 special symbol !@#$%^& 1 number, 1
      lowercase, and 1 UPPERCASE" onchange="this.setCustomValidity(this.validity.patternMismatch?this.title:
      ''); form.repassword.pattern = this.value;"/><br>
</p>
    <p><input type="password" class="text_field" name="newpassword"
      placeholder="Retype your password" required title="Password does not match"
      onchange="this.setCustomValidity(this.validity.patternMismatch?this.title: '');"/> <br>
    </p>
</div>
   
    <p class="p-container">
      <input type="submit" name="Submit" id="go" value="Submit">
    </p>
   </form>




<?php
 

  $rand = bin2hex(openssl_random_pseudo_bytes(16));
  $_SESSION['nocsrftoken'] = $rand;

?>

</body>
</html>
