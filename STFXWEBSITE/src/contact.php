<?php
require 'utils/dbcontroller.php';
require 'utils/utilities.php';
$db_handle = new DBController();
$utilities = new Utilities();
session_start();
$logged_in = $utilities->isLoggedin($db_handle);
?>
<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->
<head>
    <meta name="robots" content="noindex">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swift.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">

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
$page = 'contact';
?>
<body class="contact">

<!--Loading Screen-->
<div id="loading">
    <div class="logo-loader">
        <img src="images/swift/logo.png" alt="header-logo">
    </div>
</div>

<header class="bg-primary-white header-sticky">
    <?php include("inc/header.php"); ?>
</header>

<section class="header-title signals-bg">
    <h2>Get in touch</h2>
</section>

<section id="premium">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="c-info-wrapper">
                    <h4>We are here to help you <span>24X7</span>.</h4>
                    <div class="c-in">
                        <h3><img src="images/swift/icons/email.png"> E-Mail</h3>
                        <a href="mailto:abc@email.com">contact@swifttradesfx.co.uk</a>
                    </div>
                    <div class="c-in">
                        <h3><img src="images/swift/icons/chat.png"> Live Chat</h3>
                        <a href="mailto:abc@email.com">Open Chat</a>
                    </div>
                    <div class="c-in">
                        <a href="#"><h3><img src="images/swift/icons/telegram.png" style="width: 50px;"> Free Telegram Group</h3></a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 offset-1">
                <div class="features-box">
                    <div class="c-form">
                        <h2 class="title faq-title">Write your message</h2>

                        <div class="c-in-wrapper">
                            <input type="text" placeholder="Your Name" name="name">
                        </div>
                        <div class="c-in-wrapper">
                            <input type="email" placeholder="E-mail Address" name="email">
                        </div>
                        <div class="c-in-wrapper">

                            <textarea rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <div class="c-in-wrapper">
                            <a class="btn-large btn-fill-green text-bold mr-2">Send message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light space--md" id="faq">
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="accordion">
                    <div class="text-center">
                        <h2 class="text-bold heading-title heading-title-m">Frequently Ask Questions</h2>
                    </div>
                    <div class="accordion-item">
                        <a>How can I pay and access my trading materials</a>
                        <div class="content">
                            <p>
                                You can pay for our signal service from our website via PayPal. Invite link to the VIP group and Trading materials will be sent to your email immediately after the payment is confirmed.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a>Is the support team accessible if I want to talk to them?</a>
                        <div class="content">
                            <p>
                                Our support team is available 24 x 7 and they can be reached via Live Chat, Telegram Chat and E-mail.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a>How can I pay and access my trading materials</a>
                        <div class="content">
                            <p>
                                You can pay for our signal service from our website via PayPal. Invite link to the VIP group and Trading materials will be sent to your email immediately after the payment is confirmed.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a>Is the support team accessible if I want to talk to them?</a>
                        <div class="content">
                            <p>
                                Our support team is available 24 x 7 and they can be reached via Live Chat, Telegram Chat and E-mail.
                            </p>
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
<script src="js/accordian.js"></script>
<script src="js/headroom.min.js"></script>
<script src="js/jQuery.headroom.js"></script>
<script src="js/jquery.paroller.js"></script>
<script src="js/skrollr.min.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/script.js"></script>
<script>
    jQuery(document).ready(function($){
        const items = document.querySelectorAll(".accordion a");
        function toggleAccordion(){
            this.classList.toggle('active');
            this.nextElementSibling.classList.toggle('active');
        }
        items.forEach(item => item.addEventListener('click', toggleAccordion));
    });
</script>
</body>
</html>
