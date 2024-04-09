  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <title>WAPH-Registration page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>

<div class="header">
<a href='Loginform.php'> Login </a>
</div>
    <form id="accesspanel" action="addnewuser.php" method="post">
      <h1 id="litheader">Sign UP</h1>
      <div class="inset">
        <p>
          <input type="text" class="text_field" name="name" placeholder="Enter full name" required>
        </p>
        <p>
         <input type="text" class="text_field" name="username"  pattern="\w+" placeholder="Enter username"  required>
       </p>
       <p>
         <input type="text" class="text_field" name="email" required
         pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Enter a valid email"
         placeholder="Enter a valid email" onchange="this.setCustomValidity(this.validity.patternMismatch?this.title: '');"/><br>
       </p>
       <p>
         <input type="password" name="password" required
         pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&])[\w!@#$%^&]{8,}$"
         placeholder="Enter password" title="Password must have at least 8 characters with 1 special symbol !@#$%^& 1 number, 1
         lowercase, and 1 UPPERCASE" onchange="this.setCustomValidity(this.validity.patternMismatch?this.title:
         ''); form.repassword.pattern = this.value;"/>
       </p>
       <p>
         <input type="password" class="text_field" name="repassword"
         placeholder="Retype your password" required title="Password does not match"
         onchange="this.setCustomValidity(this.validity.patternMismatch?this.title: '');"/> <br>

       </p>
     </div>
     <p class="p-container">
      <input type="submit" name="Login" id="go" value="Register">
    </p>
  </form>


</body>
</html>




