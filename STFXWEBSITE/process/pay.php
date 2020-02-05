<?php
require '../utils/dbcontroller.php';
require '../utils/utilities.php';
require 'pay/config.php';

$db_handle = new DBController();
$utilities = new Utilities();

session_start();

$logged_in = $utilities->isLoggedin($db_handle);

if(!$logged_in){
    header('location: https://swifttradesfx.co.uk/');
}

$user_id = $_SESSION['token'];

$subscription = $db_handle->runQuery(sprintf("SELECT * FROM `subscription` WHERE `user_id`='%s'",$user_id));

if($subscription[0]['plan'] == "free"){
    header("location: ../dashboard");
    die();
}

if(empty($subscription[0]['payment_status']) || $subscription[0]['payment_status'] == "Pending" || $subscription[0]['payment_status'] == "Cancelled"){
}else{
    header("location: ../dashboard");
    die();
}
if($subscription[0]['plan'] == "premium"){
    $pay_amount = 5.89;
    $item_name = "SwiftFX - Premium Plan";
    $item_number = "SwiftFX Premium";
}else if($subscription[0]['plan'] == "elite"){
    $pay_amount = 10.89;
    $item_name = "SwiftFX - Elite Plan";
    $item_number = "SwiftFX Elite";
}
$invoice_id = uniqid("i".rand(0,9));

$db_handle->doQuery("UPDATE `subscription` SET `invoice`='$invoice_id', `payment_status` = 'Pending' WHERE `user_id`='$user_id'");
?>
<!doctype html>

<html lang="en">
<head>
    <title>Pay</title>
    <meta charset="utf-8">
</head>
<body>
<form id="payform" action="<?=$api_url?>" method="post">
    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="<?=$paypalConfig['paypal_email']?>">

    <!-- Specify a Subscribe button. -->
    <input type="hidden" name="cmd" value="_xclick-subscriptions">

    <!-- Identify the subscription. -->
    <input type="hidden" name="item_name" value="<?=$item_name?>">
    <input type="hidden" name="item_number" value="<?=$item_number?>">

    <!-- Set the terms of the regular subscription. -->
    <input type="hidden" name="currency_code" value="GBP">
    <input type="hidden" name="a3" value="<?=$pay_amount?>">
    <input type="hidden" name="p3" value="1">
    <input type="hidden" name="t3" value="W">

    <!-- Set recurring payments until canceled. -->
    <input type="hidden" name="src" value="1">

    <!-- Invoice ID -->
    <input type="hidden" name="invoice" value="<?=$invoice_id?>">

    <!-- Return URLs -->
    <input type="hidden" name="cancel_return" value="<?=$paypalConfig['cancel_url']?>">
    <input type="hidden" name="return" value="<?=$paypalConfig['return_url']?>">
</form>
<script>
    document.getElementById('payform').submit();
</script>
</body>
</html>
