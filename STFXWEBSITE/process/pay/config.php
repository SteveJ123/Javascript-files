<?php

$enableSandbox = false;

$paypalConfig = [
    'return_url' => 'https://swifttradesfx.co.uk/process/pay/response.php?type=success',
    'cancel_url' => 'https://swifttradesfx.co.uk/process/pay/response.php?type=cancel',
    'pdt_token' => '9MszQjk9jgIQRD0MA1pSgmDwANMHO4Xfvgr6AghEPmpvx6tsNBl41gIyNBm',
    'paypal_email' => 'rashed01628717@gmail.com'
];

$api_url = $enableSandbox ? "https://www.sandbox.paypal.com/cgi-bin/webscr" : "https://www.paypal.com/cgi-bin/webscr";
