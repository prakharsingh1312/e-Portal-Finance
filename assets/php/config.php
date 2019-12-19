<?php
//mysqli connection details
define('global_mysqli_server', '');
define('global_mysqli_user', '');
define('global_mysqli_password', '');
define('global_mysqli_database', '');
$dbconfig = new mysqli(global_mysqli_server,global_mysqli_user,global_mysqli_password,global_mysqli_database);

if($dbconfig->connect_error)
{
	echo "Connection Failed : ".$dbconfig->connect_error;
}

//table details
define('global_mysqli_users_table','user_accounts');
define('global_mysqli_departments_table','departments');
define('global_mysqli_departments_table','departments');

//other settings

?>
