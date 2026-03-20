<?php  
  session_start();
  echo "<h1>We are Display Session Date</h1>";
  echo "Name is ". $_SESSION['name']." ".$_SESSION['surName'];
?>