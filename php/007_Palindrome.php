<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check Palindrome or Not</title>
</head>

<body>

  <h1>Check Palindrome or Not</h1>

  <form method="post">
    <label>Enter your number:</label>
    <input type="number" name="num">
    <input type="submit" name="check">
  </form>

  <?php
  if (isset($_POST['check'])) {
    $no = $_POST['num'];
    $originalNo = $no;
    $rev = 0;

    do {
      $temp = $no % 10;
      $rev = $rev * 10 + $temp;
      $no = (int)($no / 10);
    } while ($no > 0);

    echo "<br>Your Entered number is = $originalNo, $rev";
    echo "<br>Your Entered number is = " . $originalNo . " and reverse = " . $rev;

    if ($rev == $originalNo) {
      echo "<br>Palindrome";
    } else {
      echo "<br>Not Palindrome";
    }
  }
  ?>

</body>

</html>