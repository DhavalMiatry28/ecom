<?php ob_start();

include_once 'database/connection.php';
include_once 'classes/model.php';


global $pdo;
session_start();

$getFromU = new User($pdo);

define('BASE_URL', 'http://localhost/task1/');




?>