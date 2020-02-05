<?php
require '../utils/dbcontroller.php';
require '../utils/utilities.php';

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

$name = $user[0]['name'];
$plan = $subscription[0]['amount'];
ob_start();
include '../inc/email.php';
$output = ob_get_contents();
ob_end_clean();

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.zoho.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'no-reply@swifttradesfx.co.uk';
    $mail->Password   = '`6m96Um]hz4hKzxnU,vN)RSAUj)M7-X\;W~8fVujudM\'ns])QY*q[)YsN!Vg';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    //Recipients
    $mail->setFrom('no-reply@swifttradesfx.co.uk', 'SwiftFX');
    $mail->addAddress($user[0]['email'], $name);

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'SwiftFX - Payment Successful';
    $mail->Body    = $output;

    $mail->send();
} catch (Exception $e) {
}
header("location: ../dashboard?success=true");
die();