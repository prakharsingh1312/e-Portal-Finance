<?php
include('../../assets/php/functions.php');
if(isset($_GET['application_filter'])){

}
elseif(isset($_GET['find_user'])){
	$part_user=mysqli_real_escape_string($dbconfig,$_POST['part_user']);
	echo find_user($part_user);
}
elseif(isset($_GET['form_timeline'])){
	$form_id=mysqli_real_escape_string($dbconfig,$_POST['form_id']);
	$form_type=mysqli_real_escape_string($dbconfig,$_POST['form_type']);
	echo form_timeline($form_id,$form_type);
}
elseif(isset($_GET['application_accept'])){
	$form_id=mysqli_real_escape_string($dbconfig,$_POST['form_id']);
	$form_type=mysqli_real_escape_string($dbconfig,$_POST['form_type']);
	$comments=mysqli_real_escape_string($dbconfig,$_POST['comments']);
	$next_user_id=mysqli_real_escape_string($dbconfig,$_POST['next_user_id']);
	echo accept_application($form_id,$form_type,$comments,$next_user_id);
}
elseif(isset($_GET['application_reject'])){
	$form_id=mysqli_real_escape_string($dbconfig,$_POST['form_id']);
	$form_type=mysqli_real_escape_string($dbconfig,$_POST['form_type']);
	$comments=mysqli_real_escape_string($dbconfig,$_POST['comments']);
	echo reject_application($form_id,$form_type,$comments);
}
else{
	$result=get_application_data();
	echo '
<div class="panel-header panel-header-lg">
  <h2 align="center" class="d-sm-block" style="color:white;">WELCOME TO YOUR DASHBOARD</h2>
  <div class="container">
    <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide d-block d-lg-none col-md-12" data-ride="carousel">
        <ol style ="margin-bottom:0.1rem;" class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active w-100">
            <div class="card-counter success">
              <!-- <i class="fa fa-database"></i> -->
              <span class="count-numbers">'.$result['accepted'].'</span>
              <span class="count-name">Applications Approved </span>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-counter info w-100">
              <!-- <i class="fa fa-users"></i> -->
              <span class="count-numbers">'.$result['pending'].'</span>
              <span class="count-name">Application Pending</span>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-counter danger">
              <!-- <i class="fa fa-ticket"></i> -->
              <span class="count-numbers">'.$result['rejected'].'</span>
              <span class="count-name">Applications Rejected</span>
            </div>
          </div>
        </div>
        <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a> -->
        <!-- <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> -->
      </div>


      <div class="col-lg-4 d-none d-lg-block">
        <div class="card-counter success">
          <!-- <i class="fa fa-database"></i> -->
          <span class="count-numbers">'.$result['accepted'].'</span>
          <span class="count-name">Applications Approved </span>
        </div>
      </div>

      <div class="col-lg-4 d-none d-lg-block">
        <div class="card-counter info">
          <!-- <i class="fa fa-users"></i> -->
          <span class="count-numbers">'.$result['pending'].'</span>
          <span class="count-name">Application Pending</span>
        </div>
      </div>
      <div class="col-lg-4 d-none d-lg-block">
        <div class="card-counter danger">
          <i class="fa fa-ticket"></i>
          <span class="count-numbers">'.$result['rejected'].'</span>
          <span class="count-name">Applications Rejected</span>
        </div>
      </div>





<!-- for admin login -->
<!-- <div class="d-none">

<div id="carouselExampleIndicators" class="carousel slide d-block d-lg-none col-md-12" data-ride="carousel">
  <ol style ="margin-bottom:0.1rem;" class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active w-100">
      <div class="card-counter success">
        <span class="count-numbers">0</span>
        <span class="count-name">Number of Departments</span>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card-counter info w-100">
        <span class="count-numbers">0</span>
        <span class="count-name">Number of Users</span>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card-counter danger">
        <span class="count-numbers">0</span>
        <span class="count-name">Number of active forms</span>
      </div>
    </div>
  </div>
</div>


<div class="col-lg-4 d-none d-lg-block">
  <div class="card-counter success">
    <span class="count-numbers">6875</span>
    <span class="count-name">Applications Approved </span>
  </div>
</div>

<div class="col-lg-4 d-none d-lg-block">
  <div class="card-counter info">
    <span class="count-numbers">35</span>
    <span class="count-name">Application Pending</span>
  </div>
</div>
<div class="col-lg-4 d-none d-lg-block">
  <div class="card-counter danger">
    <i class="fa fa-ticket"></i>
    <span class="count-numbers">599</span>
    <span class="count-name">Applications Rejected</span>
  </div>
</div>





</div> -->

<!--  -->


    </div>

  </div>

</div>
<div class="content" style="padding:0 30px 30px; min-height:calc(100vh - 123px); margin-top:-30px;">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="row">

          <div class="card-header col-md-6">
              <h4 class="card-title " style="margin-left:5%;"> Applications</h4>

          </div>
          <div class="card-header col-md-6 ">
            <div class="dropdown float-right" style="margin-right:5%;">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Select Form Category
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
				  <th>
				  Form Number
				  </th>
                <th>
                  Name
                </th>
                <th>
                  Roll Number
                </th>
                <th>
                  Form Category
                </th>
								<th>
                  Actions
                </th>
                <th class="text-right">
                  Options
                </th>
              </thead>
              <tbody id="forms_table">
                '. show_applications(0).'

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="row">
    <div class="col-lg-4">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Global Sales</h5>
          <h4 class="card-title">Shipped Products</h4>
          <div class="dropdown">
            <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
              <i class="now-ui-icons loader_gear"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <a class="dropdown-item text-danger" href="#">Remove Data</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="lineChartExample"></canvas>
          </div>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">2018 Sales</h5>
          <h4 class="card-title">All products</h4>
          <div class="dropdown">
            <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
              <i class="now-ui-icons loader_gear"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <a class="dropdown-item text-danger" href="#">Remove Data</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
          </div>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Email Statistics</h5>
          <h4 class="card-title">24 Hours Performance</h4>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="barChartSimpleGradientsNumbers"></canvas>
          </div>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card  card-tasks">
        <div class="card-header ">
          <h5 class="card-category">Backend development</h5>
          <h4 class="card-title">Tasks</h4>
        </div>
        <div class="card-body ">
          <div class="table-full-width table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" checked>
                        <span class="form-check-sign"></span>
                      </label>
                    </div>
                  </td>
                  <td class="text-left">Sign contract for "What are conference organizers afraid of?"</td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                      <i class="now-ui-icons ui-2_settings-90"></i>
                    </button>
                    <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                      <i class="now-ui-icons ui-1_simple-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-sign"></span>
                      </label>
                    </div>
                  </td>
                  <td class="text-left">Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                      <i class="now-ui-icons ui-2_settings-90"></i>
                    </button>
                    <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                      <i class="now-ui-icons ui-1_simple-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" checked>
                        <span class="form-check-sign"></span>
                      </label>
                    </div>
                  </td>
                  <td class="text-left">Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                  </td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                      <i class="now-ui-icons ui-2_settings-90"></i>
                    </button>
                    <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                      <i class="now-ui-icons ui-1_simple-remove"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5 class="card-category">All Persons List</h5>
          <h4 class="card-title"> Employees Stats</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Name
                </th>
                <th>
                  Country
                </th>
                <th>
                  City
                </th>
                <th class="text-right">
                  Salary
                </th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    Dakota Rice
                  </td>
                  <td>
                    Niger
                  </td>
                  <td>
                    Oud-Turnhout
                  </td>
                  <td class="text-right">
                    $36,738
                  </td>
                </tr>
                <tr>
                  <td>
                    Minerva Hooper
                  </td>
                  <td>
                    Curaçao
                  </td>
                  <td>
                    Sinaai-Waas
                  </td>
                  <td class="text-right">
                    $23,789
                  </td>
                </tr>
                <tr>
                  <td>
                    Sage Rodriguez
                  </td>
                  <td>
                    Netherlands
                  </td>
                  <td>
                    Baileux
                  </td>
                  <td class="text-right">
                    $56,142
                  </td>
                </tr>
                <tr>
                  <td>
                    Doris Greene
                  </td>
                  <td>
                    Malawi
                  </td>
                  <td>
                    Feldkirchen in Kärnten
                  </td>
                  <td class="text-right">
                    $63,542
                  </td>
                </tr>
                <tr>
                  <td>
                    Mason Porter
                  </td>
                  <td>
                    Chile
                  </td>
                  <td>
                    Gloucester
                  </td>
                  <td class="text-right">
                    $78,615
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</div>
<div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Admin Priviledges</h5>
          <!-- <h5 class="modal-title" id="exampleModalLabel">Edit an Existing Department</h5> -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
		  	<div class="form-row">
				<p style="margin:auto; margin-left:2%; margin-right:2%;">Financial approval: </p>
            	<div class="button-group float-right">

					<button type="button" class="btn btn-sm btn-success ">Accept</button>
					<button type="button" class="btn btn-sm btn-danger ">Reject</button>
				</div>
				<!--<div class="form-group">
            		<div class="input-group">
              			<div class="input-group-prepend">
              			</div>
						<div class="custom-file">
                			<input type="file" class="custom-file-input" name="relevance" id="form1_relevance" aria-describedby="inputGroupFileAddon01" accept="application/pdf" required />
       					</div>
            		</div>
          		</div>-->
				<div class="custom-file">
				<input type="file" class="custom-file-input" id="customFile">
				<label class="custom-file-label" for="customFile">Choose file</label>
			 </div>


            </div>
			<div class="form-row">

				<p style="margin:auto; margin-left:2%; margin-right:2%;"> Admin approval : </p>

            	<div class="button-group float-right ">

					<button type="button" class="btn btn-sm btn-success ">Accept</button>
					<button type="button" class="btn btn-sm btn-danger ">Reject</button>
				</div>
				<!--<div class="form-group">
            		<div class="input-group">
              			<div class="input-group-prepend">
              			</div>
						<div class="custom-file">
                			<input type="file" class="custom-file-input" name="relevance" id="form1_relevance" aria-describedby="inputGroupFileAddon01" accept="application/pdf" required />
       					</div>
            		</div>
          		</div>-->
				<div class="custom-file">
				<input type="file" class="custom-file-input" id="customFile">
				<label class="custom-file-label" for="customFile">Choose file</label>
			 </div>



            </div>
			<div class="form-row">
				<p style="margin:auto; margin-left:2%; margin-right:2%;"> Admin-Financial approval
				: </p>
            	<div class="button-group float-right">

					<button type="button" class="btn btn-sm btn-success ">Accept</button>
					<button type="button" class="btn btn-sm btn-danger ">Reject</button>
				</div>
				<!--<div class="form-group">
            		<div class="input-group">
              			<div class="input-group-prepend">
              			</div>
						<div class="custom-file">
                			<input type="file" class="custom-file-input" name="relevance" id="form1_relevance" aria-describedby="inputGroupFileAddon01" accept="application/pdf" required />
       					</div>
            		</div>
          		</div>-->
				<div class="custom-file">
				<input type="file" class="custom-file-input" id="customFile">
				<label class="custom-file-label" for="customFile">Choose file</label>
			 </div>


            </div>
          </form>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>
          <button type="button" class="btn btn-primary">Save changes</button>
          <!-- <button type="button" class="btn btn-primary">Save Department</button> -->

        </div>
      </div>
    </div>
  </div>




  <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="modal-content">
        <br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
    </div>
  </div>



	<!-- Modal -->
	<div class="modal fade" id="actions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Actions On This Form</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
				<p>
				<a class="btn btn-primary" style="width:100%" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
				Form timeline
				</a>

				</p>
				<div class="collapse" id="collapseExample">
					<div class="card card-body" id="form_timeline">
						
					</div>
				</div>
				<div class="panel" id = "accordion">
			<p>
				<a class="btn btn-success "  style="width:49%" data-toggle="collapse" href="#accept" aria-expanded="false" aria-controls="collapseExample" onclick="$(\'#reject\').collapse(\'hide\')">
				Accept
				</a>
				<a class="btn btn-danger " style="width:49%" data-toggle="collapse" href="#reject" aria-expanded="false" aria-controls="collapseExample" onclick="$(\'#accept\').collapse(\'hide\')">
				Reject
				</a>
				</p>
				<div class="collapse" id="accept" data-parent="#accordion">
					<div class="card card-body">
					<form>
					  <div class="form-group">
					    <label for="comments">Comments if any.</label>
					    <input type="text" class="form-control" id="accept_comments" placeholder="Type your text here...">
					    <small id="emailHelp" class="form-text text-muted">Any other info if required</small>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Forward it to :</label>
					    <div class="btn-group" style="width: 100%;"><input type="text" class="form-control dropdown-toggle find_user_input" id="next_user_id" placeholder="Username" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <div class="dropdown-menu find_user" style="">
    
  </div>
</div>
					  <button type="submit" class="btn btn-success application_accept_button">Approve</button>
					</form>
					</div>
				</div>
				</div>


				<div class="collapse" id="reject" data-parent="#accordion">
					<div class="card card-body">

					<form>
					  <div class="form-group">
					    <label for="comments">Comments if any.</label>
					    <input type="text" class="form-control" id="reject_comments" placeholder="Type your text here...">
					    <small id="emailHelp" class="form-text text-muted">Any other info if required</small>
					  </div>

					  <button type="submit" class="btn btn-danger application_reject_button">Reject</button>
					</form>
					</div>
</div>
				</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>


	 ';
}
?>
