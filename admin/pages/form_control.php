<?php
    include('../../assets/php/functions.php');
    if(isset($_GET['show_forms'])){
		echo show_forms();
	}
elseif(isset($_GET['form_toggle'])){
	$state=mysqli_real_escape_string($dbconfig,$_POST['state']);
	$id=mysqli_real_escape_string($dbconfig,$_POST['id']);
	echo form_toggle($state,$id);
}
elseif(isset($_GET['show_edit'])){
	$id=mysqli_real_escape_string($dbconfig,$_POST['id']);
	echo show_edit_form_control($id);
}
elseif(isset($_GET['edit_form'])){
	$id=mysqli_real_escape_string($dbconfig,$_POST['id']);
	$title=mysqli_real_escape_string($dbconfig,$_POST['title']);
	$subtitle=mysqli_real_escape_string($dbconfig,$_POST['subtitle']);
	$guidelines=mysqli_real_escape_string($dbconfig,$_POST['guidelines']);
	$intro=mysqli_real_escape_string($dbconfig,$_POST['intro']);
	$docs=mysqli_real_escape_string($dbconfig,$_POST['docs']);

	echo edit_form_control($id,$title,$subtitle,$guidelines,$intro,$docs);
}
 else{
	 $result=get_department_data();
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
              <span class="count-numbers">'.$result['dept'].'</span>
              <span class="count-name">Number of Departments</span>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-counter info w-100">
              <!-- <i class="fa fa-users"></i> -->
              <span class="count-numbers">'.$result['users'].'</span>
              <span class="count-name">Number of Users</span>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-counter danger">
              <!-- <i class="fa fa-ticket"></i> -->
              <span class="count-numbers">'.$result['forms'].'</span>
              <span class="count-name">Number of active forms</span>
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
          <span class="count-numbers">'.$result['dept'].'</span>
          <span class="count-name">Number of Departments</span>
        </div>
      </div>

      <div class="col-lg-4 d-none d-lg-block">
        <div class="card-counter info">
          <!-- <i class="fa fa-users"></i> -->
          <span class="count-numbers">'.$result['users'].'</span>
          <span class="count-name">Number of Users</span>
        </div>
      </div>
      <div class="col-lg-4 d-none d-lg-block">
        <div class="card-counter danger">
          <i class="fa fa-ticket"></i>
          <span class="count-numbers">'.$result['forms'].'</span>
          <span class="count-name">Number of active forms</span>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="content" style="padding:0 30px 30px; min-height:calc(100vh - 123px); margin-top:-30px;">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title col-" style="margin-left:1%;"> List of Forms</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Form ID
                </th>
                <th>
                  Form Name
                </th>
                <th class="text-right">
                  Activate/Deactivate
                </th>
                <th class="text-right">
                 Actions
                </th>
              </thead>
              <tbody id="forms_table">
                '.show_forms().'
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



<!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

      
        <div class="modal-body">

           

      <div class="modal-content" id="modal-content">
        <br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
  </div>
</div>
';
 }
?>
