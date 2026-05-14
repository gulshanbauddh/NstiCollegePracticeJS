<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Mark Management (Remove a record)</title>
</head>

<body>
  <h1>Student mark management (Remove a record):</h1>
  <form action="" method="POST">
    <input type="text" name="name" id="name" placeholder="Enter name of student." required> <br> <br>
    <input type="submit" name='deleteArecord' value="Remove a record">
  </form>
  <br><br>
  <a href="home.php">Back to Home</a>
  <?php
  if (isset($_POST['deleteArecord'])) {
    $name = $_POST['name'];
    $line = "";
    $data = "";
    $file = fopen('student.txt', 'r');
    while (!feof($file)) {
      $line = fgets($file);
    }
    fclose($file);
    if ($line != false && trim($line) != "") {
      $students = explode("|", $line);
      if ($students[1] == $name) {
        $students[0] = "";
        $students[1] = "";
        $students[2] = "";
      } else {
        $data += $students[0] . "|" . $students[1] . "|" . $students[2] . "\n";
      }
    }

    $file = fopen('student.txt', 'w');
    fwrite($file,$data);
    fclose($file);
  }

  ?>
</body>

</html>