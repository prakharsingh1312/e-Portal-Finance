<?php 
include('../../assets/php/functions.php');
if (!logged_in()){
  header("location:../#login");
}
?>