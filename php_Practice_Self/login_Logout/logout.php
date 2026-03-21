<?php //Nav bar Start
  include 'components/_connaction.php';
  $_SESSION['found'] = false;
  session_start();
  session_unset();
  session_abort();
  header("location:login.php");
  exit;
?>