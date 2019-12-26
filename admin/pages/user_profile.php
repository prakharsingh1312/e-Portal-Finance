
<!-- End Navbar -->
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
<div class="content">
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
                  <input type="text" class="form-control" disabled="" placeholder="Company" value="INSERT">
                </div>
              </div>
              <div class="col-md-3 px-1">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" disabled="" placeholder="Username" value="INSERT">
                </div>
              </div>
              <div class="col-md-4 pl-1">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" placeholder="Email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" placeholder="Company" value="Mike">
                </div>
              </div>
              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Department</label>
                  <input type="text" class="form-control" disabled="" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
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
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-user">
        <div class="image">
          <img src="../assets/img/bg5.jpg" alt="...">
        </div>
        <div class="card-body">
          <div class="author">
            <a href="#">
              <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
              <h5 class="title">Mike Andrew</h5>
            </a>
            <p class="description">
              michael24
            </p>
          </div>
          <p class="description text-center">
            "Lamborghini Mercy <br>
            Your chick she so thirsty <br>
            I'm in that two seat Lambo"
          </p>
        </div>
        <hr>
        <div class="button-container">
          <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-facebook-f"></i>
          </button>
          <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-twitter"></i>
          </button>
          <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-google-plus-g"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
