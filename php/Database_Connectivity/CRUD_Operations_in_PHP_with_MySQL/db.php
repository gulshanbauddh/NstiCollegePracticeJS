<?php
$conn = mysqli_connect("localhost", "root", "", "stockdb");
if (!$conn) {
  die("Connection Failed: " . mysqli_connect_error());
} else{
  // echo "Databases connected succesfully.";  // Only for testing time
}
