<?php
include "connection.php";
include "auth.php";
include "checksession.php";
include "profilehelper.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>profile</title>
  <?php
  include 'styles.php'
  ?>
</head>
<body>

<?php
include 'navbar.php'
?>
<div class="container">
  <h3>Update your profile</h3>
  <form action="" method="POST">
  <div class="form-group">
    <label for="">Name:</label>
    <input type="text" value="<?= $rowp['names']?>" disabled class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" value="<?= $rowp['email']?>"disabled class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="tel">Mobile number:</label>
    <input type="tel" max-length="10" name="tel" value="<?= $rowp['mobile']?>" class="form-control" id="tel">
  </div>
  <div class="form-group">
    <label for="email">Date of birth:</label>
    <input type="date" name="dob" value="<?= $rowp['dob']?>" class="form-control" id="email">
    <div class="form-group">
    <label for="email">location</label>
    <input type="text" name="location" value="<?= $rowp['location']?>" class="form-control" id="loc">
  </div>
  </div>
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
</div>

</body>
</html>

