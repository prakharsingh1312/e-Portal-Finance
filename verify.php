<?php 
require('assets/php/functions.php');
if($_SERVER['REQUEST_METHOD'=="POST"]){
		$token=mysqli_real_escape_string($dbconfig,$_GET['token']);
	$hash=mysqli_real_escape_string($dbconfig,$_GET['hash']);
	$password=mysqli_real_escape_string($dbconfig,$_POST['password']);
	if(verify_account_password()){
		echo'<script type="text/javascript">alert("Your email address has been verified you can now login.");</script>';
		header('location:index.php#login');
	}
	else{
		echo'<script type="text/javascript">alert("Invalid Token.");</script>';
		header('location:index.php#login');
	}
}?><!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form">
      
     
      
      <div class="tab-content">
        <?php
require('assets/php/functions.php');
if(isset($_GET['verify'])&&isset($_GET['token'])&&isset($_GET['hash']))
{
	$token=mysqli_real_escape_string($dbconfig,$_GET['token']);
	$hash=mysqli_real_escape_string($dbconfig,$_GET['hash']);
	echo verify_account($token,$hash);
}
?>

        <!-- tab-content -->
      
</div> <!-- /form -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>