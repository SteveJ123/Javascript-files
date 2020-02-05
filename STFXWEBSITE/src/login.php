<?php
require'utils/dbcontroller.php';
require 'utils/utilities.php';
$db_handle = new DBController();
$utilities = new Utilities();
session_start();
$loggedin = $utilities->isLoggedin($db_handle);
if($loggedin){
    header('location: dashboard');
}
?>
<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->
<head>
    <meta name="robots" content="noindex">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swift.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<?php
$page = 'login';
?>

<body>
<!--Loading Screen-->
<div id="loading">
    <div class="logo-loader">
        <img src="images/swift/logo.png" alt="header-logo">
    </div>
</div>
<header class="bg-primary-white">
    <?php include("inc/header.php"); ?>
</header>

<section class="p-0">
    <div class="container-fluid">
        <div class="row align-items-center vh-100">
            <div class="col-md-4 offset-1 p-0">
                <div class="login-form-wrapper  pl-4">
                    <span class="eyebrow mb-1 text-bold text-primary mb-1">Welcome Back!</span>
                    <h3>Login into your account</h3>

                    <form class="sign-in-form">
                        <div class="spacer-30">
                            <input type="email" placeholder="Email" name="email" required>
                            <input type="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="form-feedback invalid-feedback my-2"></div>
                        <div class="login-btn-wrapper mt-2">
                            <button type="submit" class="btn-medium px-4 fs-15 py-2 btn-fill-green text-bold sign-in-btn">Sign In</button>
                            <a href="#" class="forgotten-password d-none text-bold text-black-50">Reset Password</a>
                        </div>
                    </form>

                    <hr class="hr-text my-3" data-content="OR">

                    <span><a href="register" class="btn-large btn-rounded-green text-bold d-block text-center">Create an Account</a></span>

                </div>
            </div>
            <div class="col-md-6 offset-1 p-0 login-c">
                <div class="vh-100"  data-top-top="transform: translateY(0px);"
                     data-top-bottom="transform: translateY(130px);">
                    <div class="image image-overlay image-overlay-gradient-primary" style="background-image:url('images/swift/login-cover.jpg')"></div>
                    <div class="row align-items-center vh-100">
                        <div class="col-lg-10 offset-lg-1 pull-lg-1">
                           <blockquote class="login-quote">“You can be free. You can live and work anywhere in the world. You can be independent from routine and not answer to anybody.”</blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary-blue py-4">
    <div class="container py-4">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 text-center-mobile">
                <h3 class="text-normal cta-text text-white mb-0">Looking for the Best Forex Signals?</h3>
            </div>
            <div class="col-md-4 mb-sm-1 text-sm-right">
                <a href="<?=$TOP?>/#pricing" class="btn-large btn-fill-white text-bold button-login">Get Started Now</a>
            </div>

        </div>
    </div>
</section>
<?php include('inc/footer.php'); ?>
<!--Scripts-->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/fontawesome-all.js"></script>
<script src="js/headroom.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/tilt.jquery.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/jQuery.headroom.js"></script>
<script src="js/jquery.paroller.js"></script>
<script src="js/skrollr.min.js"></script>
<script src="js/script.js"></script>
<script src="js/login.js"></script>
</body>
</html>