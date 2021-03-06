<?php

/*--------------------*/
// App Name: Valencia City Guide
// Author: Wicombit
// Author URI: https://codecanyon.net/user/wicombit/portfolio
// Version: 1.00
/*--------------------*/

 session_start();
if (isset($_SESSION['username'])){
    
    
require '../admin/config.php';
require '../admin/functions.php';	
require '../views/header.view.php';
require '../views/navbar.view.php';    


$connect = connect($database);
if(!$connect){
	header('Location: ./error.php');
	}

$places_types = get_all_places_types($connect);

$places_types_total = number_places_types($connect);

require '../views/types.view.php';
require '../views/footer.view.php';
    
}else {
		header('Location: ./login.php');		
		}


?>