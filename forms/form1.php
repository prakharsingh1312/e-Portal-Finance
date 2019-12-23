<?php
    include('../assets/php/functions.php');
    $sql="SELECT * FROM form_details WHERE form_id = 1";
    
    $result = $dbconfig->prepare($sql);
    $result->execute();
    $result=$result->get_result();
    $result = $result->fetch_assoc();
   
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
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
        <form method="POST" class="register-form" id="register-form">
          <h2 class="display-6" style="color:#dc5a00;">Important Guidelines</h2>
            <p style="font-size:1.2rem;"> <?php echo $result['form_guidelines']; ?></p>
        </form>






      </div>
      <div class="signup-content" >
        <form method="POST" class="register-form" id="register-form">
          <h2 class="display-6" style="color:#dc5a00;">FORM </h2>
          <div class="form-row">
            <div class="form-group">
              <label for="name">1. Name of the student :</label>
              <input type="text" name="name" id="name" required />
            </div>
            <div class="form-group">
              <label for="course">1.1 Course</label>
              <div class="form-select">
                <select name="course" id="course">
                  <option value=""></option>
                  <option value="ug">Under Graduate</option>
                  <option value="pg">Post Graduate</option>
                  <option value="phd">PhD</option>
                </select>
                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="roll">2. Roll No.</label>
              <input type="text" name="roll" id="address" required />
            </div>
            <div class="form-group">
              <label for="department">3. Department</label>
              <input type="text" name="department" id="department" required />
            </div>

          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="nature_of_event">4. Nature of Event</label>
              <input type="text" name="nature_of_event" id="address" required />
            </div>
            <div class="form-group">
              <label for="name_of_the_event">5. Name of the Event</label>
              <input type="text" name="name_of_the_event" id="address" required />
            </div>
          </div>
          <div class="form-group">
            <label for="place">6. Place(S) of the event (Visit) Conference / Training Course / Workshop Seminar / Symposium / Others (Complete Address):</label>
            <input type="text" name="place" id="birth_date">
          </div>
          <div class="form-group">
            <label for="">7. Duration required for the event with date(S) :</label>
            <div class="form-row">

              <div class="form-group">
                <label for="from_date">From (DD/MM/YY) :</label>
                <input type="text" name="from_date" id="from_date">
              </div>
              <div class="form-group">
                <label for="to_date">To (DD/MM/YY) :</label>
                <input type="text" name="to_date" id="to_date">
              </div>
              <div class="form-group">
                <label for="no_of_days">No. of days :</label>
                <input type="text" name="no_of_days" id="no_of_days">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="organizer">8. Organizer of the event :</label>
            <input type="text" name="organizer" id="organizer" required />
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <label class="custom-file-label" for="relevance">9. Relevance of the visit / training: (Attach Separate Sheet, if required)</label>
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="relevance" id="relevance" aria-describedby="inputGroupFileAddon01">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <label class="custom-file-label" for="objective">10. Clear objective and outcome of the visit: (Attach Separate Sheet, if required)</label>
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="objective" name="objective" aria-describedby="inputGroupFileAddon01">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <label class="custom-file-label" for="cv">11. Attach (i) brief CV / biography. </label>
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="cv" name="cv" aria-describedby="inputGroupFileAddon01">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="custom-file-label" for="certificate">12. Attach certificate from HoD regarding relevance of the event for the applicant and by stating that the event will benefit for the applicant.</label>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="certificate" aria-describedby="inputGroupFileAddon01">
                </div>
                <div class="form-row">
                  <div class="form-group">
                    <label for="date_time_d">13. Date and time of departure from the Institute:</label>
                    <input type="text" name="date_time_d" id="date_time_d" required />
                  </div>
                  <div class="form-group">
                    <label for="date_time_a">14. Date and time of arrival from the Institute:</label>
                    <input type="text" name="date_time_a" id="date_time_a" required />
                  </div>
                </div>

              </div>
            </div>
          </div>



          <div class="form-group">
            <label for="research">15. Whether going to present research paper :</label>
            <div class="form-select">
              <select name="research" id="research">
                <option value=""></option>
                <option value="ug">Yes</option>
                <option value="pg">No</option>
              </select>
              <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
            </div>
          </div>
          <div class="form-group">
            <label for="title">16. Title of Paper :</label>
            <input type="text" name="title" id="title" required />
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <label class="custom-file-label" for="accepted_paper">17. Attach the accepted paper, acceptance letter, NOC from co-authors:</label>
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="accepted_paper" aria-describedby="inputGroupFileAddon01">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="total_cost">18. Total cost involved :</label>
            <div class="form-row">
              <div class="form-group">
                <label for="rs">Rupees (Rs.):</label>
                <input type="text" name="from_date" id="rs">
              </div>
              <div class="form-group">
                <label for="trs">Rupees (In Words) :</label>
                <input type="text" name="trs" id="trs">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="custom-file-label" for="cost_details">Cost details :</label>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="cost_details" aria-describedby="inputGroupFileAddon01">
                </div>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="regestration">Registration fee:</label>
              <input type="text" name="regestration" id="regestration">
            </div>
            <div class="form-group">
              <label for="ta">TA :</label>
              <input type="text" name="ta" id="ta">
            </div>
            <div class="form-group">
              <label for="others">Others, if any :</label>
              <input type="text" name="others" id="others">
            </div>
          </div>
          <div class="form-group">
            <label for="cgpa">19. CGPA of the candidate (Only for UG / M.Tech and M.Sc students) : </label>
            <input type="text" name="cgpa" id="cgpa" required />
          </div>

          <div class="form-group">
            <label for="mtech">20. For M.Tech, M.Sc and PhD candidates : Whether one paper has been accepted for publication in SCI Journal in Last two years : </label>
            <div class="form-select">
              <select name="mtech" id="mtech">
                <option value=""></option>
                <option value="yy">Yes</option>
                <option value="nn">No</option>
              </select>
              <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="custom-file-label" for="signstudent">21. Signature of the Student</label>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="signstudent" aria-describedby="inputGroupFileAddon01">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="custom-file-label" for="signsupervisor">22. Signature of the Supervisor</label>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="signsupervisor" aria-describedby="inputGroupFileAddon01">
                </div>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="recommended">23. Recommended / not Recommended by HoD : </label>
              <div class="form-select">
                <select name="recommended" id="recommended">
                  <option value=""></option>
                  <option value="r">Recommended</option>
                  <option value="nr">Not Recommended</option>
                </select>
                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="custom-file-label" for="signhod">22. Signature of the Hod (with seal) :</label>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="signhod" aria-describedby="inputGroupFileAddon01">
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="js/main.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
