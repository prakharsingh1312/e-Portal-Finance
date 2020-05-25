<?php
  include('../../assets/php/functions.php');
if(isset($_GET['dept'])){
	$dept_id=mysqli_real_escape_string($dbconfig,$_POST['dept_id']);
	echo get_forms_temp($dept_id);
}
else
  echo get_forms_temp(0);
 ?>
