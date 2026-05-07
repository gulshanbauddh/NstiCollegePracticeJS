<?php
session_start();
$userid = $_POST['userid'];
$password = $_POST['password'];
// Regex pattern
$userid_patern = "/^[A-Za-z0-9]{5,10}$/";
$password_patern = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/";
if (preg_match($userid_patern, $userid) && preg_match($password_patern, $password)) {
  // Store in session
  $_SESSION['userid'] = $userid;
  echo "welcome " . $_SESSION['userid'];
  echo "Login sucessfull !";
  echo "<br><a href='1010_welcome.php'>Go to welcome Page.</a>";
} else {
  echo "Invalid UserID or Password format !";
}
?>