<?php
session_start();
if (isset($_SESSION['userid'])) {
  echo "Welcome, " . $_SESSION['userid'];
  echo "<br><a href='1010_logout.php'>Logout</a>";
} else {
  echo "Please login first";
}
