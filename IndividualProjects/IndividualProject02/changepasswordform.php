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



<div class="container">
  <form action="changepassword.php" method="POST" class="form login">
    <h1>Change password form, WAPH</h1>
    Username:<input type="text" class="text_field" name="username" /> <br>
   New Password:<input type="password" name="password" required
      pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&])[\w!@#$%^&]{8,}$"
      placeholder="Enter password" title="Password must have at least 8 characters with 1 special symbol !@#$%^& 1 number, 1
      lowercase, and 1 UPPERCASE" onchange="this.setCustomValidity(this.validity.patternMismatch?this.title:
      ''); form.repassword.pattern = this.value;"/><br>

    Retype New Password: <input type="password" class="text_field" name="newpassword"
      placeholder="Retype your password" required title="Password does not match"
      onchange="this.setCustomValidity(this.validity.patternMismatch?this.title: '');"/> <br>
    

   
    
    <button class="button" type="submit">Submit</button>
  </form>
</div>
  <div id="digit-clock"></div>  
<?php
  //some code here
  echo "Visited time: " . date("Y-m-d h:i:sa")
?>
</body>
</html>
