<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Factor of a number</title>
</head>

<body>
  <p><strong>Factor of a number-</strong></p>
  <form method="post">
    <input type="number" name="num" placeholder="Enter any number">
    <input type="submit" value="Submit">
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num = $_POST['num'];
    echo '<br>Factor of ' . $num . ' are : ';
    for ($i = 1; $i <= $num; $i++) {
      if ($num % $i == 0) {
        echo $i . ' ';
      }
    }
  }
  ?>
</body>

</html>