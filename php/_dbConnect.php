<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_connect($servername, $username, $password);
if ($conn) {
  echo "Database Connected Succesfully";
} else{
  die("Connection was not succesfull: ".mysqli_connect_error());
}
