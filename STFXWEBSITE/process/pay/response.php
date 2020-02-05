<?php
require '../../utils/dbcontroller.php';
require '../../utils/utilities.php';
require 'config.php';

$db_handle = new DBController();
$utilities = new Utilities();

session_start();

$logged_in = $utilities->isLoggedin($db_handle);

if(!$logged_in){
    header("location: ../../dashboard");
}

$user_id = $_SESSION['token'];

if($_GET['type'] == 'cancel'){
    $db_handle->doQuery("UPDATE `subscription` SET `payment_status` = 'Cancelled' WHERE `user_id`='$user_id' and `payment_status` = 'Pending'");
    header("location: ../../dashboard");
    die();
}
$req = array(
   'cmd' => '_notify-synch',
   'tx' => $_GET['tx'],
   'at' => $paypalConfig['pdt_token']
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($req));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Host: ". parse_url($api_url)['host']));
$result = curl_exec($ch);
curl_close($ch);

if($result){
    $lines = explode("\n", trim($result));
    $response = array();
    if (strcmp ($lines[0], "SUCCESS") == 0) {
        for ($i = 1; $i < count($lines); $i++) {
            $temp = explode("=", $lines[$i],2);
            $response[urldecode($temp[0])] = urldecode($temp[1]);
        }

        $invoice = $response['invoice'];
        $amount = $response['mc_gross'];
        $payer_id = $response['payer_id'];
        $payment_date = $response['payment_date'];
        $payment_status = $response['payment_status'];
        $subscr_id = $response['subscr_id'];
        $payer_email = $response['payer_email'];
        $txn_id = $response['txn_id'];

        $sql = "UPDATE `subscription` SET 
                    `invoice`='$invoice',
                    `amount`='$amount',
                    `payer_id`='$payer_id',
                    `payment_date`='$payment_date',
                    `payment_status`='$payment_status',
                    `subscr_id`='$subscr_id',
                    `payer_email`='$payer_email',
                    `txn_id`='$txn_id'
                    
                    WHERE `user_id`='$user_id' and `payment_status` = 'Pending'";

        $db_handle->doQuery($sql);
    }
}
header("location: ../send_mail.php");
die();
