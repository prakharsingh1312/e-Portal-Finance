<?php
    include('../assets/php/functions.php');
    $sql="SELECT * FROM form_details WHERE form_id = 1";
    
    $result = $dbconfig->prepare($sql);
    $result->execute();
    $result=$result->get_result();
    $result = $result->fetch_assoc();
   
 ?>
<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php echo $result['form_title']; ?></title>

  <!-- Font Icon -->
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

  <!-- Main css -->
  <link rel="stylesheet" href="css/style.css">
	

</head>

<body style="padding:0px 0px;">
  <div class="main">
    <h3 class="center" style="text-align:center;  color:white; padding-top:0px;">DR. B. R. AMBEDKAR NATIONAL INSTITUTE OF TECHNOLOGY, JALANDHAR-144011</h3>

    <div class="container">
      <h2 class="center" style="text-align:center; padding-top:30px;"><?php echo $result['form_subtititle']; ?></h2>
      <div class="signup-content">
        <form method="POST" class="register-form" id="register-form" action=".">
          <h2 class="display-6" style="color:#dc5a00;">Important Guidelines</h2>
            <p style="font-size:1.2rem;"> <?php echo $result['form_guidelines']; ?></p>
        </form>





      </div>
      <div class="signup-content"  >
        <form  class="register-form" id="form1" enctype="multipart/form-data">
          <h2 class="display-6" style="color:#dc5a00;">FORM </h2>
          <div class="form-row" >
            <div class="form-group" id="form1_1">
              <label for="form1_form1_name">1. Name of the student :</label>
              <input type="text" name="name" id="form1_name" required />
            </div>
            <div class="form-group" id="form1_1.1">
              <label for="form1_course">1.1 Course</label>
              <div class="form-select">
                <select name="course" id="form1_course">
                  <option value ="" disabled selected></option>
                  <option value="ug">Under Graduate</option>
                  <option value="pg">Post Graduate</option>
                  <option value="phd">PhD</option>
                </select>
                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group" id="form1_2">
              <label for="form1_roll">2. Roll No.</label>
              <input type="text" name="roll" id="form1_roll" required />
            </div>
            <div class="form-group"id="form1_3">
              <label for="form1_department">3. Department</label>
              <input type="text" name="department" id="form1_department" required />
            </div>

          </div>
          <div class="form-row">
            <div class="form-group" id="form1_4">
              <label for="form1_nature_of_event">4. Nature of Event</label>
              <input type="text" name="nature_of_event" id="form1_nature_of_event" required />
            </div>
            <div class="form-group" id="form1_5">
              <label for="form1_name_of_the_event">5. Name of the Event</label>
              <input type="text" name="name_of_the_event" id="form1_name_of_event" required />
            </div>
          </div>
          <div class="form-group" id="form1_6">
            <label for="form1_place">6. Place(S) of the event (Visit) Conference / Training Course / Workshop Seminar / Symposium / Others (Complete Address):</label>
            <input type="text" name="place" id="form1_place">
          </div>
          <div class="form-group" id="form1_7">
            <label for="form1_">7. Duration required for the event with date(S) :</label>
            <div class="form-row">

              <div class="form-group">
                <label for="form1_from_date">From (DD/MM/YY) :</label>

                <input type="text" name="from_date" id="form1_from_date">
              </div>
              <div class="form-group">
                <label for="form1_to_date">To (DD/MM/YY) :</label>
                <input type="text" name="to_date" id="form1_to_date">
              </div>
              <div class="form-group">
                <label for="form1_no_of_days">No. of days :</label>
                <input type="text" name="no_of_days" id="form1_no_of_days">
              </div>
            </div>
          </div>
          <div class="form-group" id="form1_8">
            <label for="form1_organizer">8. Organizer of the event :</label>
            <input type="text" name="organizer" id="form1_organizer" required />
          </div>
          <div class="form-group" id="form1_9">
                <label class="custom-file-label" for="form1_relevance">9. Relevance of the visit / training: (Attach Separate Sheet, if required)</label>
          </div>
<div class="form-row">
<div class="form-group" >
  <!-- <label for="organizer">8. Organizer of the event :</label> -->
  <input type="text" name="organizer" id="organizer" placeholder="Leave blank if file attached" required />
</div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="relevance" id="form1_relevance" aria-describedby="inputGroupFileAddon01">
              </div>
            </div>
          </div>

</div>

          <div class="form-group" id="form1_10">
            <label class="custom-file-label" for="form1_objective">10. Clear objective and outcome of the visit: (Attach Separate Sheet, if required)</label>
          <div class="form-row">
            <div class="form-group">
              <!-- <label for="organizer">8. Organizer of the event :</label> -->
              <input type="text" name="organizer" id="organizer" placeholder="Leave blank if file attached" required />
            </div>
<div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="form1_objective" name="objective" aria-describedby="inputGroupFileAddon01">
              </div>
            </div>
</div>
          </div>
          <div class="form-group" id="form1_11">
            <div class="input-group">
              <div class="input-group-prepend">
                <label class="custom-file-label" for="form1_cv">11. Attach (i) brief CV / biography. </label>
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="form1_cv" name="cv" aria-describedby="inputGroupFileAddon01">
              </div>
            </div>
<br>
            <div class="form-group" id="form1_12">
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="custom-file-label" for="form1_certificate">12. Attach certificate from HoD regarding relevance of the event for the applicant and by stating that the event will benefit for the applicant.</label>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="form1_certificate" aria-describedby="inputGroupFileAddon01">
                </div>
<br>
                <div class="form-row">
                  <div class="form-group" id="form1_13">
                    <label for="form1_date_time_d">13. Date and time of departure from the Institute:</label>
                    <input type="text" name="date_time_d" id="form1_date_time_d" required />
                  </div>
                  <div class="form-group" id="form1_14">
                    <label for="form1_date_time_a">14. Date and time of arrival from the Institute:</label>
                    <input type="text" name="date_time_a" id="form1_date_time_a" required />
                  </div>
                </div>

              </div>
            </div>
          </div>



          <div class="form-group" id="form1_15">
            <label for="form1_research">15. Whether going to present research paper :</label>
            <div class="form-select">
              <select name="research" id="form1_research">
                <option value="" disabled selected></option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
              </select>
              <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
            </div>
          </div>
          <div class="form-group" id="form1_16">
            <label for="form1_title">16. Title of Paper :</label>
            <input type="text" name="title" id="form1_title" required />
          </div>
          <div class="form-group" id="form1_17">
            <div class="input-group">
              <div class="input-group-prepend">
                <label class="custom-file-label" for="form1_accepted_paper">17. Attach the accepted paper, acceptance letter, NOC from co-authors:</label>
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="form1_accepted_paper" aria-describedby="inputGroupFileAddon01">
              </div>
            </div>
          </div>
          <div class="form-group" id="form1_18">
            <label for="form1_total_cost">18. Total cost involved :</label>
            <div class="form-row">
              <div class="form-group">
                <label for="form1_rs">Rupees (Rs.):</label>
                <input type="text" name="from_date" id="form1_rs">
              </div>
              <div class="form-group">
                <label for="form1_trs">Rupees (In Words) :</label>
                <input type="text" name="trs" id="form1_trs">
              </div>
            </div>
            <div class="form-group">
                <label class="custom-file-label" for="form1_cost_details">Cost details :</label>
            </div>
            <div class="form-row">
<div class="form-group">
  <!-- <label for="organizer">8. Organizer of the event :</label> -->
  <input type="text" name="organizer" id="organizer" placeholder="Leave blank if file attached" required />
</div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="form1_cost_details" aria-describedby="inputGroupFileAddon01">
                </div>
              </div>
            </div>
          </div>
</div>
          <div class="form-row">
            <div class="form-group">
              <label for="form1_registration">Registration fee:</label>
              <input type="text" name="registration" id="form1_registration">
            </div>
            <div class="form-group">
              <label for="form1_ta">TA :</label>
              <input type="text" name="ta" id="form1_ta">
            </div>
            <div class="form-group">
              <label for="form1_others">Others, if any :</label>
              <input type="text" name="others" id="form1_others">
            </div>
          </div>
          <div class="form-group" id="form1_19">
            <label for="form1_cgpa">19. CGPA of the candidate (Only for UG / M.Tech and M.Sc students) : </label>
            <input type="text" name="cgpa" id="form1_cgpa" required />
          </div>

          <div class="form-group" id="form1_20">
            <label for="form1_mtech">20. For M.Tech, M.Sc and PhD candidates : Whether one paper has been accepted for publication in SCI Journal in Last two years : </label>
            <div class="form-select">
              <select name="mtech" id="form1_mtech">
                <option value="" disabled selected></option>
                <option value="yy">Yes</option>
                <option value="nn">No</option>
              </select>
              <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group" id="form1_21">
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="custom-file-label" for="form1_signstudent">21. Signature of the Student</label>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="form1_signstudent" aria-describedby="inputGroupFileAddon01">
                </div>
              </div>
            </div>
            <div class="form-group" id="form1_22">
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="custom-file-label" for="form1_signsupervisor">22. Signature of the Supervisor</label>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="form1_signsupervisor" aria-describedby="inputGroupFileAddon01">
                </div>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group" id="form1_23">
              <label for="form1_recommended">23. Recommended / not Recommended by HoD : </label>
              <div class="form-select">
                <select name="recommended" id="form1_recommended">
                  <option value="" disabled selected></option>
                  <option value="Y">Recommended</option>
                  <option value="N">Not Recommended</option>
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
                  <input type="file" class="custom-file-input" id="form1_signhod" aria-describedby="inputGroupFileAddon01">
                </div>
              </div>
            </div>
          </div>
          <br>


          <div class="form-submit">
            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
          </div>
        </form>
      </div>

    </div>

  </div>

  <!-- JS -->
  <script src="../assets/js/jquery.js"></script>
  <script src="../assets/js/main.js"></script>
		  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>
	 <script>
	$( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#form1_from_date" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#form1_to_date" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );</script> 

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
