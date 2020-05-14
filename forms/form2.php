<?php
    include('../assets/php/functions.php');
    if(isset($_POST['form_id']))
		$_SESSION['form_id']=mysqli_real_escape_string($dbconfig,$_POST['form_id']);
	if(isset($_GET['submit_form']) && isset($_POST['name'])){
		echo submit_form1($_POST,$_FILES);
	}
	else{
    $result = get_form_details($_SESSION['form_id']);
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
    <h3 class="center" style="text-align:center;  color:white; padding-top:0px;">DR. B. R. AMBEDKAR NATIONAL INSTITUTE OF TECHNOLOGY, JALANDHAR-144011</h3>

    <div class="container" id="container">
      <h2 class="center" style="text-align:center; padding-top:30px;">Requisition Performa for Purchase</h2>
     
      <div class="signup-content"  >
        <form  class="register-form" onsubmit="return false" id="form1" enctype="multipart/form-data">
          <h2 class="display-6" style="color:#dc5a00;">FORM </h2>
            <div class="form-row" >
              <div class="form-group" id="form1_1">
                <label for="form1_form1_name">1. Name of the Department/ Center :</label>
                <input type="text" name="name" id="form1_name" required />
              </div>
            </div>
          <div class="form-row">
            <div class="form-group" id="form1_2">
              <label for="form1_roll">2. Project Name/ Research Topic</label>
              <input type="text" name="roll" id="form1_roll" required />
            </div>

          </div>
          <div class="form-row">
            <div class="form-group" id="form1_3">
              <label for="form1_name_of_item">3. Name of the Item/ Machine/ Equipment/ Instrument/ Software/ Journals/ etc.</label>
              <input type="text" name="name_of_item" id="form1_name_of_item" required />
            </div>
            
          </div>
          <div class="form-group" id="form1_4">
            <label for="form1_cost">4. Estimated Cost of the Item/ Machine/ Equipment/ Instrument/ Software/ Journals/ etc.</label>
            <input type="text" name="cost" id="form1_cost" required>
          </div>
          <div class="form-group" id="form1_5">
            <label for="form1_">5. Technical Specifications (Source of information e.g. Leaflet, Office record, etc.) to be attached</label>
            <div class="form-row">
          <div class="form-group" >
            <!-- <label for="organizer">8. Organizer of the event :</label> -->
            <input type="text" name="relevance_text" id="form1_relevance_text" placeholder="Leave blank if file attached" required />
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="relevance" id="form1_relevance" aria-describedby="inputGroupFileAddon01" accept="application/pdf" required />
              </div>
            </div>
          </div>

</div>
          </div>
          <div class="form-group" id="form1_6">
            <label for="form1_manufacturer">6. List of Manufacturer/ Supplier with an Address</label>
            <input type="text" name="manufacturer" id="form1_manufacturer" required />
          </div>

          <div class="form-group" id="form1_7">
            <label for="form1_organizer">7. Justification of package</label>
            <input type="text" name="justification" id="form1_justification" required />
          </div>

          <div class="form-group" id="form1_8">
            <label for="form1_organizer">8. Name of Intendor with Designation</label>
            <input type="text" name="justification" id="form1_justification" required />
          </div>

          <div class="form-group" id="form1_9">
            <label for="form1_organizer">9. Remarks, if any</label>
            <input type="text" name="justification" id="form1_justification" required />
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
            <input type="button" value="Reset All" class="submit" name="reset" id="reset" />
            <input type="submit" value="Submit Form" class="submit" name="submit" id="submitForm" />
          </div>
        </form>
      </div>

    </div>

  </div>

  <!-- JS -->
  <script src="../assets/js/jquery.js"></script>
  <script src="../assets/js/main.js"></script>
		  <script src="../assets/jquery.datetimepicker.full.min.js"></script>
		  <script src="../assets/js/loadingView.js" type="text/javascript"></script>
	 <!-- <script>
		
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
		format: \'Y-m-d H:i:s\',});</script>  -->

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>';
	}
		?>
