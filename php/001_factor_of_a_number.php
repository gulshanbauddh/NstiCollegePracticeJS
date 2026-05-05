<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Factors of a Number</title>
</head>

<body>
  <h1>Factors of a Number</h1>
  <form method="post">
    <label for="num">Enter Number</label>
    <input type="number" name="num" id="num">
    <input type="submit" name="fact">
  </form>

  <?php
  if (isset($_POST['fact'])) {
    $num = $_POST['num'];
    echo "Factors of (" . $num . ") are : ";
    for ($i = 1; $i <= $num; $i++) {
      if ($num % $i == 0) {
        echo $i;
        if ($i < $num) echo ", ";
      }
    }
  }
  ?>
</body>

</html>