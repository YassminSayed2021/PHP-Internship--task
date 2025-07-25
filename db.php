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
$username = "yasmin";
$password = "EjAPj6bdC&iZVNG"; 
$database = "form_db";

$conn = new mysqli($host, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


