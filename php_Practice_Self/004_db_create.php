<?php
echo 'Welcome to Database connected Page';

// Connecting to tha Database
$servername = 'localhost';
$username = 'root';
$password = '';

// Create a Connection 
$conn = mysqli_connect($servername, $username, $password);
$sql = 'CREATE DATABASE gulshan1;';

// Connection Check
if (!$conn) {
  die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
  echo '<br>Connection is succesfull';
}

// Create Database:
$result = mysqli_query($conn, $sql);
if ($result) {
  echo '<br>Database create succesfully.';
} else {
  echo '<br>Database not create due to error --->'.mysqli_error($conn);
}