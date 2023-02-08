<?php
$pid=$_SESSION['ID'];
$getprofile=mysqli_query ($conn, "select * from users where id ='$pid'");
$rowp=mysqli_fetch_assoc($getprofile);
if(isset($_POST['submit'])){
	$tel=$_POST['tel'];
	$date=$_POST['dob'];
	$location=$_POST['location'];
	if(empty($tel)||empty($date)||empty($location)){
	echo "<script>
alert('Please fill the required inputs')
</script>";
	}
	else{
		$sql="update users set mobile='$tel',dob='$date', location='$location' where id='$pid'";
		if(mysqli_query($conn, $sql)) {
			echo "<script>
alert('Information updated successflly!')
</script>";
		}
		else{
			echo "<script>
alert('An error occured')
</script>";
		}
	}
}

?>