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
            $stmt = $dbconfig->prepare("SELECT * FROM ".global_mysqli_users_table." WHERE user_username= ? AND user_password= ? LIMIT 1");
            $stmt->bind_param("ss",$username,$password);
            $stmt->execute();
            $result=$stmt->get_result();
            if($result->num_rows == 1){
				
                $result=$result->fetch_assoc();
                $_SESSION['user_id']=$result['user_id'];
                $_SESSION['username']=$result['user_username'];
				$_SESSION['user_role']=$result['user_role'];
				$_SESSION['user_dept']=$result['user_dept'];
				$_SESSION['user_name']=$result['user_name'];
				
                return 1;
                
            }
            else{
                return 0;
            }
            $stmt->free_result();
            $stmt->close();
        }
    function form_1($data_fields){
        global $dbconfig;
        $stmt = $dbconfig->prepare("INSERT INTO `form_type1_responses`(`response_id`,`form_id`,`response_code`,`name_of_code`,`name_of_student`,`course`,`roll_no`,`department`,`nature_of_event`,`name_of_event`,`place_of_event`,`duration_from`,`duration_to`,`duration_days`,`organizer_of_event`,`relevance_of_visit`,`objective_of_visit`,`attached_cv`,`attached_certificate_hod`,`date_and_time_departure`,`date_and_time_arrival`,`research_paper`,`title_of_paper`,`accepted_paper_acceptance_letter`,`total_cost`,`total_cost_words`,`cost_details`,`registration_fees`,`transportation_allowance`,`other_costs`,`cgpa`,`sci_journal`,`signature_student`,`signature_supervisor`,`recommendation_hod`,`signature_hod`,`STATUS`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param(); //pending
        $stmt->execute();
        $stmt->free_result();
        $stmt->close();
        
    }
        
	function logged_in(){
		if(isset($_SESSION['user_id']))
			return 1;
		else
			return 0;
	}
function logout(){
	session_destroy();
	return 1;
}
?>
