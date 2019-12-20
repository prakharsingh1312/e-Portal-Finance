<?php if(isset($_GET['login']))
{
	
}
else
{
	echo '<div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form class="form" method="" action="">
              <div class="card-header text-center">
                <div class="logo-container">
                  <img src="../assets/img/now-logo.png" alt="">
                </div>
              </div>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name="username" placeholder="'. $errors[ 'u'].'">

                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="text" placeholder="'. $errors['p'].'" name="password" class="form-control" />
                  <!-- <div class="red-text"></div> -->
                </div>
              </div>
              <div class="card-footer text-center">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-round btn-lg btn-block">
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
        </div>
      </div>';
}
?>
