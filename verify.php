<?php
require('assets/php/functions.php');
if(isset($_GET['verify'])&&isset($_GET['token'])&&isset($_GET['hash']))
{
	$token=mysqli_real_escape_string($dbconfig,$_GET['token']);
	$hash=mysqli_real_escape_string($dbconfig,$_GET['hash']);
	if(verify_account($token,$hash)==1)
		echo'<script type="text/javascript">alert("Your email address has been verified you can now login.");</script>';
	else
		echo'<script type="text/javascript">alert("Invalid verification token.");</script>';
	header('Location:index.php');
}
?>