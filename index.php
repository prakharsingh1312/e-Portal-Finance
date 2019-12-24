<?php
    include('assets/php/functions.php');
    ?>
<html lang="en">

<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>
<?php echo global_website_title;?>
</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<!--     Fonts and icons     -->
<script src="https://kit.fontawesome.com/d254fa3c43.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- CSS Files -->
<link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="./assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="./assets/demo/demo.css" rel="stylesheet" />
</head>
<body class="login-page sidebar-collapse">
<div class="page-header clear-filter" filter-color="orange">
<?php include('header.php');
    
    ?>


<div class="wrapper"></div>
</div>
<!--//<footer class="footer">
//<div class=" container ">
//<nav>
//<ul>
//<li>
//<a href="#" class="center">
//National Institute of Technology, Jalandhar
//</a>
//</li>
//</ul>
//</nav>
//</div>
//</footer>-->


<script src="./assets/js/jquery.js" type="text/javascript"></script>
<script src="./assets/js/jquery-cookies.js" type="text/javascript"></script>
<script src="./assets/js/jquery-base64.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="./assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
<script src="./assets/js/main.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
                  // the body of this function is in assets/js/now-ui-kit.js
                  nowuiKit.initSliders();
                  });

function scrollToDownload() {
    
    if ($('.section-download').length != 0) {
        $("html, body").animate({
                                scrollTop: $('.section-download').offset().top
                                }, 1000);
    }
}
</script>
</body>
