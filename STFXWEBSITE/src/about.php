<?php
require'utils/dbcontroller.php';
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
    <title>Who we are - SwifttradexFx</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
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
    <style>
        .header-title h2{
            font-weight: 300 !important;
            z-index:1;
        }
    </style>
</head>

<?php
$page = 'about';
?>
<body class="about">

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
    <h2>Best Trading Signals. Always.</h2>
</section>


<section class="about-first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="about-intro">
                    <h3>Who We Are</h3>

                    <p>London based forex signal provider, we actively set out to provide premium signals for our customers, whether you are a new or an experienced trader we provide the best services and education, along with our premium Packages.</p>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="row boxed separated features-box">
                <div class="col-md-6 col-lg-4 p-5 text-center">
                    <img src="images/swift/icons/star.png" data-aos="zoom-in" class="img-icon" style="width: 70px;">
                    <h4 class="fs-24 bg-primary-blue-text font-weight-normal">Quality Signals</h4>
                    <p>You will be able to learn the basics of forex trading along with powerful strategies to ensure account growth.</p>
                </div>
                <div class="col-md-6 col-lg-4 p-5 text-center">
                    <img src="images/swift/icons/support.png" class="img-icon" data-aos="zoom-in">
                    <h4 class="fs-24 bg-primary-blue-text font-weight-normal">Awesome Support</h4>
                    <p>Book a date with our traders to discuss any difficulties or to learn new trading strategy.</p>
                </div>

                <div class="col-md-6 col-lg-4 p-5 text-center">
                    <img src="images/swift/icons/graph.png" class="img-icon" data-aos="zoom-in">
                    <h4 class="fs-24 font-weight-normal bg-primary-blue-text">Trading Packages</h4>
                    <p>We have traders on standby 24/7 to assist you with all your trading needs, questions and doubts!</p>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="about-proof" id="legitimacy">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="about-intro">
                    <h3>Legitimacy and Success</h3>


                    <p>
                        #1 Our Signals are configured by our specialised team members, some with more than 10 years of experience in trading behind them, furthermore, they are equipped with all the information needed to help you achieve the profits you so well desire!

                    </p>


                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">

                <div class="legit-slider-img">
                    <div class="profit-img">
                        <img src="images/swift/profits/image0.jpg">
                    </div>
                    <div class="profit-img">
                        <img src="images/swift/profits/image1.jpg">
                    </div>
                    <div class="profit-img">
                        <img src="images/swift/profits/image3.jpg">
                    </div>
                </div>

            </div>
            <div class="col-md-8 m-auto">
                <div class="profit-text">
                    <h5>Profit</h5>

                    <div class="legit-slider-text">
                        <div>
                            <div class="price-p">£60 <span> in a day.</span></div>

                            <p>
                                He just started in the forex market with us, deposited £1000 and decided to use our signals as a route to his success, after just 1 day of signals he was already up £60 by without exceeding the recommended risk management/lot size. He's already made %5 of his investment back on the first day!
                            </p>
                        </div>
                        <div>
                            <div class="price-p">£120 <span> in a day.</span></div>

                            <p>
                                Another one of our clients, never traded before! Decided to deposit £3000 and start trading with us, within just 1 day of trading he was able to make £102.64 in a matter of minutes, by simply copying our trades and listening to our instructions he was able to make himself some amazing profits, and the week still hasn't ended!
                            </p>
                        </div>
                        <div>

                            <div class="price-p">£24 <span> in a day.</span></div>
                            <p>
                                One of our smaller accounts, here we at STFX we like to show the large and small accounts so you can start to predict what profits you may be getting per day/week. This is a £100-200 account balance, and as you can see he used a very small risk and was able to reward himself with £24 profit in one day, a very good day.
                            </p>
                        </div>
                    </div>

                    <div class="intro-btn-wrapper profit-btn">
                        <span class="text-center"><a href="register?plan=premium" class="btn-large btn-fill-green d-block text-bold">Join Premium</a></span>
                        <a href="register?plan=free" class="profit-try-demo">Or try our free signals</a>
                    </div>
                </div>

            </div>
        </div>

        <button class="next-slick"><i class="fas fa-chevron-right"></i></button>
        <button class="prev-slick"><i class="fas fa-chevron-left"></i></button>
    </div>



</section>


<section class="bg-primary-blue py-0 cta">
    <div class="container py-4">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 text-center-mobile">
                <h3 class="text-normal cta-text text-white mb-0">In Doubt? Try our signals for free.</h3>
            </div>
            <div class="col-md-4 mb-sm-1 text-sm-right">
                <a href="register.php?plan=free" class="btn-large btn-fill-white text-bold button-login">Join Free and try</a>
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
<script src="js/slick.min.js"></script>
<script src="js/jQuery.headroom.js"></script>
<script src="js/jquery.paroller.js"></script>
<script src="js/skrollr.min.js"></script>
<script src="js/script.js"></script>



<script>
    jQuery(document).ready(function($){
        const items = document.querySelectorAll(".accordion a");

        function toggleAccordion(){
            this.classList.toggle('active');
            this.nextElementSibling.classList.toggle('active');
        }

        items.forEach(item => item.addEventListener('click', toggleAccordion));


        $('.legit-slider-img').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            fade: true,
            asNavFor: '.legit-slider-text'
        });
        $('.legit-slider-text').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '.legit-slider-img',
            dots: false,
            arrows:false,
            autoplay: true,
            autoplaySpeed: 2000,
            fade: true,
            centerMode: false,
            focusOnSelect: true
        });




    });
</script>
</body>
</html>
