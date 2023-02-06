<?php
include "connection.php";
include "auth.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
    <div class="title">Sign up</div>
    <form action="" method="POST">
        <div class="field">
            <input id="names"
            name="names"
                   type="text" required>
            <label for="names">Full Names</label>
        </div>
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
        <div class="field">
            <input id="cpwd" 
            name="cpassword"
            type="password" required>
            <label for="cpwd">Confirm Password</label>
        </div>
        <div class="field">
            <input type="submit"
            name="regbtn"
            value="register">
        </div>
        <div class="signup-link">Already a member? <a href="index.php">Sign in</a></div>
    </form>
</div>

</body>
</html>
