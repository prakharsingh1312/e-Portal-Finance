<?php
session_start();
//mysqli connection details
define('global_mysqli_server', 'localhost');
define('global_mysqli_user', 'root');
define('global_mysqli_password', 'password');
define('global_mysqli_database', 'nit');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$dbconfig = new mysqli(global_mysqli_server,global_mysqli_user,global_mysqli_password,global_mysqli_database);

if($dbconfig->connect_error)
{
	echo "Connection Failed : ".$dbconfig->connect_error;
}

//table details
define('global_mysqli_users_table','user_accounts');
define('global_mysqli_departments_table','departments');
define('global_mysqli_forms_table','form_details');

//other settings
define('global_website_title','NIT From Portal');
define('global_salt','A4il0O12Desf');
?>
