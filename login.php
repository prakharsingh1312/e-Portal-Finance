<?php 
include('assets/php/functions.php');
$errors=['u' => "Username" , 'p' => "Password"];
if(isset($_GET['login']))
{
	$username=mysqli_real_escape_string($dbconfig,$_POST['username']);
	$password=mysqli_real_escape_string($dbconfig,$_POST['password']);
	echo login($username,$password);
}
else
{
	echo '<div class="container">
		<div class="content-center brand">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form class="form" method="POST" action="">
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
                  <input type="text" class="form-control" id="username" name="username" placeholder="'. $errors[ 'u'].'">

                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="text" id="password" placeholder="'. $errors['p'].'" name="password" class="form-control" />
                  <!-- <div class="red-text"></div> -->
                </div>
              </div>
              <div class="card-footer text-center">
                <input type="button" name="submit" value="Submit" class="btn btn-primary btn-round btn-lg btn-block login_button">
                <div class="pull-left">
                  <h6>
                    <a href="#" class="link">Forget Password</a>
                  </h6>
                </div>
                <div class="pull-right">
                  <h6>
                    <a href="#pablo" class="link">Need Help?</a>
                  </h6>
                </div>
            </form>
            </div>
          </div>
        </div><div>
      </div>';
}
?>
