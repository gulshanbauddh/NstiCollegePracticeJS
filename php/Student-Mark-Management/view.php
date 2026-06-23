<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Student Marksheet</title>
</head>

<body>
  <h1>View Student Marksheet:</h1>
  <table border="1" cellspacing='0' cellpadding='6'>
    <tr>
      <th>Roll no</th>
      <th>Roll no</th>
      <th>Roll no</th>
    </tr>

    <?php
    $file = fopen('student.txt', 'r');

    while (!feof($file)) {
      $line = fgets($file);
      if ($line !== false && trim($line) !== '') {
        $students = explode('|', $line);
        if (count($students) >= 3) {
          echo "
            <tr>
              <td>" .$students[0]. "</td>
              <td>" .$students[1]. "</td>
              <td>" .$students[2]. "</td>
            </tr>";
        }
      }
    }

    fclose($file);
    ?>
  </table>
  <br><br>
    <a href="home.php">Back to Home</a>
</body>

</html>