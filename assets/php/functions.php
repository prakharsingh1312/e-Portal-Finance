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
	$result->bind_param("i",$formid);
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
function submit_form1($post,$files){
	$response_code=generate_response_code();
	$relevance_file='N';
	$objective_file='N';
	$cost_detail_file='N';
	$paper='N.A.';
	if($post['relevance_text']==''){
		$relevance_file='Y';
		$post['relevance_text']=upload_file($files['relevance'],'relevance',$response_code);
		
	}
	if($post['objective_text']==''){
		$objective_file='Y';
		$post['objective_text']=upload_file($files['objective'],'objective',$response_code);
	}
	if($post['cost_details_text']==''){
		$cost_detail_file='Y';
		$post['cost_details_text']=upload_file($files['cost_details'],'cost_details',$response_code);
	}
	if($post['recommended']=="Recommended"){
		$recommended=upload_file($files['signhod'],'signhod',$response_code);
	}
	$cv=upload_file($files['cv'],'cv',$response_code);
	$hod=upload_file($files['hod_certificate'],'hod_certificate',$response_code);
	if($post['research']=='Yes'){
	$paper=upload_file($files['accepted_paper'],'accepted_paper',$response_code);}
	$signstudent=upload_file($files['signstudent'],'signstudent',$response_code);
	$signsupervisor=upload_file($files['signsupervisor'],'signsupervisor',$response_code);
	$status=1;
	
	global $dbconfig;
	$sql="INSERT INTO `form_type1_responses` ( `form_id`, `response_code`, `name_of_student`, `course`, `roll_no`, `department`, `nature_of event`, `name_of_event`, `place_of_event`, `duration_from`, `duration_to`, `duration_days`, `organizer_of_event`, `relevance_file`, `relevance_of_visit`, `objective_of_visit`, `objective_file`, `attached_cv`, `attached_certificate_hod`, `date_and_time_departure`, `date_and _time_arrival`, `research_paper`, `title_of_paper`, `accepted_paper_acceptance_letter`, `total_cost`, `total_cost_words`, `cost_details_file`, `cost_details`, `registration_fees`, `transportation_allowance`, `other_costs`, `cgpa`, `sci_journal`, `signature_student`, `signature_supervisor`, `recommendation_hod`, `signature_hod`, `STATUS`) VALUES ( ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $dbconfig->prepare($sql);
	
        $stmt->bind_param("issssssssssisssssssssssssssssssssssssi",$_SESSION['form_id'],$response_code,$post['name'],$post['course'],$post['roll'],$post['department'],$post['nature_of_event'],$post['name_of_the_event'],$post['place'],$post['from_date'],$post['to_date'],$post['no_of_days'],$post['organizer'],$relevance_file,$post['relevance_text'],$post['objective_text'],$objective_file,$cv,$hod,$post['date_time_d'],$post['date_time_a'],$post['research'],$post['title'],$paper,$post['total_cost'],$post['trs'],$cost_detail_file,$post['cost_details_text'],$post['registration'],$post['ta'],$post['others'],$post['cgpa'],$post['mtech'],$signstudent,$signsupervisor,$post['recommended'],$recommended,$status); //pending
	
        $stmt->execute();
        $stmt->close();
	$return= '<h2 class="center" style="text-align:center; padding-top:30px;">Form Submitted Successfully.</h2>
				<div class="signup-content">
        <form method="POST" class="register-form" id="register-form" action=".">
          <h2 class="display-6" style="color:#dc5a00;">Form Number :'.$response_code.'</h2>
            <p style="font-size:1.2rem;">Use this code to track your form. Click here to download a copy of your form.</p>
        </form>';
	return $return;

}
function generate_response_code(){
	global $dbconfig;
	$result=get_form_details($_SESSION['form_id']);
	$number="";
	$number.=$result['form_code'];
	$query=$dbconfig->prepare('SELECT MAX(response_id) FROM form_type1_responses');
	$query->execute();
	$query=$query->get_result();
	$query=$query->fetch_assoc();
	$hex=dechex($query['MAX(response_id)']==NULL?1:$query['MAX(response_id)']+1);
	$number.=str_pad($hex, 10, '0', STR_PAD_LEFT);
	return $number;
}
function upload_file($file,$subpath,$response_code){
	$name = $file["name"];
	$ext = end((explode(".", $name)));
	$path=$subpath.'_'.$response_code.'.'.$ext;
	$file=$file['tmp_name'];
	move_uploaded_file($file,'../uploads/'.$path);
	return $path;
}
function show_applications($form_id){
	global $dbconfig;
	$return='';
	$n=1;
	if($form_id==0){
	for($i=1;$i<=$n;$i++){
	
		$sql="SELECT * FROM form_type".$i."_responses";
		$stmt=$dbconfig->prepare($sql);
		$stmt->execute();
		$stmt=$stmt->get_result();
		while($result=$stmt->fetch_assoc()){
			$return.='<tr><td>'.$result['response_code'].'</td>
                  <td>'.$result['name_of_student'].'</td>
                  <td>'.$result['roll_no'].'</td>
                  <td>'.$i.'</td>
                  <td class="text-right">
                    <a href="#">View Form</a>
                  </td>
				  </tr>';
		}
		
	}
}
	else{
		$sql="SELECT * FROM form_type".$form_id."_responses";
		$stmt=$dbconfig->prepare($sql);
		$stmt->execute();
		$stmt=$stmt->get_result();
		while($result=$stmt->fetch_assoc()){
			$return.='<tr><td>'.$result['response_code'].'</td>
                  <td>'.$result['name_of_student'].'</td>
                  <td>'.$result['roll_no'].'</td>
                  <td>'.$i.'</td>
                  <td class="text-right">
                    <a href="#">View Form</a>
                  </td>
				  </tr>';
		
	}
}
	return($return);
}
function get_application_data(){
	global $dbconfig;
	$return['accepted']=0;
	$return['rejected']=0;
	$return['pending']=0;
	$n=1;
	for($i=1;$i<=$n;$i++){
		//Rejected
		$sql="SELECT count(*) FROM form_type".$i."_responses WHERE STATUS=0";
		$stmt=$dbconfig->prepare($sql);
		$stmt->execute();
		$stmt=$stmt->get_result();
		$result=$stmt->fetch_assoc();
		$return['rejected']+=$result['count(*)'];
		//Accepted
		$sql="SELECT form_details.form_id,MAX(path_level) FROM form_details,form_paths WHERE form_format=? and form_details.form_id=form_paths.form_id group by form_paths.form_id";
		$stmt=$dbconfig->prepare($sql);
		$stmt->bind_param("i",$i);
		$stmt->execute();
		$stmt=$stmt->get_result();
		while($result=$stmt->fetch_assoc()){
		
		$sql="SELECT count(*) FROM form_type".$i."_responses WHERE STATUS=? and form_id=?";
		$stmt2=$dbconfig->prepare($sql);
			$stmt2->bind_param("ii",$lev=$result['MAX(path_level)']+1,$result['form_id']);
		$stmt2->execute();
		$stmt2=$stmt2->get_result();
		$result2=$stmt2->fetch_assoc();
		$return['accepted']+=$result2['count(*)'];
		}
		//Pending
		$sql="SELECT count(*) FROM form_type".$i."_responses";
		$stmt2=$dbconfig->prepare($sql);
		$stmt2->execute();
		$stmt2=$stmt2->get_result();
		$result2=$stmt2->fetch_assoc();
		$return['pending']+=$result2['count(*)']-$return['accepted']-$return['rejected'];
		
	}
	return $return;
}
	

function show_departments(){
	global $dbconfig;
	 $sql="SELECT * FROM departments ";
	$return='';
    $result = $dbconfig->prepare($sql);
    $result->execute();
    $result=$result->get_result();
	  while($result1 = $result->fetch_assoc()){ 
                $return.='<tr>
                  <td>'.$result1['department_id'].'</td>
                  <td>'.$result1['department_abbreviation'].'</td>
                  <td>'.$result1['department_name'].'</td>
				  <td class="text-right">
                     <a href="" class="dept_show_edit_button" data-toggle="modal" data-target="#exampleModal" id="edit:'.$result1['department_id'].'">Edit</a> or <a href="" class="dept_show_delete_button" id="delete:'.$result1['department_name'].':'.$result1['department_id'].'" data-toggle="modal" data-target="#exampleModal">Delete</a>
                  </td>
                </tr>';
                 } 
	return $return;
}
function show_edit_dept($dept_id){
	global $dbconfig;
	 $sql="SELECT * FROM departments WHERE department_id=? ";
	$return='';
    $result = $dbconfig->prepare($sql);
	$result->bind_param("i",$dept_id);
    $result->execute();
    $result=$result->get_result();
	$result=$result->fetch_assoc();
	$return.='<div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit an Existing Department</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="department_name">Department Name :</label>
              <input type="text" class="form-control" id="department_name" aria-describedby="emailHelp" placeholder="" value="'.$result['department_name'].'">
            </div>
            <div class="form-group">
              <label for="department_abbr">Department Abbreviation :</label>
              <input type="text" class="form-control" id="department_abbr" placeholder="" value="'.$result['department_abbreviation'].'">
            </div>


          </form>
<span id="error_span"></span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>
          <button type="button" class="btn btn-primary dept_edit_button" id="editF:'.$result['department_id'].'">Save Department</button>
      

        </div>';
	return $return;
}
function add_dept($name,$abbr){
	global $dbconfig;
	if(verify_login()!=1){
		return verify_login();
	}
			else{
				$sql="INSERT INTO departments (`department_name`,`department_abbreviation`) VALUES (?,?) ";
    $result = $dbconfig->prepare($sql);
	$result->bind_param("ss",$name,$abbr);
    $result->execute();
    $return='<div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Success</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Department "'.$name.'" has been added successfully.</p>
<span id="error_span"></span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          
      

        </div>';
				return $return;
			}
		
		
	
}
function edit_dept($name,$abbr,$id){
	global $dbconfig;
	
		if(verify_login()!=1){
			return verify_login();
		}
			else{
				echo $name,$abbr,$id;
				$sql="UPDATE departments SET department_name=? , department_abbreviation=? WHERE department_id=? ";
    $result = $dbconfig->prepare($sql);
	$result->bind_param("ssi",$name,$abbr,$id);
			
    $result->execute();
				
    $return='<div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Success</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Department "'.$name.'" has been updated successfully.</p>
<span id="error_span"></span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          
      

        </div>';
				return $return;
			}
		
		
	

}
function verify_login(){
	if(!isset($_SESSION['user_role'])){
		return 'You are not logged in.';
	}
	else{
		if($_SESSION['user_role']!=1){
			return '<div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Error</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>You are not authorised to do this.</p>
<span id="error_span"></span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          
      

        </div>';}
		else{
		return 1;
	}
	}
	
}
function delete_dept($name,$id){
	global $dbconfig;
	if(verify_login()!=1){
		return verify_login();
	}
	else
	{
	$sql='DELETE FROM departments where department_id=?';
		$stmt=$dbconfig->prepare($sql);
		$stmt->bind_param("i",$id);
		$stmt->execute();
	$return='<div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Success</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Department "'.$name.'" has been deleted.</p>
<span id="error_span"></span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          
      

        </div>';
				return $return;
	}
}
?>
