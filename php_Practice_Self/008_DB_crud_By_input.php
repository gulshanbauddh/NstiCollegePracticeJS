<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Form DB</title>
</head>

<body>
  <h1>Display Form DB</h1>
  <form action="008_DB_crud_By_input.php" method="post">
    <label for="sqlQuery">Enter MySQL query : </label>
    <input type="text" name="sqlQuery" id="sqlQuery">
    <input type="submit" value="Execute query">
  </form>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'school';
    $conn = mysqli_connect($servername, $username, $password, $database);
    if ($conn) {
      $query = "SELECT * FROM `student`;";
      $out = mysqli_query($conn, $query);
      $numRow = mysqli_num_rows($out);
      echo "<br><table border='1' cellspacing='0' cellpadding='8'><thead><tr><th>S No</th><th>Name</th><th>Fathe Name</th><th>Mother Name</th><th>E-mail</th><th>Pincode</th></tr></thead>";

      while ($numRow > 0) {
        $row = mysqli_fetch_assoc($out);
        echo "<tbody><tr><td>" . $row['sNo'] . "</td><td>" . $row['NAME'] . "</td><td>" . $row['fName'] . "</td><td>" . $row['mName'] . "</td><td>" . $row['email'] . "</td><td>" . $row['pinCode'] . "</td></tr></tbody>";
        $numRow--;
      }
    }
  }
  ?>

</body>

</html>