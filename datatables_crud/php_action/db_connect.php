<?php 

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "datatables_crud";

// create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// connect to the database
	$server      = "localhost";
	$password    = "";
	$user        = "root";
	$database    = "foodpanda";

	$db = new mysqli($server, $user, $password, $database);

// check connection 
if($connect->connect_error) {
	die("Connection Failed : " . $connect->connect_error);
} else {
	// echo "Successfully Connected";
}