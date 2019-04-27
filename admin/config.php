<?php

/*--------------------*/
// App Name: Valencia City Guide
// Author: Wicombit
// Author URI: https://codecanyon.net/user/wicombit/portfolio
// Version: 1.00
/*--------------------*/

/* URL PROJECT */

define ('SITE_URL', 'http://35.178.110.121');

/* DATABASE CONFIGURATION */

$database = array(
'host' => 'localhost',
'db' => 'valencia',
'user' => 'root',
'pass' => 'password123'
);

//PAYPAL CONFIGURATION 

$paypalConfig = array(
'sandbox' => 1, // Change to 0 in Live Mode
'email' => 'PAYPAL_EMAIL_HERE',
'currency' => 'USD',
'url' => 'https://www.sandbox.paypal.com/cgi-bin/webscr' // Change to https://www.paypal.com/cgi-bin/webscr in Live Mode
);

//STRIPE CONFIGURATION 

$stripeConfig = array(
'currency' => 'USD',
'secret_key' => 'STRIPE_SECRET_KEY_HERE',
'publishable_key' => 'STRIPE_PUBLIC_KEY_HERE'
);

// EMAIL SETTINGS

$emailConfig = array(
'address' => 'EMAIL_ADDRESS_HERE',
'password' => 'PASSWORD_HERE',
'name' => 'EMAIL_NAME_HERE',
'smtp_host' => 'EMAIL_HOST_HERE',
'smtp_port' => 'EMAIL_PORT_HERE',
'smtp_encrypt' => 'tls'
);

// SETTINGS

$siteConfig = array(
    
    'items_per_page' => '8',
    'currency' => '$',
    'images_folder' => 'images/'
);


?>