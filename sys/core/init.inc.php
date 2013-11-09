<?php
//Starts a session
session_start();

//Include the config file
include_once '../sys/config/db-cred.inc.php';

//Define the constans for configuration info

foreach($C AS $name => $val) {
    define($name, $val);
}

//Create a PDO object

$dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
$dbo = new PDO($dsn, DB_USER, DB_PASS);

//Auto-load classes

function __autoload($class) {
    $filename = "../sys/class/class." . strtolower($class) . ".inc.php";
    if(file_exists($filename)) {
	include_once $filename;
    }
}

//Check if user is logged in and fetch user information

$check = new user();

if($check->logged_in() === true) {
    $session_user_id = $_SESSION['user_id'];
    $user_data = $check->user_data($session_user_id, 'user_id', 'username', 'password', 'first_name', 'email', 'admin');
}

//Create the array that stores error information

$errors = array();