<?php
 session_start();
 echo "Name: ". $_SESSION['name'];
 echo "<br>Trade: ".$_SESSION['trade'];
?>