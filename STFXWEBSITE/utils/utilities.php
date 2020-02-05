<?php
class Utilities{
	function generatetoken($lenght = 64){
		return bin2hex(random_bytes($lenght/2));
	}
	function isLoggedin($db_handle){
		if(isset($_SESSION["email"]) && isset($_SESSION["token"])){
			return true;
		}else if(isset($_COOKIE["email"]) && isset($_COOKIE["token"])){
			$email = $_COOKIE["email"];
			if($this->isValidEmail($email)) {
				$details_check = $db_handle->runQuery( "SELECT * FROM `users` WHERE `email`='{$email}'" );
				$login_token   = hash( 'sha256', $details_check[0]['user_id'] );
				if ( $_COOKIE["token"] == $login_token ) {
					$_SESSION["email"] = $details_check[0]['email'];
					$_SESSION["token"] = $details_check[0]['user_id'];
					return true;
				} else {
					return false;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function validateusername($username){
		if(preg_match('/^[A-Za-z][A-Za-z0-9_]+$/', $username)){
			return true;
		}else{
			return false;
		}
	}
	function validate_fileid($id){
		if(preg_match('/^[A-Za-z0-9_.-]+$/',$id)){
			return true;
		}else{
			return false;
		}
	}
	function has_space($string){
		if (preg_match("/\\s/", $string)) {
			return true; /// yes spaces
		}else{
			return false;
		}
	}

	function truncate($string, $length, $dots = "&hellip;") {
		return (strlen($string) > $length) ? substr($string, 0, $length - 3) . $dots : $string;
	}

	function rand_string( $length ) {
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
		$size = strlen( $chars );
		$str = '';
		for( $i = 0; $i < $length; $i++ ) {
			$str .= $chars[ rand( 0, $size - 1 ) ];
		}
		return $str;

	}
	function isValidEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}