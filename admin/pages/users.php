<?php
    include('../../assets/php/functions.php');
   if(isset($_GET['show_users'])){
	   echo show_users();
   }
elseif(isset($_GET['add_user'])){
	$username=mysqli_real_escape_string($dbconfig,$_POST['username']);
	$first=mysqli_real_escape_string($dbconfig,$_POST['first']);
	$email=mysqli_real_escape_string($dbconfig,$_POST['email']);
	$dept=mysqli_real_escape_string($dbconfig,$_POST['dept']);
	$role=mysqli_real_escape_string($dbconfig,$_POST['role']);
	echo add_user($username,$first,$email,$dept,$role);
}
elseif(isset($_GET['edit_user'])){
	$username=mysqli_real_escape_string($dbconfig,$_POST['username']);
	$first=mysqli_real_escape_string($dbconfig,$_POST['first']);
	$email=mysqli_real_escape_string($dbconfig,$_POST['email']);
	$dept=mysqli_real_escape_string($dbconfig,$_POST['dept']);
	$role=mysqli_real_escape_string($dbconfig,$_POST['role']);
	$id=mysqli_real_escape_string($dbconfig,$_POST['id']);
	echo edit_user($id,$username,$first,$email,$dept,$role);
}
elseif(isset($_GET['show_edit_user'])){
	$id=mysqli_real_escape_string($dbconfig,$_POST['id']);
	echo show_edit_user($id);
}
elseif(isset($_GET['delete_user'])){
	$id=mysqli_real_escape_string($dbconfig,$_POST['id']);
	echo delete_user($id);
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
          <h4 class="card-title col-" style="margin-left:1%;"> List of Users</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  User ID
                </th>
                <th>
                  Username
                </th>
                <th>
                  Name
                </th>
                <th class="text-right">
                  Actions
                </th>
              </thead>
              <tbody id="users_table">
                '.show_users().'
              </tbody>
            </table>
          </div>

          <button type="button" class="btn btn-primary show_add_user_button" data-toggle="modal" data-target="#exampleModal">
          New User
        </button>
        </div>
      </div>
    </div>
  </div>


<!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="modal-content">
        <br><br><br><br><br><br><br><br><br><br><br>
    </div>
  </div>
</div>
';
}
?>
