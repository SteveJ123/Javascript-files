<?php

require 'utils/dbcontroller.php';
require 'utils/utilities.php';
include 'process/pay/config.php';

$db_handle = new DBController();
$utilities = new Utilities();
session_start();
$logged_in = $utilities->isLoggedin($db_handle);

if(!$logged_in){
    header('location: https://swifttradesfx.co.uk/');
}

$user_id = $_SESSION['token'];
$user = $db_handle->runQuery(sprintf("SELECT * FROM `users` WHERE `user_id`='%s'",$user_id));
$subscription = $db_handle->runQuery(sprintf("SELECT * FROM `subscription` WHERE `user_id`='%s'",$user_id));
if($subscription[0]['plan'] == "free"){
    $pay = 0.00;
    $plan = "Free";
}else if($subscription[0]['plan'] == "premium"){
    $pay = 5.89;
    $plan = "Premium";
}else if($subscription[0]['plan'] == "elite"){
    $pay = 10.89;
    $plan = "Elite";
}

$page = 'dashboard';
?>
<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->
<head>
    <meta name="robots" content="noindex">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swift.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>




<style>
    .footer footer{
        background: transparent !important;
        margin-top: 12rem;
        border-top: 1px solid #d6e5ff
        padding-top: 3rem;
    }


</style>

<div id="loading">
    <div class="logo-loader">
        <a href="<?=$TOP?>/#intro"><img src="images/swift/logo.png" alt="header-logo"></a>
    </div>

</div>


<section class="bg-light p-0">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <aside class="dashboard-sidebar">

                <div class="dashboard-sidebar-inner">
                    <div class="user-info">
                        <div class="user-desc">
                            <h4 class="text-white m-0"><?php echo $user[0]['name'];?></h4>
                            <span class="text-bold-600"><?php echo $plan;?> Member</span>
                        </div>

                    </div>

                    <div class="dashboard-sidebar-menu">
                        <ul>
                            <li class="dashboard-sidebar-active"><a href="#"><i class="material-icons">dashboard</i> Dashboard</a> </li>
                        </ul>

                    </div>

                </div>

            </aside>
        </div>

        <div class="col-md-10 px-0">

            <div class="navigation-bar">
                <div class="navigation-links-wrapper">
                    <ul>
                        <li><a href="#" class="navigation-links"><img src="images/swift/logo.png" class="logo-small"> </a> </li>

                        <li class="float-md-right" style="    margin-top: 1.1rem;">
                            <a href="logout" class="btn-medium btn-rounded btn-rounded text-bold button-login">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="dashboard-inner">
                        <div class="row">
                            <div class="col">
                                <?php if(isset($_GET['success']) && $_GET['success'] == true) {?>
                                <div id="dashboard-success" style="padding-bottom: 1rem; margin-bottom: 6rem;">
                                    <img src="images/swift/icons/success.jpg" style="width: 12%; margin-bottom: 2rem;">
                                    <h3>Payment Successful. <span>Thanks for your purchase</span></h3>
                                    <p>Check your email to access the Trading packages and to join premium telegram.</p>
                                </div>
                                <?php } ?>
                                <div class="page-header">
                                    <h3 class="mb-3">Manage Subscription</h3>
                                    <?php
                                    if($pay != 0.00 && (empty($subscription[0]['payment_status']) || $subscription[0]['payment_status'] == "Pending" || $subscription[0]['payment_status'] == "Cancelled")){
                                            ?>
                                            <div class="d-inner-cta plan-expire">
                                                <div class="d-in">
                                                    <h4><?php echo $plan;?></h4>
                                                    <p>£<?php echo $pay;?>/<span>week</span></p>
                                                </div>

                                                <div class="d-out">
                                                    <h5 class="d-h5">Your subscription isn't active.</h5>
                                                </div>

                                                <div class="d-out d-renew">
                                                    <a href="process/pay.php" class="btn-medium btn-rounded btn-rounded-white text-bold button-login">Activate now</a>
                                                </div>
                                            </div>
                                            <?php
                                    }else{
                                        ?>
                                        <div class="d-inner-cta">
                                            <div class="d-in">
                                                <h4><?php echo $plan;?></h4>
                                                <p>£<?php echo $pay;?>/<span>week</span></p>
                                            </div>
                                            <div class="d-out">
                                                <h5 class="d-h5">Your subscription is active.</h5>
                                            </div>
                                            <?php if($pay != 0.00){ ?>
                                                <div class="d-out d-renew">
                                                    <a target="_blank" href="<?=$api_url?>?cmd=_profile-recurring-payments&encrypted_profile_id=<?=$subscription[0]['subscr_id']?>" class="btn-medium btn-rounded btn-rounded-white text-bold button-login">Cancel</a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                <div class="footer">
                    <?php include('inc/footer.php'); ?>
                </div>

            </div>


        </div>

</div>
</div>
</section>



<div data-modal="can-1" class="modal">
    <article class="content-wrapper">
        <button class="close"></button>
        <header class="modal-header">
            <h2>Are you sure want to delete your account?</h2>
        </header>
        <div class="content">
            <p>
                Deleting your account will remove your current subscription and you need to purchase your existing plan again with a new account.
            </p>

            <div class="cap">
                <p>Type <b>Delete my account swift</b> in the box below.</p>
                <input type="text" placeholder="Type Here">
            </div>

        </div>

        <footer class="modal-footer">
            <button class="action">Yes, Delete My Account</button>
        </footer>
    </article>
</div>


<!--Scripts-->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/accordian.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/fontawesome-all.js"></script>
<script src="js/headroom.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/tilt.jquery.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/jQuery.headroom.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.paroller.js"></script>
<script src="js/skrollr.min.js"></script>
<script src="js/vendor.js"></script>
<script src="js/script.js"></script>


<script>
    const buttons = document.querySelectorAll(`button[data-modal-trigger]`);

    for(let button of buttons) {
        modalEvent(button);
    }

    function modalEvent(button) {
        button.addEventListener('click', () => {
            const trigger = button.getAttribute('data-modal-trigger');
        const modal = document.querySelector(`[data-modal=${trigger}]`);
        const contentWrapper = modal.querySelector('.content-wrapper');
        const close = modal.querySelector('.close');

        close.addEventListener('click', () => modal.classList.remove('open'));
        modal.addEventListener('click', () => modal.classList.remove('open'));
        contentWrapper.addEventListener('click', (e) => e.stopPropagation());

        modal.classList.toggle('open');
    });
    }

</script>

</body>
</html>