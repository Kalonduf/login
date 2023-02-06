<?php
include "connection.php";
include "auth.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Login Form</div>
      <form action="" method="POST">
        <div class="field">
          <input id="email"
          name="email"
        
                 type="text" required>
          <label for="email">Email Address</label>
        </div>
        <div class="field">
          <input id="pwd" 
          name="password"
          type="password" required>
        
          <label for="pwd">Password</label>
        </div>
<!--        <div class="content">-->
<!--         -->
<!--          <div class="pass-link"><a href="#">Forgot password?</a></div>-->
<!--        </div>-->
        <div class="field">
          <input type="submit"
          name="loginbtn"
          value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="register.php">Signup now</a></div>
      </form>
    </div>

  </body>
</html>
