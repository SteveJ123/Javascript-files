<?php
session_start();
if ( isset( $_COOKIE[session_name()] ) )
	setcookie( session_name(), "", time()-3600, "/" );
setcookie("email", "", time()-3600, "/");
setcookie("token", "", time()-3600, "/");
$_SESSION = array();
session_destroy();
header('location: https://swifttradesfx.co.uk');
die();
