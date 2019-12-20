<?php
include('config.php');
    

	
	function encrypt_password($password)
	{
		$password = crypt($password, '$1$' . global_salt);
		return($password);
	}


    function login($username,$password){
			$password=encrypt_password($password);
            $stmt = $con->prepare("SELECT user_id, user_username, user_password FROM ".global_mysqli_users_table." WHERE username=? AND password=? LIMIT 1");
            $stmt->bind_param('ss',$username,$password);
            $stmt->execute();
            
            if($stmt->num_rows == 1){
				$result=$stmt->get_result();
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
