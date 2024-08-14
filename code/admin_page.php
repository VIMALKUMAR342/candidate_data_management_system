<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin_name']))
{
   header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome</h1>
      <h2><span><?php echo $_SESSION['admin_name'] ?></span></h2>
      <p>this is an admin page</p>
      <a href="register_form.php" class="btn">candidate sign up</a>
      <a href="new_reg.php" class="btn">Add candidate information</a>
      <a href="logout.php" class="btn">logout</a>
   </div>
</div>
</body>
</html>