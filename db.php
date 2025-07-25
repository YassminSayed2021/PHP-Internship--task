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


$host = "mysql.railway.internal";
$port = 3306;
$username = "root";
$password = "GCwKnLzuRSahkzuADeEeFgTZcuTInMDo"; 
$database = "railway";

$conn = new mysqli($host, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


