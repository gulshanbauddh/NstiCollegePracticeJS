<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Factorial of a number</title>
</head>

<body>
  <p><strong>Factorial of a number-</strong></p>
  <form method="post">
    <input type="number" name="num" placeholder="Enter any number">
    <input type="submit" value="Submit">
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num = $_POST['num'];
    $fact=1;
    echo '<br>Factorial of ' . $num . ' : ';
    for ($num; $num >= 1; $num--) {
      $fact=$fact*$num;
    }
    echo "= ". $fact;
  }
  ?>
</body>

</html>