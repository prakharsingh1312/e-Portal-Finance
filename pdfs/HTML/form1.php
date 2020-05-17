<?php
    include('../../assets/php/functions.php');
    
	if(isset($_GET['id'])&& isset($_GET['form_id'])){
	$res=render_form1_pdf($_GET['id']);

    $result = get_form_details($_GET['form_id']);
		
		echo'
   
 
<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>'. $result['form_title'].'</title>

  <!-- Font Icon -->
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

  <!-- Main css -->
  <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="../assets/jquery.datetimepicker.min.css">
	

</head>

<body style="padding:0px 0px;">
  <div class="main">
    <h1 class="center" style="text-align:center;  padding-top:0px;">DR. B. R. AMBEDKAR NATIONAL INSTITUTE OF TECHNOLOGY, JALANDHAR-144011</h1>

    <div class="container" id="container">
      <h3 class="center" style="text-align:center; padding-top:30px;">'. $result['form_subtitle'].'</h2>
      <div class="signup-content">
        <!--<form method="POST" class="register-form" id="register-form" action=".">
          <h2 class="display-6" style="color:#dc5a00;">REQUIRED DOCUMENTs</h2>
            <p style="font-size:1.2rem;">'. $result['form_docs'].'</p>
        </form>





      </div> 
	  <div class="signup-content">
        <form method="POST" class="register-form" id="register-form" action=".">
          <h2 class="display-6" style="color:#dc5a00;">BASIC INTRODUCTION</h2>
            <p style="font-size:1.2rem;">'. $result['form_intro'].'</p>
        </form>-->





      </div> 
      <div class="signup-content"  >
        <form  class="register-form" onsubmit="return false" id="form1" enctype="multipart/form-data">
          <h2 class="display-6" style="color:#dc5a00;">FORM </h2>
          <div class="form-row" >
            <div class="form-group" id="form1_1">
              <label for="form1_form1_name">1. Name of the student :</label>
              <input type="text" name="name" value="'.$res['name_of_student'].'" id="form1_name" required disabled/>
            </div>
            <div class="form-group" id="form1_1.1">
              <label for="form1_course">1.1 Course</label>
              <input type="text" name="course"  value="'.$res['course'].'"  id="form1_course" required disabled/>
              <!-- <div class="form-select">
                <select name="course" id="form1_course" required>
                  <option value ="" disabled selected></option>
                  <option value="Under Graduate">Under Graduate</option>
                  <option value="Post Graduate">Post Graduate</option>
                  <option value="PhD">PhD</option>
                </select>
                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
              </div> -->
            </div>
          </div>
          <div class="form-row">
            <div class="form-group" id="form1_2">
              <label for="form1_roll">2. Roll No.</label>
              <input type="number" name="roll"  value="'.$res['roll_no'].'"  id="form1_roll" required disabled/>
            </div>
            <div class="form-group"id="form1_3">
              <label for="form1_department">3. Department</label>
              <input type="text" name="department" value="'.$res['department'].'"  id="form1_department" required disabled/>
            </div>

          </div>
          <div class="form-row">
            <div class="form-group" id="form1_4">
              <label for="form1_nature_of_event">4. Nature of Event</label>
              <input type="text" name="nature_of_event" value="'.$res['nature_of event'].'"  id="form1_nature_of_event" required disabled/>
            </div>
            <div class="form-group" id="form1_5">
              <label for="form1_name_of_the_event">5. Name of the Event</label>
              <input type="text" name="name_of_the_event"  value="'.$res['name_of_event'].'"  id="form1_name_of_event" required disabled/>
            </div>
          </div>
          <div class="form-group" id="form1_6">
            <label for="form1_place">6. Place(S) of the event (Visit) Conference / Training Course / Workshop Seminar / Symposium / Others (Complete Address):</label>
            <input type="text" name="place"  value="'.$res['place_of_event'].'"  id="form1_place" required disabled>
          </div>
          <div class="form-group" id="form1_7">
            <label for="form1_">7. Duration required for the event with date(S) :</label>
            <div class="form-row">

              <div class="form-group">
                <label for="form1_from_date">From (YYYY-MM-DD) :</label>

                <input type="text" name="from_date" id="form1_from_date" value="'.$res['duration_from'].'" required disabled/>
              </div>
              <div class="form-group">
                <label for="form1_to_date">To (YYYY-MM-DD) :</label>
                <input type="text" name="to_date"  value="'.$res['duration_to'].'"  id="form1_to_date" required disabled/>
              </div>
              <div class="form-group">
                <label for="form1_no_of_days">No. of days :</label>
                <input type="number" name="no_of_days" value="'.$res['duration_days'].'"  id="form1_no_of_days" required disabled/>
              </div>
            </div>
          </div>
          <div class="form-group" id="form1_8">
            <label for="form1_organizer">8. Organizer of the event :</label>
            <input type="text" name="organizer"  value="'.$res['organizer_of_event'].'"  id="form1_organizer" required disabled/>
          </div>
          <div class="form-group" id="form1_9">
                <label class="custom-file-label" for="form1_relevance">9. Relevance of the visit / training: (Attach Separate Sheet, if required)</label>
          </div>
<div class="form-row">
<div class="form-group" >
  <!-- <label for="organizer">8. Organizer of the event :</label> -->';
  if($res['relevance_file']=="Y"){echo'<a href="../uploads/'.$res['relevance_of_visit'].'"<input type="text" name="relevance_text" id="form1_relevance_text" value="File Attached" disabled />';}
		else
			echo  'value="'.$res['relevance_of_visit'].'"'; 
			echo'
</div>
          <!-- <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="relevance" id="form1_relevance" aria-describedby="inputGroupFileAddon01" accept="application/pdf" required disabled/>
              </div>
            </div>
          </div> -->

</div>

          <div class="form-group" id="form1_10">
            <label class="custom-file-label" for="form1_objective">10. Clear objective and outcome of the visit: (Attach Separate Sheet, if required)</label>
          <div class="form-row">
            <div class="form-group">
              <!-- <label for="organizer">8. Organizer of the event :</label> -->
              <input type="text" name="objective_text" id="form1_objective_text" ';
		if($res['objective_file']=="Y"){
			echo'value="File Attached"';}
		else
			echo  'value="'.$res['objective_of_visit'].'"'; 
			echo' disabled />
            </div>
<!-- <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="form1_objective" name="objective" aria-describedby="inputGroupFileAddon01" accept="application/pdf" required disabled/>
              </div>
            </div>
</div> -->
          </div>
          <div class="form-group" id="form1_11">
            <div class="input-group">
              <div class="input-group-prepend">
                <label class="custom-file-label" for="form1_cv">11. Attach (i) brief CV / biography. </label>
              </div>
              <input type="text" name="CV" id="form1_CV" value="File Attached" disabled />
              <!-- <div class="custom-file">
                <input type="file" class="custom-file-input" id="form1_cv" name="cv" aria-describedby="inputGroupFileAddon01" accept="application/pdf" required disabled/>
              </div> -->
            </div>
<br>
            <div class="form-group" id="form1_12">
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="custom-file-label" for="form1_certificate">12. Attach certificate from HoD regarding relevance of the event for the applicant and by stating that the event will benefit for the applicant.</label>
                </div>
                <input type="text" name="objective_text" id="form1_objective_text" value="File Attached" disabled disabled/>
                <!-- <div class="custom-file">
                  <input type="file" class="custom-file-input" name="hod_certificate" id="form1_certificate" aria-describedby="inputGroupFileAddon01" accept="application/pdf" required>
                </div> -->
<br>
                <div class="form-row">
                  <div class="form-group" id="form1_13">
                    <label for="form1_date_time_d">13. Date and time of departure from the Institute:</label>
                    <input type="text" name="date_time_d" value="'.$res['date_and_time_departure'].'" id="form1_date_time_d" required disabled/>
                  </div>
                  <div class="form-group" id="form1_14">
                    <label for="form1_date_time_a">14. Date and time of arrival to the Institute:</label>
                    <input type="text" name="date_time_a" value="'.$res['date_and _time_arrival'].'" id="form1_date_time_a" required disabled/>
                  </div>
                </div>

              </div>
            </div>
          </div>



          <div class="form-group" id="form1_15">
            <label for="form1_research">15. Whether going to present research paper :</label>
            <input type="text" name="research_paper" value="'.$res['research_paper'].'" id="form1_research_paper" required disabled/>
            <!-- <div class="form-select">
              <select name="research" id="form1_research" required >
                <option value="" disabled selected></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
            </div> -->
          </div>
          <div class="form-group" id="form1_16">
            <label for="form1_title">16. Title of Paper :</label>
            <input type="text" name="title" value="'.$res['title_of_paper'].'" id="form1_title" required disabled/>
          </div>
          <div class="form-group" id="form1_17">
            <div class="input-group">
              <div class="input-group-prepend">
                <label class="custom-file-label" for="form1_accepted_paper">17. Attach the accepted paper, acceptance letter, NOC from co-authors:</label>
              </div>
              <div class="custom-file">
                <input type="text" class="custom-file-input" name="accepted_paper" id="form1_accepted_paper" ';
		if($res['research_paper']=="Yes"){
			echo'value="File Attached"';}
		else
			echo  'value="N.A."'; 
			echo' disabled>
              </div>
            </div>
          </div>
          <div class="form-group" id="form1_18">
            <label for="form1_total_cost">18. Total cost involved :</label>
            <div class="form-row">
              <div class="form-group">
                <label for="form1_rs">Rupees (Rs.):</label>
                <input type="text" name="total_cost" value="'.$res['total_cost'].'" id="form1_rs" required disabled>
              </div>
              <div class="form-group">
                <label for="form1_trs">Rupees (In Words) :</label>
                <input type="text" name="trs" value="'.$res['total_cost_words'].'" id="form1_trs" required disabled>
              </div>
            </div>
            <div class="form-group">
                <label class="custom-file-label" for="form1_cost_details">Cost details :</label>
            </div>
            <div class="form-row">
<div class="form-group">
  <!-- <label for="organizer">8. Organizer of the event :</label> -->
  <input type="text" name="cost_details_text" name="cost_details" id="form1_cost_details_text" ';
		if($res['cost_details_file']=="Y"){
			echo'value="File Attached"';}
		else
			echo  'value="'.$res['cost_details'].'"'; 
			echo' disabled />
</div>
            <!-- <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="cost_details" id="form1_cost_details" aria-describedby="inputGroupFileAddon01" accept="application/pdf" required disabled/>
                </div>
              </div>
            </div>
          </div> -->
</div>
          <div class="form-row">
            <div class="form-group">
              <label for="form1_registration">Registration fee:</label>
              <input type="text" name="registration" value="'.$res['registration_fees'].'"  id="form1_registration" required disabled/>
            </div>
            <div class="form-group">
              <label for="form1_ta">TA :</label>
              <input type="text" name="ta" value="'.$res['transportation_allowance'].'"  id="form1_ta" required disabled/>
            </div>
            <div class="form-group">
              <label for="form1_others">Others, if any :</label>
              <input type="text" name="others" value="'.$res['other_costs'].'"  id="form1_others" required disabled/>
            </div>
          </div>
          <div class="form-group" id="form1_19">
            <label for="form1_cgpa">19. CGPA of the candidate (Only for UG / M.Tech and M.Sc students) : </label>
            <input type="number" name="cgpa" id="form1_cgpa"  value="'.$res['cgpa'].'"  step="0.01" min="0" max="10" required disabled/>
          </div>

          <div class="form-group" id="form1_20">
            <label for="form1_mtech">20. For M.Tech, M.Sc and PhD candidates : Whether one paper has been accepted for publication in SCI Journal in Last two years : </label>
            <input type="text" name="candidates" value="'.$res['sci_journal'].'"  id="form1_candidates" required disabled/>
            <!-- <div class="form-select">
              <select name="mtech" id="form1_mtech" required>
                <option value="" disabled selected></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
            </div> -->
          </div>
          <!--<div class="form-row">
            <div class="form-group" id="form1_21">
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="custom-file-label" for="form1_signstudent">21. Signature of the Student</label>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="signstudent" id="form1_signstudent" aria-describedby="inputGroupFileAddon01" accept="image/jpeg" required />
                </div>
              </div>
            </div>
            <div class="form-group" id="form1_22">
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="custom-file-label" for="form1_signsupervisor">22. Signature of the Supervisor</label>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="signsupervisor" id="form1_signsupervisor" aria-describedby="inputGroupFileAddon01" accept="image/jpeg" required />
                </div>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group" id="form1_23">
              <label for="form1_recommended">23. Recommended / not Recommended by HoD : </label>
              <div class="form-select">
                <select name="recommended" id="form1_recommended" required>
                  <option value="" disabled selected></option>
                  <option value="Recommended">Recommended</option>
                  <option value="Not Recommended">Not Recommended</option>
                </select>
                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
              </div>
            </div>
            <div class="form-group" id="form1_24">
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="custom-file-label" for="form1_signhod">24. Signature of the Hod (with seal) :</label>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="signhod" id="form1_signhod" aria-describedby="inputGroupFileAddon01" accept="image/jpeg" required />
                </div>
              </div>
            </div>
          </div>-->
          <br>

<span id="error_span" style="color:red"></span>
                      <div class="form-submit">
              <input type="button" style="background-color:#DC5A00;" value="Print" class="submit"
                      onclick="window.print()" /></div>
        </form>
      </div>

    </div>

  </div>

  <!-- JS -->
  <script src="../assets/js/jquery.js"></script>
  <script src="../assets/js/main.js"></script>
		  <script src="../assets/jquery.datetimepicker.full.min.js"></script>
		  <script src="../assets/js/loadingView.js" type="text/javascript"></script>
	 <script>
		
	   $("#form1_from_date" ).datetimepicker({
        format: \'Y-m-d\',
        timepicker: false,});
		 
		 $("#form1_to_date" ).datetimepicker({
        format: \'Y-m-d\',
        timepicker: false,});
		 
		 $("#form1_date_time_a" ).datetimepicker({
        dateFormat: \'YY-mm-dd\',
        timeFormat: \'HH:mm:ss\',
		format: \'Y-m-d H:i:s\',});
		
		 
		 $("#form1_date_time_d" ).datetimepicker({
        dateFormat: \'YY-mm-dd\',
        timeFormat: \'HH:mm:ss\',
		format: \'Y-m-d H:i:s\',});</script> 

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>';
	}
		?>
