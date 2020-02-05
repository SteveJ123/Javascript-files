<?php
include "../utils/function.php";
$keys =  array("name", "email", "password");
$response = array();

$params = array();
parse_str($_POST['data'], $params);

if(check_valid($params,$keys)) {
    require_once '../utils/dbcontroller.php';
    require_once '../utils/utilities.php';
    $db_handle = new DBController();
    $utilities = new Utilities();
    $name = $db_handle->escape_string(test_input($params['name']));
    $email = $db_handle->escape_string(test_input($params['email']));
    $plan = $db_handle->escape_string(test_input($params['plan']));
    if($utilities->isValidEmail($email) == false){
        $response['code'] = 2;
        $response['data'] = "Invalid Email Format!";
        goto response;
    }
    $valid_plan =  array("free", "premium", "elite");
    if (!in_array($plan, $valid_plan)) {
        $plan = "free";
    }
    $password = $db_handle->escape_string($params['password']);
    date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
    $user_id = uniqid("u".rand(0,9));
    $password = password_hash( $password, PASSWORD_DEFAULT);
    $email_check = $db_handle->numRows("SELECT * FROM `users` WHERE `email`='{$email}'");

    if($email_check==0){
        $register_query = sprintf("INSERT INTO `users`(`name`, `email`, `password`, `date`, `user_id`)  VALUES('%s', '%s', '%s', '%s','%s')",$name,$email,$password,$date,$user_id);
        $register = $db_handle->doQuery($register_query);

        if($register) {
            $subscription_query = sprintf("INSERT INTO `subscription`(`user_id`, `invoice`, `plan`, `amount`, `payer_id`, `payment_date`, `payment_status`, `subscr_id`, `payer_email`, `txn_id`) VALUES ('%s','','%s','','','','','','','')", $user_id, $plan);
            $subscription = $db_handle->doQuery($subscription_query);
        }else{
            $subscription = false;
        }

        if($register && $subscription) {
            $login_token =  hash('sha256',$user_id);
            setcookie("email", $email, time() + (86400 * 30), "/");
            setcookie("token", $login_token, time() + (86400 * 30), "/");
            session_start();
            $_SESSION["email"] = $email;
            $_SESSION["token"] = $user_id;
            $response['code'] = 1;
            $response['data'] = array('url'=>'dashboard');
        }else{
            $response['code'] = 404; //"Query could not execute !"
            $response['data'] = "Something went wrong. Please try again! ".$db_handle->error(); //"Query could not execute !"
        }
    }else{
        $response['code'] = 3; //email not available
        $response['data'] = "Sorry! This email is already registered.";
    }
}
response:
echo json_encode($response);
die();
