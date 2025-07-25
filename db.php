<?php  
/*
EjAPj6bdC&iZVNG
$host = 'localhost';
$dbname = 'myForm_db';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> */


$host = "db4free.net";
$port = 3306;
$username = "yaso22";
$password = "Sergioramos4@"; 
$database = "form_d";

$conn = new mysqli($host, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


