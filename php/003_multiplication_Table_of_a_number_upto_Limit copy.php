<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multiplication Table of a number upto Limit</title>
</head>

<body>
  <h1>Multiplication Table of a number upto Limit</h1>
  <form method="post">
    <label for="num">Enter Number</label>
    <input type="number" name="num" id="num"> <br> <br>
    <label for="limit">Enter Limit</label>
    <input type="number" name="limit" id="limit"> <br> <br>
    <input type="submit" name="mul">
  </form>

  <?php
  if (isset($_POST['mul'])) {
    $num = $_POST['num'];
    $limit = $_POST['limit'];
    echo "<br><strong>Entred Number is :" . $num;
    echo "<br>Entred Limit is : " . $limit . " </strong><br>";
    for ($i = 1; $i <= $limit; $i++) {
      echo "<br>" . $num . "x" . $i . "=" . $num * $i;
    }
  }
  ?>
</body>

</html>