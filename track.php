<?php
include('assets/php/functions.php');
	echo '<div class="page-header-image" data-parallax="true" style="background-image:url(\'./assets/img/header.jpg\');">
    </div><div class="container">
  <div class="content-center brand">
  <div id="notification_div"><div id="notification_inner_div"><div id="notification_inner_cell_div"></div></div></div>
      <div class="col-md-4 ml-auto mr-auto">
        <div class="card card-login card-plain">
          <form class="form" action="javascript:void(0)" id="login_form">
            <div class="card-header text-center">
              <div class="logo-container">
                <img src="./assets/img/now-logo.png" alt="">
              </div>
            </div>
            <div class="card-body">
              <div class="input-group no-border input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons users_circle-08"></i>
                  </span>
                </div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Roll Number">

              </div>
              <div class="input-group no-border input-lg" style="margin-bottom:0px">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-key" aria-hidden="true"></i>
                  </span>
                </div>
                <input type="textpassword" id="password" placeholder="Tracking ID" name="password" class="form-control" />
                <!-- <div class="red-text"></div> -->
              </div>
            </div>
            <div class="card-footer text-center">
              <input type="button" name="submit" value="Submit" class="btn btn-primary btn-round btn-lg btn-block login_button">
              <!--   <div class="pull-left">
                <h6>
                  <a href="#" class="link">Forget Password</a>
                </h6>
              </div>
              <div class="pull-right">
                <h6>
                  <a href="#pablo" class="link">Need Help?</a>
                </h6>
              </div>-->
            </div>
          </form>
        </div>
      </div><div>
    </div>';

?>
