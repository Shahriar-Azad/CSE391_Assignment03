<?php

$server_address = "localhost";              	//If you connecting remotely to this database you need to set the hostname of your server and you need to allow access to your ip from server
$database_name = "391_db";   	    //Set your database name
$username = "xyz";		    //Set your database username
$password = "12345";		    //Set database password


// Create connection
$db = new mysqli($server_address, $username, $password, $database_name);
error_reporting(0);
?>

