<?php
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "farmlist";
// Create database connection
$connection = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($connection->connect_error) {
die("Connection failed: " . $connection->connect_error);
}
?>