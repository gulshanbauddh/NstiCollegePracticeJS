<?php
echo 'Welcome to Database connected Page';
/*
Way to Connect to a MySQL Database
1.  MySQLi extension ()
2.  PDO (PHP Data object) 
*/

// Connecting to tha Database
$servername = 'localhost';
$username = 'root';
$password = '';

// Create a Connection 
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
  die("Sorry we failed to connect: ".mysqli_connect_error());
} else {
  echo '<br>Connection is Succesfull';
}
/*
sudo systemctl restart apache2
Check status: sudo systemctl status mysql
Start MySQL: sudo systemctl start mysql
Restart MySQL: sudo systemctl restart mysql
sudo chown -R $USER:$USER /opt/lampp/htdocs

*/
?>