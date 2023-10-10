<?php
// Database connection parameters
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'lelang';

// Create a connection to the database
$connection = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>