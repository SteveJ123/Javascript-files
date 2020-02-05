<?php
require 'utils/dbcontroller.php';
require 'utils/utilities.php';
$db_handle = new DBController();
$utilities = new Utilities();
session_start();
$logged_in = $utilities->isLoggedin($db_handle);
if($logged_in){
    header('location: dashboard');
}
if(isset($_GET['plan'])){
    $plan = $_GET['plan'];
}else{
    $plan = "free";
}
?>
<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->

<head>
    <meta name="robots" content="noindex">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
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
$page = 'register';
?>

<style>
    .cta{
        margin-top: 3rem;
    }
</style>
<body class="register">
<!--Loading Screen-->
<div id="loading">
    <div class="logo-loader">
        <img src="images/swift/logo.png" alt="header-logo">
    </div>

</div>

<header class="bg-primary-white">
    <?php include("inc/header.php"); ?>
</header>

<section class="p-0" id="premium">
    <div class="container-fluid">
        <div class="row align-items-center bg-primary-white">
            <div class="col-md-4 offset-1">
                <div class="login-form-wrapper pl-4">
                    <h3 class="text-bold">Create an account</h3>
                    <form id="regForm">
                        <div class="step-1">
                            <div class="spacer-30">
                                <input type="text" placeholder="Your Name" name="name" required>
                                <div class="name-feedback invalid-feedback"></div>
                                <input type="email" placeholder="Your E-mail" name="email" required style="margin-bottom: unset;">
                                <span class="small-notice"><i>You'll receive trading packages on the email. </i></span>
                                <div class="email-feedback invalid-feedback"></div>
                                <input type="password" placeholder="Create Password" name="password" required>
                                <div class="password-feedback invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="step-2 form">
                            <div class="spacer-30 plan">
                                <p class="plan-head">Choose your plan</p>

                                <div class="option-container">
                                    <input type="radio" name="plan" id="option-1" value="free"  <?php if($plan=="free") echo "checked"; ?> >
                                    <label class="free-label" for="option-1">Free <span>£0.00/<small>week</small></span></label>
                                    <input type="radio" name="plan" id="option-2" value="premium"  <?php if($plan=="premium") echo "checked"; ?> >
                                    <label class="premium-label" for="option-2">Signals Package<span> £5.89/<small>week</small></span></label>
                                    <input type="radio" name="plan" id="option-3" value="elite"  <?php if($plan=="elite") echo "checked"; ?> >
                                    <label class="premium-label" for="option-3">Education Package<span> £10.89/<small>week</small></span></label>
                                </div>
                                <div class="plan-feedback invalid-feedback">Please select a plan.</div>
                            </div>
                        </div>
                        <div class="login-btn-wrapper d-block mt-2">
                            <span><button type="button" class="btn-large btn-fill-green text-bold text-center" id="nextBtn">Continue</button></span>
                            <span><a href="#" class="btn-large btn-prev btn-rounded text-bold text-center" id="prevBtn">Prev</a></span>
                            <div class="form-feedback invalid-feedback" style="margin-top: 2rem !important;"></div>
                            <p class="term-c">By submitting information I confirm that I agree to the swifttradesfx.co.uk Terms and Conditions and Privacy Policy and may be contacted about my application.</p>
                        </div>
                    </form>

                    <hr class="hr-text my-3" data-content="Already have an account?">
                    <span><a href="login.php" class="btn-large btn-rounded-green text-bold d-block text-center">Login</a></span>
                </div>
            </div>
            <div class="col-md-6 bg-light offset-1">
                <div class="vh-100">
                    <div class="row align-items-center vh-100 mt-md-4">
                        <div class="col-lg-8 offset-lg-2 pull-lg-1">

                            <div class="features-box bg-primary-blue">
                                <ul>
                                    <li class="y"><i class="fa fa-check-circle y"></i> Premium Telegram Signals</li>
                                    <li class="y"><i class="fa fa-check-circle y"></i> Access to Webinars</li>
                                    <li class="y"><i class="fa fa-check-circle y"></i> Access to Support</li>
                                    <li class="y"><i class="fa fa-check-circle n"></i> Premium Courses</li>
                                    <li class="y"><i class="fa fa-check-circle n"></i> One on One Sessions</li>
                                    <li class="y"><i class="fa fa-check-circle n"></i> Daily Trading Packages</li>
                                    <li class="y"><i class="fa fa-check-circle n"></i> Personal Assistance</li>
                                    <li class="y"><i class="fa fa-check-circle n"></i> Assistance over Phone</li>
                                    <li class="y"><i class="fa fa-check-circle n"></i> Attend Our Exclusive Classes</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-primary-blue py-4 cta">
    <div class="container py-4">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-8 text-center-mobile">
                <h3 class="text-normal cta-text text-white mb-0">Check our legitimacy and success rates</h3>
            </div>
            <div class="col-md-4 mb-sm-1 text-sm-right">
                <a href="<?=$TOP?>/about#legitimacy" class="btn-large btn-fill-white text-bold button-login">View Client Profits</a>
            </div>

        </div>
    </div>
</section>
<?php include('inc/footer.php'); ?>
<!--Scripts-->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/accordian.js"></script>
<script src="js/fontawesome-all.js"></script>
<script src="js/headroom.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/tilt.jquery.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/jQuery.headroom.js"></script>
<script src="js/jquery.paroller.js"></script>
<script src="js/skrollr.min.js"></script>
<script src="js/script.js"></script>
<script src="js/register.js"></script>
</body>
</html>
