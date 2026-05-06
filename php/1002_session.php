<?php
session_start();
$action = $_GET['action'] ?? "";
if ($action == 'create') {
  $_SESSION['name'] = 'Gulshan Bauddh';
  $_SESSION['trade'] = 'CSA';
  echo "Session variable created Succefullay";
} elseif ($action == 'get') {
  if (isset($_SESSION['name']) && isset($_SESSION['name'])) {
    echo "Name: " . $_SESSION['name'];
    echo "<br>Trade: " . $_SESSION['trade'];
  } else {
    echo "No Session data found.";
  }
} elseif ($action == 'destroy') {
  session_unset();
  session_destroy();
  echo "Session distroy Succefullay";
} elseif ($action == '') {
  echo "Please add <mark>action</mark> with it's appropriate value (creatte||get||destroy) value in your URL";
} else {
  echo "Invlid";
}
