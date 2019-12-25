<div class="wrapper ">
  <div class="sidebar" data-color="red">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo" >
      <a href="#" class="simple-text logo-normal" style="margin-left:10%;">
        NIT Jalandhar
      </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">
        <li class="active ">
          <a href="../examples/dashboard.html">
            <i class="now-ui-icons design_app"></i>
            <p>User's Dashboard</p>
          </a>
        </li>
        <li>
          <a href="../examples/icons.html">
            <i class="now-ui-icons education_atom"></i>
            <p>Departments</p>
          </a>
        </li>
        <li>
          <a href="../examples/map.html">
            <i class="now-ui-icons location_map-big"></i>
            <p>Form Contol</p>
          </a>
        </li>
        <li>
          <a href="../examples/notifications.html">
            <i class="fa fa-users" aria-hidden="true"></i>
            <p>Manage Users</p>
          </a>
        </li>
        <li>
          <a href="../examples/user.html">
            <i class="now-ui-icons users_single-02"></i>
            <p>Your Profile</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="main-panel" id="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <div class="navbar-toggle">
            <button type="button" class="navbar-toggler">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </button>
          </div>
          <a class="navbar-brand" href="#pablo">Hey <?php echo $_SESSION['user_name']; ?> </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
          <ul class="navbar-nav">
            <!-- <li class="nav-item">
              <a class="nav-link" href="#pablo">
                <i class="now-ui-icons media-2_sound-wave"></i>
                <p>
                  <span class="d-lg-none d-md-block">Stats</span>
                </p>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="now-ui-icons location_world"></i>
                <p>
                  <span class="d-lg-none d-md-block">Some Actions</span>
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="#pablo">
                <i class="now-ui-icons users_single-02"></i>
                <p>
                  <span class=" d-md-block">Log out</span>
                </p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
