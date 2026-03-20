<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table Create using PHP</title>
</head>

<body>
  <h1>Table Create using PHP-</h1>
  <?php
  // Connecting to the Database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $conn1 = mysqli_connect($servername, $username, $password);
  $dbCreateQuery = "Create Database School;";
  if (!$conn1) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
  } else {
    echo "Connection was successful<br>";
    mysqli_query($conn1, $dbCreateQuery);
    $database = "School";
  }
  // Create a connection
  $conn = mysqli_connect($servername, $username, $password, $database);
  // Die if connection was not successful
  if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
  } else {
    echo "Connection was successful<br>";
  }

  // Create a table in the db
  $sql = "CREATE TABLE `Students` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
  $result = mysqli_query($conn, $sql);

  // Check for the table creation success
  if ($result) {
    echo "The table was created successfully!<br>";
  } else {
    echo "The table was not created successfully because of this error ---> " . mysqli_error($conn);
  }

  ?>

</body>

</html>