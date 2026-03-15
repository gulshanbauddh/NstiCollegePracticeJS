<?php
echo 'Welcome to Database connected Page';
/*
Way to Connect to a MySQL Database
1.  MySQLi extension ()
2.  PDO (PHP Data object) 
*/

// Connecting to tha Database
$servername='localhost';
$username='root';
$password='';

// Create a Connection 
$conn=mysqli_connect($servername, $username,$password);
echo '<br>Connection is Succesfull';
?>