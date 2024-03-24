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
 

  
    <form action="addnewuser.php" method="POST" class="form login">
    <div class="container">
      <h1>New User Registraion form, WAPH</h1>
      
      Name: <input type="text" class="text_field" name="name" placeholder="Enter full name" required>
      Username: <input type="text" class="text_field" name="username" placeholder="Enter username"  required>
      Email Address:<input type="text" class="text_field" name="email" required
      pattern="^[\w.-]+@[\w-]+(.[\w-]+)*$" title="Enter a valid email"
      placeholder="Enter a valid email" onchange="this.setCustomValidity(this.validity.patternMismatch?this.title: '');"/><br>
	

      Password:<input type="password" name="password" required
      pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&])[\w!@#$%^&]{8,}$"
      placeholder="Enter password" title="Password must have at least 8 characters with 1 special symbol !@#$%^& 1 number, 1
      lowercase, and 1 UPPERCASE" onchange="this.setCustomValidity(this.validity.patternMismatch?this.title:
      ''); form.repassword.pattern = this.value;"/><br>

      Retype Password: <input type="password" class="text_field" name="repassword"
      placeholder="Retype your password" required title="Password does not match"
      onchange="this.setCustomValidity(this.validity.patternMismatch?this.title: '');"/> <br>

      <button type="submit" class="registerbtn">Login</button>
      </div>
    </form>
      <?php
    //some code here
    echo "Visited time: " . date("Y-m-d h:i:sa")
    ?>
        <div id="digit-clock"></div>  
  </body>
  </html>




