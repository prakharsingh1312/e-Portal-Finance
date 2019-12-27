<?php
include('config.php');


	
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
        $_SESSION['user_email']=$result['user_email']; //try

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
function get_form_details($formid){
	global $dbconfig;
	$sql="SELECT * FROM form_details WHERE form_id = ?";
    
    $result = $dbconfig->prepare($sql);
	$result = $result->bind_param('i',$formid);
    $result->execute();
    $result=$result->get_result();
	$result=$result->fetch_assoc();
	return $result;
	
}
function get_forms(){
	$return='<div class="page-header-image" data-parallax="true" style="background-image:url(\'./assets/img/header.jpg\');">
      </div>
<div class="container">
		<div class="content-center brand">
		<div id="notification_div"><div id="notification_inner_div"><div id="notification_inner_cell_div"></div></div></div>
		<h1>Forms Available</h1>';
	global $dbconfig;
	$sql="SELECT * FROM form_details ";
    $result = $dbconfig->prepare($sql);
    $result->execute();
    $result=$result->get_result();
	while($form=$result->fetch_assoc()){
		$return.= '<div class="col-md-6 ml-auto mr-auto">
	          <div class="card card-login card-plain">
							<div class="card" style="width: 18rem; background-color:#212529;">
	  						<img src="'.$form['form_image'].'" class="card-img-top" alt="form-1" style="display:inline-block;">
	  						<div class="card-body">
	    						<h5 class="card-title" style="textcolor:black;">'.$form['form_title'].'</h5>
	    						<p class="card-text">'.$form['form_subtitle'].'</p>
	    						<form method="POST" action="./forms/form'.$form['form_format'].'.php">
								<input type="hidden" value="'.$form['form_id'].'" name="form_id">
								<input type="submit" class="btn btn-primary" value="Fill Up the Form"></form>
	  						</div>
							</div>
            </div>
          </div>';
		
	}
	$return.='</div>
      </div>';
	return $return;
}
?>
