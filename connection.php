<?php
$servername = "localhost";
$username = "root";  
$password = ""; 
$dbname = "edoc"; 

$database = new mysqli($servername, $username, $password, $dbname,3308);

if ($database->connect_error) {
    die("connection failed : " . $database->connect_error);
}
?>

