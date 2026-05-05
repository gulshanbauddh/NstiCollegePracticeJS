<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Factorial of a Number</title>
</head>

<body>
  <h1>Factorial of a Number</h1>
  <form method="post">
    <label for="num">Enter Number</label>
    <input type="number" name="num" id="num">
    <input type="submit" name="fact">
  </form>

  <?php
  if (isset($_POST['fact'])) {
    $num = $_POST['num'];
    $fact = 1;
    echo "<br><strong>Entred Number is : </strong>" . $num;
    echo "<br>Factorial is : ";
    for ($i = 1; $i <= $num; $i++) {
      $fact = $fact * $i;
      echo $i;
      if ($i < $num) echo " x ";
    }
    echo " = " . $fact;
  }
  ?>
</body>

</html>