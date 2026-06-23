<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Form DB</title>
</head>

<body>
  <h1>Display Form DB</h1>
  <?php
  // if($_SERVER['REQUEST_METHOD']=='POST'){
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'school';
  $conn = mysqli_connect($servername, $username, $password, $database);
  if ($conn) {
    echo 'Database connected succesfull<br>';
  }
  $query = "SELECT * FROM `student`;";
  $out = mysqli_query($conn, $query);
  $numRow = mysqli_num_rows($out);
  print_r($out);
  echo "<br>" . $numRow . " Numbers of row in this Database<br>";

  // $row = mysqli_fetch_assoc($out);
  // // echo var_dump($row['sNo']);
  // echo $row['sNo'];

  // while($numRow > 0) {
  //   $row = mysqli_fetch_assoc($out);
  //   echo var_dump($row);
  //   echo "<br>";
  //   $numRow--;
  // }

  echo "<table border='1' cellspacing='0' cellpadding='8'><thead><tr><th>S No</th><th>Name</th><th>Fathe Name</th><th>Mother Name</th><th>E-mail</th><th>Pincode</th></tr></thead>";

  while($numRow>0){
    $row=mysqli_fetch_assoc($out);
    echo "<tbody><tr><td>".$row['sNo']."</td><td>".$row['NAME']."</td><td>".$row['fName']."</td><td>".$row['mName']."</td><td>".$row['email']."</td><td>".$row['pinCode']."</td></tr></tbody>";  
    $numRow--;
  }

  // }
  ?>
  
</body>

</html>