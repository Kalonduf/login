<?php
include "connection.php";
include "auth.php";
include "checksession.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>dashboard</title>
  <?php
  include 'styles.php'
  ?>
</head>
<body>

<?php
include 'navbar.php'
?>
<div class="container">
  <h3>dashboard</h3>
  <p>Welcome, <?php echo $_SESSION['name']?></p>
</div>

</body>
</html>

