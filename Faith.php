<?php
if(isset($_POST['regbtn'])){
	$fname=$_POST['names'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$conpwrd=$_POST['cpwd'];
	if(empty($fnames)||empty($emil)||empty($password)||empty($conpwrd)){
		echo"<script>
		alert(Please enter all the details in the spaces provided)
		</script>";
	}
	elseif($password!==$conpwrd){
		echo"<script>
		alert(The passwords provided do not match, kindly try again)
		</script>";
	}
	elseif(filter_var(FILTER_VALIDATE_EMAIL)===false){
		echo"<script>
		alert(Please enter valid Email)
		</script>";
	}
	else{
		$hash=password_hash($password,PASSWORD_DEFAULT);
		$get=("into users set names='$fnames', email='$email', password='$hash'");
	}
}