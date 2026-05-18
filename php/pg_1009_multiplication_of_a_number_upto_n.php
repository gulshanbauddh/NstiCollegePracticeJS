<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multiplication of a number up to `n`</title>
</head>

<body>
  <p><strong>Multiplication of a number up to `n`-</strong></p>
  <form method="post">
    <input type="number" name="num" placeholder="Enter any number"> <br><br>
    <input type="number" name="limit" placeholder="Enter limit"> <br><br>
    <input type="submit" value="Submit">
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num = $_POST['num'];
    $limit = $_POST['limit'];
    $fact=1;
    echo '<br>Entered number is ' . $num . ' and limit is '. $limit.'<br><br>';
    for ($i=1; $i <= $limit; $i++) {
      echo $num. ' x '.$i. ' = '. $num*$i.'<br>';
    }
  }
  ?>
</body>

</html>