<?php
require_once "vendor/autoload.php";
 
use Omnipay\Omnipay;
 
define('CLIENT_ID', 'AS1_YedEUTls5CxjCmLOZqF8SdDyGGKOnxZX4ziRGY9rNeR_rebWMJ92fMz62eGY0AKBTq7UWdpmjAp_');
define('CLIENT_SECRET', 'EAGEY0IBkTznehFeAfAix1Z8wc5kFeDBF-XGW5KUOeN0X45jf9inLKA1s6H-P6BJ1Hs-04SsLqYTPguk');
 
define('PAYPAL_RETURN_URL', 'http://localhost/paypal_test_2/success.php');
define('PAYPAL_CANCEL_URL', 'http://localhost/paypal_test_2/cancel.php');
define('PAYPAL_CURRENCY', 'USD'); // set your currency here
 
// Connect with the database
// $db = new mysqli('localhost', 'MYSQL_DB_USERNAME', 'MYSQL_DB_PASSWORD', 'MYSQL_DB_NAME'); 
 
// if ($db->connect_errno) {
//     die("Connect failed: ". $db->connect_error);
// }
 
$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); //set it to 'false' when go live