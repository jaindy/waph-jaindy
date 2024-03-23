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
    
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: burlywood;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
  width: 50%;
  margin:auto;
 

  /* Fallback color */
  background: rgba(0, 0, 0, 0.1); /* Black background with 0.5 opacity */
}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.2); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 5px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
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




