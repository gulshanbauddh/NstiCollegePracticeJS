<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sum of Digit and Reverse of number</title>
</head>

<body>
  <h1>Sum of Digit and Reverse of number:</h1>
  <form method="post">
    <label for="num">Enter Number</label>
    <input type="number" name="num" id="num">
    <input type="submit" name="submit">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    echo "<br><strong>Entred Number is :</strong>" . $num;
    $rev=0;
    $sum=0;
    while($num>0){
      $digit=$num%10;
      $rev=($rev*10)+$digit;
      $sum+=$digit;
      $num=(int)($num/10);
      }
    echo "<br>Sum of digit is : " . $sum;
    echo "<br>Reverse of number is : " . $rev;
  }
  ?>
</body>

</html>