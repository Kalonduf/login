<?php
if(!isset($_SESSION)){
	session_start();

}
function checkemailexist($email){
	global $conn;
	$sql=mysqli_query($conn,"select email from users where email='$email'");
	if(mysqli_num_rows($sql)>0){
		return true;
	
	}
	else{
		return false;
	}
}
if(isset($_POST['regbtn'])){
	$fname=$_POST['names'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpwd=$_POST['cpassword'];
	if(empty($fname)||empty($email)||empty($password)||empty($cpwd)){
		echo"<script>
		alert('Please fill in all the fields')
		</script>";
	}
	elseif(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
		echo"<script>
		alert('Please provide valid Email')
		</script>";
	
	}
	elseif(checkemailexist($email)){
		echo"<script>
		alert('The email is assoiated with an account')
		</script>";
	}
	elseif($password!==$cpwd){
		echo"<script>
		alert('The passwords do not match')
		</script>";
	
	}
	else{
		$hash=password_hash($password,PASSWORD_DEFAULT);
		
		$reg="insert into users set names='$fname',email='$email',password='$hash'";
		if(mysqli_query($conn,$reg)){
			echo"<script>
		alert('Dear user, you have registered successfully')
		</script>";
		}
		else{
			echo"<script>
		alert('An error occuped')
		</script>";
		}
	}
}

if(isset($_POST['loginbtn'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	if(empty($email)||empty($password)){
		echo "<script>
		alert('all details are required')
		</script>";
	}
	else{
		$checkuser=mysqli_query($conn,"select * from users where email='$email'");
		
		if(mysqli_num_rows($checkuser)<1){
echo"<script>
alert('Your account was not found, kindly register')
</script>";
		}
		else{
			$row=mysqli_fetch_assoc($checkuser);
			if(!password_verify($password,$row['password'])){
				echo"<script>
				alert('You have entered wrong password, kindly try again')
				</script>";
			}
			else{
				$_SESSION['ID']=$row['id'];
				$_SESSION['name']=$row['names'];
				$_SESSION['email']=$row['email'];
				
				echo"<script>
alert('login successful')
window.location.href='dashboard.php';
</script>";
			}
		}
	}
}
if(isset($_GET['Logout'])){
	session_destroy();
	header("location:index.php");
}
?>