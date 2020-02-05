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
    <title>Swift Trades Fx - Forex Telegram Signals</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swift.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
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
$page = 'home';
?>

<body>

<!--Loading Screen-->
<div id="loading">
    <div class="logo-loader">
        <img src="images/swift/logo.png" alt="header-logo">
    </div>

</div>

<header class="bg-primary-white header-sticky">
    <?php include("inc/header.php"); ?>
</header>


<!-- cover -->
<section class="p-0" id="intro">
    <div class="swiper-container"
         data-top-top="transform: translateY(0px);"
         data-top-bottom="transform: translateY(130px);">
        <div class="swiper-wrapper">
            <div class="swiper-slide intro-inner">
                <div class="image cover-image" style="background-image: url('images/swift/cover6.png')"></div>
                <div class="caption" data-aos="fade-up">
                    <div class="container">
                        <div class="row align-items-center" style="margin-top: 5rem;">
                            <div class="col-lg-8" data-swiper-parallax-y="-100%">
                                <h2 class="display-2 intro-heading mb-5">We deliver high quality
                                   <!-- <div class="slidingHorizontal text-bold">
                                        <span>Real-Time</span>
                                        <span>High Quality</span>
                                        <span>Low Cost</span>
                                        <span>Most Accurate</span>

                                    </div>-->
                                    <span>signals, Helping new <br />traders everyday.</span>
                                </h2>
                                <div class="intro-btn-wrapper">
                                    <a href="#pricing" class="btn-large btn-fill-green bg-primary-green mr-2">Start Trading Now!</a>
                                </div>

                            </div>
                            <div class="col-md-4 intro-img">
                                <img src="images/swift/app-light.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / cover -->





<section id="premium">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="pre-con">
                    <div class="pre-title-wrapper">
                        <h3>Our Premium Forex telegram signal</h3>


                        <p>
                            Join our premium telegram! With our telegram we bring much better value to our customers for such a cheap price! And to add to that we don't just send our clients signals, we also offer education within your premium package.
                        </p>

                        <h4>People are loving our service</h4>

                        <div class="owl-carousel">
                            <div>
                                <div class="test-wrapper">
                                    <p>"10/10, Knew nothing about trading when I first started, now I'm able to confidently analyse graphs! Thanks</p>
                                    <div class="test-info">
                                        <div class="user-name">
                                            <h4>Harry - Elite User</h4>
                                        </div>

                                        <div class="rating">
                                            <span class="fa fa-star checked-star"></span>
                                            <span class="fa fa-star checked-star"></span>
                                            <span class="fa fa-star checked-star"></span>
                                            <span class="fa fa-star checked-star"></span>
                                            <span class="fa fa-star checked-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="test-wrapper">
                                    <p>"Good Signals, consistent"</p>
                                    <div class="test-info">
                                        <div class="user-name">
                                            <h4>James - Premium User</h4>
                                        </div>

                                        <div class="rating">
                                            <span class="fa fa-star checked-star"></span>
                                            <span class="fa fa-star checked-star"></span>
                                            <span class="fa fa-star checked-star"></span>
                                            <span class="fa fa-star checked-star"></span>
                                            <span class="fa fa-star checked-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="test-wrapper">
                                    <p>"Very benificial, teaching skills are amazing, was able to learn new strategies effortlessly!</p>
                                    <div class="test-info">
                                        <div class="user-name">
                                            <h4>Elite User</h4>
                                        </div>

                                        <div class="rating">
                                            <span class="fa fa-star checked-star"></span>
                                            <span class="fa fa-star checked-star"></span>
                                            <span class="fa fa-star checked-star"></span>
                                            <span class="fa fa-star checked-star"></span>
                                            <span class="fa fa-star checked-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-md-5 offset-1">
                <div class="features-box bg-primary-blue">
                    <ul>
                        <li class="y"><i class="fa fa-check-circle y"></i> Free Telegram Signals (Up-to 5)</li>
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
</section>

<section id="pips">
    <div id="counter">
        <!-- <h4><span class="counter-value" data-count="900">0</span> Pips made this month!</h4>   remove -->
    </div>

</section>

<section id="features">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-bold heading-title text-center">Accelerate your trading</h2>
            </div>
        </div>
        <div class="row boxed separated features-box">
            <div class="col-md-6 col-lg-4 p-5 text-center">
                <img src="images/swift/icons/course.png" data-aos="zoom-in" class="img-icon">
                <h4 class="fs-24 bg-primary-blue-text font-weight-normal">Access to Online Courses</h4>
                <p>You will be able to learn the basics of forex trading along with powerful strategies to ensure account growth.</p>
            </div>
            <div class="col-md-6 col-lg-4 p-5 text-center">
                <img src="images/swift/icons/assist.png" class="img-icon" data-aos="zoom-in">
                <h4 class="fs-24 bg-primary-blue-text font-weight-normal">1 on 1 Sessions</h4>
                <p>Book a date with our traders to discuss any difficulties or to learn new trading strategy.</p>
            </div>

            <div class="col-md-6 col-lg-4 p-5 text-center">
                <img src="images/swift/icons/support.png" class="img-icon" data-aos="zoom-in">
                <h4 class="fs-24 font-weight-normal bg-primary-blue-text">24/7 Support</h4>
                <p>We have traders on standby 24/7 to assist you with all your trading needs, questions and doubts!</p>
            </div>

            <div class="col-md-6 col-lg-4 p-5 text-center">
                <img src="images/swift/icons/assist.png" class="img-icon" data-aos="zoom-in">
                <h4 class="fs-24 font-weight-normal bg-primary-blue-text">Personal Assitance</h4>
                <p>Expert traders with years of experience ready to cater to your every need.</p>
            </div>

            <div class="col-md-6 col-lg-4 p-5 text-center">
                <img src="images/swift/icons/graph.png" class="img-icon" data-aos="zoom-in">
                <h4 class="fs-24 bg-primary-blue-text font-weight-normal">Daily Trading Packages</h4>
                <p>Daily trading packages specific to your needs, whether you’re a beginner or an expert we will send you personalised trading packages that are suited for your skill level.</p>
            </div>
            <div class="col-md-6 col-lg-4 p-5 bg-primary-blue-text text-center">
                <img src="images/swift/icons/call.png" class="img-icon"  data-aos="zoom-in">
                <h4 class="fs-24 font-weight-normal bg-primary-blue-text">Book Phone Calls</h4>
                <p> Only hang up once you’re satisfied and all your issues have been solved!</p>
            </div>


        </div>
    </div>

</section>


<!--
<section class="bg-white text-black feature-large space--md" id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h5 class="text-bold quote-text pt-4">“You can be free. You can live and work anywhere in the world. You can be independent from routine and not answer to anybody.” <cite>- Alexander Elder</cite></h5>
            </div>
        </div>
    </div>
</section>-->


<section id="free-tele">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="heading-title" style="border-bottom:unset;"> Forex Account <br>Mirroring Service</h2>

                <p>
                Here we connect your account to our master account which is managed by traders with years of experience behind them, this means that all trades that are placed will automatically be mirrored onto your account within 50ms, making your trading stress and hands-free! 
                </p>

                <ul class="mb-3">
                    <li class="y bg-primary-blue-text"><i class="fa fa-check-circle y"></i>  1500-2500 Pips Monthly</li>
                    <li class="y bg-primary-blue-text"><i class="fa fa-check-circle y"></i> Access To Webinars</li>
                    <li class="y bg-primary-blue-text"><i class="fa fa-check-circle y"></i> Daily Updates</li>
                    <li class="y bg-primary-blue-text"><i class="fa fa-check-circle y"></i> 24/7 Support</li>
                </ul>

                <a href="#pricing" class="btn-large btn-rounded-green text-bold"> Purchase</a>
                <!-- Join Our Free Channel remove -->
                <!--<span class="info-small">If you don’t have Telegram, <a href="#">Click here</a> to download</span>-->
            </div>
            <div class="col-md-4">
                <div class="free-image"  data-aos="fade-up" data-aos-duration="8000" data-aos-easing="linear">
                    <img src="images/swift/app-n1.png">
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
            <div class="col-md-12">

                <div class="legit-slider-img" >
                    <div class="profit-img">
                        <div class="iphone_x_wrapper">
                            <!-- <img src="images/swift/profits/image0.jpg"> -->
                            <img src="https://cdn.discordapp.com/attachments/674307766856318992/674312241218191379/P1.jpg" style="display: inline-block; padding-left:2%; margin-left: auto; margin-right: auto; width: 25%;">
                            <img src="https://cdn.discordapp.com/attachments/674307766856318992/674312243315343380/P3.jpg" style="display: inline-block; padding-left:2%; margin-left: auto; margin-right: auto; width: 25%;">
                            <img src="https://cdn.discordapp.com/attachments/674307766856318992/674312244393148422/P4.jpg" style="display: inline-block; padding-left:2%; margin-left: auto; margin-right: auto; width: 25%;">        
                            
                        </div>
                        </div>

                    <div class="profit-img">
                        <!-- <img src="images/swift/profits/image3.jpg"> -->
                        <img src="https://cdn.discordapp.com/attachments/674307766856318992/674312245320220702/P5.jpg" style="display: inline-block; padding-left:2%; margin-left: auto; margin-right: auto; width: 25%;">
                        <img src="https://cdn.discordapp.com/attachments/674307766856318992/674312241218191379/P1.jpg" style="display: inline-block; padding-left:2%; margin-left: auto; margin-right: auto; width: 25%;">
                            <img src="https://cdn.discordapp.com/attachments/674307766856318992/674312243315343380/P3.jpg" style="display: inline-block; padding-left:2%; margin-left: auto; margin-right: auto; width: 25%;">
                    </div>
                    
                </div>

            </div>
            <div class="" >
                <div class="">
                    <div class="legit-slider-text"></div>                    
                </div>

            </div>
        </div>

        <button class="next-slick"><i class="fas fa-chevron-right"></i></button>
        <button class="prev-slick"><i class="fas fa-chevron-left"></i></button>
    </div>



</section>


<section id="pricing">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-bold heading-title heading-title-m">Choose your plan</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="pricing-table-wrapper">
                    <div class="pricing-table-premium pricing-table-wrapper-inner">
                        <div class="price-inner">  
                        <!-- class="price-inner s-1" -->
                            <!-- <div class="clip-path-price"></div> -->
                            <h3 class="text-bold">Signals Package</h3>
                            <div class="price-p">£5.89 <span>/ Week</span></div>
                            <ul class="mb-3">
                                <li class="y"><i class="fa fa-check-circle y"></i> Premium Forex Signals</li>
                                <li class="y"><i class="fa fa-check-circle y"></i> Market Breakdowns</li>
                                <li class="y"><i class="fa fa-check-circle n"></i> Powerful Forex Strategy</li>
                                <li class="y"><i class="fa fa-check-circle y"></i> Access to Support 24/7</li>
                                <li class="y"><i class="fa fa-check-circle n"></i> Exclusive Forex Beginners Package</li>
                                <li class="n"><i class="fa fa-times-circle n"></i> Assigned Mentor</li>
                                <li class="n"><i class="fa fa-times-circle n"></i> One on One Sessions</li>
                                <li class="n"><i class="fa fa-times-circle n"></i> Assistance over Phone</li>

                            </ul>
                            <span class="text-center"><a href="register?plan=premium" class="btn-large btn-fill-green d-block text-bold">Join Premium</a></span>
                        </div>
                    </div>
                    <div class="pricing-table-premium pricing-table-wrapper-inner">
                        <div class="price-inner" style="height:94%">
                        <!-- class="price-inner"  -->
                        <div class="clip-path-price"></div>
                            <h3 class="text-bold">Account Management</h3>
                            <div class="price-p">£50.89</div> 
                            <ul class="mb-3">
                                <li class="y"><i class="fa fa-check-circle y"></i> 1500-2500 Pips Monthly</li>
                                <li class="y"><i class="fa fa-check-circle y"></i> Access To Webinars</li>
                                <li class="y"><i class="fa fa-check-circle y"></i> Daily Updates</li>
                                <li class="y"><i class="fa fa-check-circle y"></i> 24/7 Support</li>
                                <li class="y"><i class="fa fa-check-circle y"></i> 25-45% ROI Per Month</li>
                                <li class="y"><i class="fa fa-check-circle y"></i> Hourly Updates</li>
                                <li class="y"><i class="fa fa-check-circle y"></i> Assigned Mentor</li>                                                                

                            </ul>
                            <br>                            
                            <span class="text-center"><a href="register?plan=free" class="btn-large btn-rounded-green d-block text-bold" style="font-size:16px;">Join Free Package</a></span>
                        </div>
                    </div>

                    <div class="pricing-table-premium pricing-table-wrapper-inner">
                        <div class="price-inner">
                            <h3 class="text-bold">Education Package</h3>
                            <div class="price-p">£10.89 <span>/ Week</span></div>
                            <ul class="mb-3">
                                <li class="y"><i class="fa fa-check-circle y"></i> Premium Forex Signals</li>
                                <li class="y"><i class="fa fa-check-circle y"></i> Advanced Forex Education</li>
                                <li class="y"><i class="fa fa-check-circle y"></i> Market Breakdowns</li>
                                <li class="y"><i class="fa fa-check-circle n"></i> Powerful Forex Strategy</li>
                                <li class="y"><i class="fa fa-check-circle y"></i> Access to Support 24/7</li>
                                <li class="y"><i class="fa fa-check-circle n"></i> One on One Sessions</li>
                                <li class="y"><i class="fa fa-check-circle n"></i> Assigned Mentor</li>
                                <li class="y"><i class="fa fa-check-circle n"></i> Assistance over Phone</li>
                            </ul>
                            <span class="text-center"><a href="register?plan=elite" class="btn-large btn-fill-green d-block text-bold">Join Elite</a></span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-1"></div>

        </div>
    </div>
</section>

<!--

<section class="bg-light space--md">

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">

                <div class="accordion">

                    <h2 class="title faq-title"><b>FAQs</b></h2>

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

            <div class="col-md-6">
                <div class="c-form">

                    <h2 class="title faq-title"><b>Get In touch</b></h2>

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
</section>-->

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
<script src="js/accordian.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/fontawesome-all.js"></script>
<script src="js/headroom.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/aos.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/tilt.jquery.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/jQuery.headroom.js"></script>
<script src="js/jquery.paroller.js"></script>
<script src="js/skrollr.min.js"></script>
<script src="js/countUp.min.js"></script>
<script src="js/script.js"></script>
<script>
    jQuery(document).ready(function($){
        const tilt = $('.js-tilt').tilt();

        $("#devicetwo").paroller({
            factor: 0.1, factorXs: 0.1, type: 'foreground', direction: 'vertical' , transition: 'transform .4s linear'
        });

        const items = document.querySelectorAll(".accordion a");

        function toggleAccordion(){
            this.classList.toggle('active');
            this.nextElementSibling.classList.toggle('active');
        }

        items.forEach(item => item.addEventListener('click', toggleAccordion));





        var sections = $('section'),
            nav = $('nav'),
            nav_height = nav.outerHeight();

        $(window).on('scroll', function() {
            var cur_pos = $(this).scrollTop();

            sections.each(function() {
                var top = $(this).offset().top - nav_height,
                    bottom = top + $(this).outerHeight();

                if (cur_pos >= top && cur_pos <= bottom) {
                    nav.find('a').removeClass('active');
                    sections.removeClass('active');

                    $(this).addClass('active');
                    nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
                }
            });
        });

    });




    $(document).ready(function(){

                $('.legit-slider-img').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    fade: true,
                    asNavFor: '.legit-slider-text'
                });
                $('.legit-slider-text').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    asNavFor: '.legit-slider-img',
                    dots: false,
                    arrows:false,
                    fade: true,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    centerMode: false,
                    focusOnSelect: true
                });

                $('.next-slick').click(function(){
                    $('.legit-slider-text, .legit-slider-img').slick('slickNext');
                })

                $('.prev-slick').click(function(){
                    $('.legit-slider-text, .legit-slider-img').slick('slickPrev');
                })


        var a = 0;
        $(window).scroll(function() {

            var oTop = $('#counter').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                            countNum: countTo
                        },

                        {

                            duration: 1500,
                            easing: 'swing',
                            step: function() {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function() {
                                $this.text(this.countNum);
                                //alert('finished');
                            }

                        });
                });
                a = 1;
            }

        });

        $(".owl-carousel").owlCarousel();
        $( ".owl-prev").html('<i class="fas fa-caret-square-left"></i>');
        $( ".owl-next").html('<i class="fas fa-caret-square-right"></i>');
    });


</script>

</body>
</html>
