<?php
	// database connection configuration using PDO
	$hostName = "127.0.0.1"; 
	$mysqlUsername = "root";
	$mysqlPassword = "";
	$databaseName = "employeedb";

	//create connection to database
	try{
		$connection = new PDO("mysql:host=$hostName;dbname=$databaseName", $mysqlUsername, $mysqlPassword);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// echo "connected successfully";
	}
	catch(PDOException $error){
		echo "connection failed: ".$error->getMessage();
	}

	include_once "controller/employeeController.php";
	$process = new activity($connection);
?>