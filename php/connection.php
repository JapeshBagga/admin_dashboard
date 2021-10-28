<?php
    if(!isset($_SESSION)) session_start(); 
    
    $servername = "database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com";
	$username = "admin";
	$password = "M=7t-pDLQHGSgoNdbcFujjst9&)kAwou";	
	
	$conn = new mysqli($servername, $username, $password,'demodashboard');
	$jobconn = new mysqli($servername, $username, $password,'jobaskit');
	
	if ($conn->connect_error)   die("Connection failed: " . $conn->connect_error);
	if ($jobconn->connect_error) die("Connection failed: " . $conn->connect_error);

    //Include Google Client Library for PHP autoload file
    require_once 'vendor/autoload.php';
    $google_client = new Google_Client();
    $google_client->setClientId('921385334571-0do0fio45v9u96vv5pkt2k6773amo2j9.apps.googleusercontent.com');
    $google_client->setClientSecret('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');

    $google_client->addScope('email');
    $google_client->addScope('profile');
    

?>