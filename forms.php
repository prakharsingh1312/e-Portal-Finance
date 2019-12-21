<?php
include('assets/php/functions.php');
if(isset($_GET['from']))
{
	$formid=mysqli_real_escape_string($dbconfig,$_POST['formid']);
	echo get_form($formid);
}
else
{
echo '<div class="page-header-image" data-parallax="true" style="background-image:url(\'./assets/img/header.jpg\');">
      </div>
<div class="container">
		<div class="content-center brand">
		<div id="notification_div"><div id="notification_inner_div"><div id="notification_inner_cell_div"></div></div></div>
			<h1>Forms Available</h1>
	        <div class="col-md-6 ml-auto mr-auto">
	          <div class="card card-login card-plain">
							<div class="card" style="width: 18rem; background-color:#212529;">
	  						<img src="assets/img/form1.png" class="card-img-top" alt="form-1" style="display:inline-block;">
	  						<div class="card-body">
	    						<h5 class="card-title" style="textcolor:black;">National Visit Form</h5>
	    						<p class="card-text">Proposal for attending national conference/training course/others under TEQIP-III (Annexure "A")</p>
	    						<a href="./forms/form1.php" class="btn btn-primary">Fill Up the Form</a>
	  						</div>
							</div>
            </div>
          </div>
        </div>
      </div>
	  
';
}
?>
