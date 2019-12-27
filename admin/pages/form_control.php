<?php
    include('../../assets/php/functions.php');
    $sql="SELECT * FROM form_details ";

    $result = $dbconfig->prepare($sql);
    $result->execute();
    $result=$result->get_result();
 ?>
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
              <span class="count-numbers">0</span>
              <span class="count-name">Number of Departments</span>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-counter info w-100">
              <!-- <i class="fa fa-users"></i> -->
              <span class="count-numbers">0</span>
              <span class="count-name">Number of Users</span>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-counter danger">
              <!-- <i class="fa fa-ticket"></i> -->
              <span class="count-numbers">0</span>
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
          <span class="count-numbers">0</span>
          <span class="count-name">Number of Departments</span>
        </div>
      </div>

      <div class="col-lg-4 d-none d-lg-block">
        <div class="card-counter info">
          <!-- <i class="fa fa-users"></i> -->
          <span class="count-numbers">0</span>
          <span class="count-name">Number of Users</span>
        </div>
      </div>
      <div class="col-lg-4 d-none d-lg-block">
        <div class="card-counter danger">
          <i class="fa fa-ticket"></i>
          <span class="count-numbers">0</span>
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
                <th>
                  Actions
                </th>
                <th class="text-right">
                  Activate/Deactivate
                </th>
              </thead>
              <tbody>
                <?php while($result1 = $result->fetch_assoc()){ ?>
                <tr>
                  <td>
                    <?php echo htmlspecialchars($result1['form_id']); ?>
                  </td>
                  <td>
                    <?php echo htmlspecialchars($result1['form_title']); ?>
                  </td>
                  <td>
                    <div class="btn-group-toggle btn-sm" data-toggle="buttons">
                      <label class="btn btn-secondary btn-sm active">
                        <input type="checkbox" checked autocomplete="off"> Checked
                      </label>
                    </div>
                  </td>
                  <td class="text-right">
                     <button type="button" class="btn btn-primary btn-sm">Edit</button>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Add Department
        </button>
        </div>
      </div>
    </div>
  </div>


<!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add a New Department</h5>
          <!-- <h5 class="modal-title" id="exampleModalLabel">Edit an Existing Department</h5> -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Department Name :</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
              <!-- <label for="exampleInputEmail1">Department Name :</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Department Abbriviation :</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
              <!-- <label for="exampleInputPassword1">Department Abbriviation :</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
            </div>


          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>
          <button type="button" class="btn btn-primary">Add Department</button>
          <!-- <button type="button" class="btn btn-primary">Save Department</button> -->

        </div>
      </div>
    </div>
  </div>
</div>
