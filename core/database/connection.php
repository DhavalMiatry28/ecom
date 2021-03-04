<?php

//ini_set("display_errors", "1");
       // error_reporting(E_ALL);

	$host = "localhost";
	$user = "root";
	$password = "root";
	$dbname = "ecom_store";

	$dsn = "mysql:host=". $host . "; dbname=". $dbname;

	try {
		$pdo = new PDO($dsn, $user, $password);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	} catch (PDOException $e) {
		echo 'Database Connection Failed. <br/>'. $e->getMessage();
	}

?>