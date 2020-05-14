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
      <h2 class="center" style="text-align:center; padding-top:30px;">Claim Settlement Form for Any Event<br>
      <div style="font-size: 15px">(STC/ FDP/ Seminar/ Workshop/ National or International Conference/ Motivational Lecture/ Student Event)</div></h2>

      <div class="signup-content"  >
        <form  class="register-form" onsubmit="return false" id="form1" enctype="multipart/form-data">
          <h2 class="display-6" style="color:#dc5a00;">FORM </h2>
            <div class="form-row" >
              <div class="form-group" id="form1_1">
                <label for="form1_form1_name">1. Title of the Event</label>
                <input type="text" name="name" id="form1_name" required />
              </div>
            </div>
          <div class="form-row">
            <div class="form-group" id="form1_2">
              <label for="form1_roll">2. Organizing Department/ Center</label>
              <input type="text" name="roll" id="form1_roll" required />
            </div>

          </div>
          <div class="form-row">
            <div class="form-group" id="form1_3">
              <label for="form1_name_of_item">3. Coordinator(s)/Convenor Name and Department</label>
              <input type="text" name="name_of_item" id="form1_name_of_item" required />
            </div>

          </div>
          <div class="form-group" id="form1_4">
            <label for="form1_cost">4. Duration and Dates of conduct of Event (Proramme Schedule to be attached)</label>
            <div class="form-row">
          <div class="form-group" >
            <!-- <label for="organizer">8. Organizer of the event :</label> -->
            <input type="text" name="relevance_text" id="form1_relevance_text"  required />
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
          <div class="form-group" id="form1_5">
            <label for="form1_5">5. Nature of the Programme</label>
            <select name="nature_of_programme" id="form1_nature_of_programme">
                <option value ="" disabled selected></option>
            <option value="Awareness">Awareness</option>
            <option value="Motivational Programs">Motivational Programs</option>
            <option value="Workshops">Workshops</option>
            <option value="Training">Training</option>
            <option value="Seminars">Seminars</option>
            <option value="Conferences">Conferences</option>
            <option value="Exhibitions of Innovative Products">Exhibitions of Innovative Products</option>
            <option value="E-Summits">E-Summits</option>
            <option value="Tech Fests">Tech Fests</option>
            <option value="Hackathons">Hackathons</option>
            <option value="Competition">Competition</option>
            <option value="Book-camp">Bootcamp</option>
            <option value="Exchange Programs">Exchange Programs</option>
            <option value="Students Related Programme">Students Related Programme</option>
            <option value="Other Related Programme">Other Related Programme</option>
          </select>

          </div>
          <div class="form-group" id="form1_6">
            <label for="form1_manufacturer">6. Whether Advance taken</label>
            <select name="advance" id="form1_advance">
                <option value ="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
          </div>

           <div class="form-group" id="form1_7">
            <label for="form1_manufacturer">7. Advance Funding Agency (if any)</label>
            <select name="advance" id="form1_advance">
                <option value ="" disabled selected></option>
              <option value="TEQIP-III">TEQIP-III</option>
              <option value="Institute Main Account">Institute Main Account</option>
            </select>
          </div>

          <div class="form-group" id="form1_8">
            <label for="form1_organizer">8. Associated Institute/Orfanization (if any)</label>
            <input type="text" name="justification" id="form1_justification"/>
          </div>

          <div class="form-group" id="form1_9">
            <label for="form1_organizer">9. List of Resource Persons/Experts (to be attached)</label>
            <div class="form-row">
          <div class="form-group" >
            <!-- <label for="organizer">8. Organizer of the event :</label> -->
            <input type="text" name="relevance_text" id="form1_relevance_text"  required />
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

        <div class="form-group" id="form1_10">
            <label for="form1_organizer">10. Number of participants (Feedback Form to be attached)</label>
            <div class="form-row">
          <div class="form-group" >
            <!-- <label for="organizer">8. Organizer of the event :</label> -->
            <input type="text" name="relevance_text" id="form1_relevance_text"  required />
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

          <div class="form-group" id="form_11">
            <label for="form1_organizer">11. Brief Report of the Programme (Attach report of sheet)</label>
            <div class="form-row">
          <div class="form-group" >
            <!-- <label for="organizer">8. Organizer of the event :</label> -->
            <input type="text" name="relevance_text" id="form1_relevance_text"  required />
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

          <div class="form-row">
            <div class="form-group" id="form1_12">
              <label for="form1_name_of_item">12. Indicate any other noteworthy features of this programme</label>
              <input type="text" name="name_of_item" id="form1_name_of_item" required />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group" id="form1_13">
              <label for="form1_name_of_item">13. Bank Account Number (if any) of Conference/Event</label>
              <input type="text" name="name_of_item" id="form1_name_of_item" />
            </div>
          </div>

          <div class="form-group" id="form_14">
            <label for="form1_organizer">14. Expenditure incurred against Amount (Detailed list to be attached, @To be deposited with the Institute Account along with Proof)</label>
            <div class="form-row">
          <div class="form-group" >
            <!-- <label for="organizer">8. Organizer of the event :</label> -->
            <input type="text" name="relevance_text" id="form1_relevance_text"  required />
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

          <div class="form-row">
            <div class="form-group" id="form1_15">
              <label for="form1_name_of_item">15. Bank Statement for the effective period</label>
              <input type="text" name="name_of_item" id="form1_name_of_item" required />
            </div>
          </div>

          <div class="form-group" id="form_16">
            <label for="form1_organizer">16. List of Payees (if any along with Details, A/C No., IFSC Code)</label>
            <div class="form-row">
          <div class="form-group" >
            <!-- <label for="organizer">8. Organizer of the event :</label> -->
            <input type="text" name="relevance_text" id="form1_relevance_text"  required />
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

          <div class="form-group" id="form_17">
            <label for="form1_organizer">17. Event Photographs (4-5 both Softcopy and Hardcopy)</label>
            <div class="form-row">
          <div class="form-group" >
            <!-- <label for="organizer">8. Organizer of the event :</label> -->
            <input type="text" name="relevance_text" id="form1_relevance_text"  required />
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
