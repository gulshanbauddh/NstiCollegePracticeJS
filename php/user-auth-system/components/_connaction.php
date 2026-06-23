<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'users';

// Connection establish karna
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>