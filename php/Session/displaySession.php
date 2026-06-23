<?php  
  session_start();
  if(isset($_SESSION['name'])){
    echo "<h1>You are login Succesfull</h1>";
    echo "Name is ". $_SESSION['name']." ".$_SESSION['surName'];
  } else {
    echo "Please login.";
  }
?>