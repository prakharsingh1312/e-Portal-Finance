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

      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Form</h5>
          <!-- <h5 class="modal-title" id="exampleModalLabel">Edit an Existing Department</h5> -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="form-group">
              <label for="exampleInputEmail1">Form Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
              <!-- <label for="exampleInputEmail1">Department Name :</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Form Title</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
              <!-- <label for="exampleInputPassword1">Department Abbriviation :</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
            </div>

                  <div class="control-group" id="fields">
                      <label class="control-label" for="field1">Add Path of Form</label>
                      <div class="controls">
                          <form role="form" autocomplete="off">
                              <div class="entry form-group col-xs-3" style="margin-top:10px" >
                                  <input class="form-control" name="fields[]" type="text" placeholder="Enter department ID" />
                                <span class="input-group-btn">
                                      <button class="btn btn-success btn-add" type="button" style="margin-left:90%">
                                          <span class="glyphicon glyphicon-plus" style="font-size:12px"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                      </button>
                                  </span>
                              </div>
                          </form>
                      </div>
                  </div>





        </div>
        <div id="accordion">
        <div class="card">
        <div class="card-header" id="headingOne">


        <button type="button" class="btn btn-outline-info btn-lg btn-block" style="float:left"data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Edit Guidelines</button>


        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.
        </div>
        </div>
        </div>
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>
          <button type="button" class="btn btn-primary">Update Form</button>
          <!-- <button type="button" class="btn btn-primary">Save Department</button> -->

        </div>
      </div>

      <div class="modal-content" id="modal-content">
        <br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
  </div>
</div>
';
 }
?>
