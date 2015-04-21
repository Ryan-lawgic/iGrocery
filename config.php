<?php
//start session in all pages
if (session_status() == PHP_SESSION_NONE) { session_start(); } //PHP >= 5.4.0
//if(session_id() == '') { session_start(); } //uncomment this line if PHP < 5.4.0 and comment out line above

$PayPalMode 			= 'sandbox'; // sandbox or live
$PayPalApiUsername 		= 'ryan.lawgic-facilitator_api1.gmail.com'; //PayPal API Username
$PayPalApiPassword 		= 'ZY63672GNU9J3765'; //Paypal API password
$PayPalApiSignature 	= 'AQU0e5vuZCvSg-XJploSa.sGUDlpAe4U6G7jW2WKAIsHIlDOL9x8ULZZ'; //Paypal API Signature
$PayPalCurrencyCode 	= 'HKD'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://localhost/paypal/process.php'; //Point to process.php page
$PayPalCancelURL 		= 'http://localhost/paypal/cancel_url.php'; //Cancel URL if user clicks cancel
?>