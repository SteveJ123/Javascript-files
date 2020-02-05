<?php
include "../utils/function.php";
$keys =  array("email", "password");
$response = array();

$params = array();
parse_str($_POST['data'], $params);

if(check_valid($params,$keys)) {
    require_once '../utils/dbcontroller.php';
    require_once '../utils/utilities.php';
    $db_handle = new DBController();
    $utilities = new Utilities();
    $email = $db_handle->escape_string(test_input($params['email']));
    if($utilities->isValidEmail($email) == false){
        $response['code'] = 2;
        $response['data'] = "Invalid Email Format!";
        goto output;
    }
    $password = $db_handle->escape_string($params['password']);
    date_default_timezone_set('Asia/Kolkata');
    $login_result = $db_handle->runQuery("SELECT * FROM `users` WHERE `email`='{$email}'");
    if(!empty($login_result)){
        if(password_verify($password,$login_result[0]['password'])) {
            $login_token =  hash('sha256',$login_result[0]['user_id']);
            setcookie("email", $login_result[0]['email'], time() + (86400 * 30), "/");
            setcookie("token", $login_token, time() + (86400 * 30), "/");
            session_start();
            $_SESSION["email"] = $login_result[0]['email'];
            $_SESSION["token"] = $login_result[0]['user_id'];
            $response['code'] = 1; // verified
        }else{
            $response['code'] = 3; // invalid pass
            $response['data'] = "Invalid Password.";
        }
    }else{
        $response['code'] = 4; // invalid user
        $response['data'] = "This user doesn't exist.";
    }
}
output:
echo json_encode($response);
die();
