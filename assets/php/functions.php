<?php
include('config.php');
    
    function login1($username,$password){
            $stmt = $con->prepare("SELECT user_id, user_username, user_password FROM user_accounts WHERE username=? AND password=? LIMIT 1");
            $stmt->bind_param('ss',$username,$password);
            $stmt->execute();
            $stmt->bind_result($username,$password);
            $stmt->store_result();
            if($stmt->num_rows == 1){
                $stmt->fetch();
                $_SESSION['logged']=1;
                $_SESSION['username']=$username;
                return 1;
                
            }
            else{
                return 0;
            }
            $stmt->free_result();
            $stmt->close();
        }
        

?>
