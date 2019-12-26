<?php include('../../assets/php/functions.php'); ?>
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
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Edit Profile</h5>
        </div>
        <div class="card-body">
          <form>
            <div class="row">
              <div class="col-md-5 pr-1">
                <div class="form-group">
                  <label>User ID</label>
                  <input type="text" class="form-control" disabled="" placeholder="Company" value="<?php echo $_SESSION['user_id'] ?>">
                </div>
              </div>
              <div class="col-md-3 px-1">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" disabled="" placeholder="Username" value="<?php echo $_SESSION['username'] ?>">
                </div>
              </div>
              <div class="col-md-4 pl-1">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" placeholder="<?php echo $_SESSION['user_email'] ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 pr-1">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" placeholder="Company" value="<?php echo $_SESSION['user_name'] ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Department</label>
                  <input type="text" class="form-control" disabled="" placeholder="Home Address" value="<?php echo $_SESSION['user_dept'] ?>">
                </div>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-md-4 pr-1">
                <div class="form-group">
                  <label>City</label>
                  <input type="text" class="form-control" placeholder="City" value="Mike">
                </div>
              </div>
              <div class="col-md-4 px-1">
                <div class="form-group">
                  <label>Country</label>
                  <input type="text" class="form-control" placeholder="Country" value="Andrew">
                </div>
              </div>
              <div class="col-md-4 pl-1">
                <div class="form-group">
                  <label>Postal Code</label>
                  <input type="number" class="form-control" placeholder="ZIP Code">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>About Me</label>
                  <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                </div>
              </div>
            </div> -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Save Changes
          </button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card ">
        <div class="card-header">
          <h5 class="title">Change password</h5>
        </div>
        <div class="card-body">
          <form >
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Previous Password</label>
                  <input type="password" class="form-control" placeholder="Home Address" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>New Password</label>
                  <input type="password" class="form-control" placeholder="Home Address" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" class="form-control" placeholder="Home Address" value="">
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal">
            Save Changes
          </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- MODAL -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Authentication Required</h5>
        <!-- <h5 class="modal-title" id="exampleModalLabel">Edit an Existing Department</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Enter your password</label>
            <input type="Password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
            <!-- <label for="exampleInputEmail1">Department Name :</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> -->
          </div>


        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>
        <button type="button" class="btn btn-primary">Update Changes</button>
        <!-- <button type="button" class="btn btn-primary">Save Department</button> -->

      </div>
    </div>
  </div>
</div>
</div>
