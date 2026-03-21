<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'users';
$conn = mysqli_connect($server, $username,  $password, $database);
if ($conn) {
  echo "Databases connected succesfully.";
} else {
 die("Databases not connected succesfully.");
}
?>