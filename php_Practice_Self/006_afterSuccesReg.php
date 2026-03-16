<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registation Form</title>
  <link
    rel="stylesheet"
    href="/node_modules/bootstrap/dist/css/bootstrap.min.css" />
</head>
<h1>Form submit succesfull.</h1>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Variable
  $name = $_POST['name'];
  $fName = $_POST['fName'];
  $mName = $_POST['mName'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $pinCode = $_POST['pinCode'];
  // Connection
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'school';
  $conn = mysqli_connect($servername, $username, $password, $database);
  if ($conn) {
    $insQuert = "INSERT INTO `student`( `NAME`, `fName`, `mName`, `email`, `adds`, `city`, `state`, `pinCode` ) VALUES( '$name', '$fName', '$mName', '$email', '$address', '$city', '$state','$pinCode');";
    mysqli_query($conn, $insQuert);
  }

  echo "Name: " . $name . "<br>Father name: " . $fName . "<br>Mother name: " . $mName . "<bvr>Email: " . $email;
}
?>
</body>

</html>