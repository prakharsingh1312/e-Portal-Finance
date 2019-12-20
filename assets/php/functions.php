<?php
include('config.php');
    

	$dbconfig = new mysqli(global_mysqli_server,global_mysqli_user,global_mysqli_password,global_mysqli_database);
	function encrypt_password($password)
	{
		$password = crypt($password, '$1$' . global_salt);
		return($password);
	}


    function login($username,$password){
			global $dbconfig;
			$password=encrypt_password($password);
            $stmt = $dbconfig->prepare("SELECT user_id, user_username, user_password FROM user_accounts WHERE username= ? AND password= ? LIMIT 1");
            $stmt->bind_param("ss",$username,$password);
            $stmt->execute();
            $result=$stmt->get_result();
            if($result->num_rows == 1){
				
                $result=$result->fetch_assoc();
                $_SESSION['user_id']=$result['user_id'];
                $_SESSION['username']=$result['user_username'];
                return 1;
                
            }
            else{
                return 0;
            }
            $stmt->free_result();
            $stmt->close();
        }
        

?>
