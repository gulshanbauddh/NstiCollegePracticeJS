<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check Positive Negative and Zero</title>
</head>
<body>
  <h2>Check Positive Negative and Zero:</h2>
  <form method="post" >
    Enter any number: <input type="number" name="num" placeholder="Enter any number">
    <input type="submit" name="check" value="Check">
  </form>
  <?php
      if($_POST['num']>0){
      echo $_POST['num']." is number is Positive.";
      } elseif ($_POST['num']<0){
        echo $_POST['num']." is number is Negative";
      } else echo $_POST['num']." is number is Zero";
  ?>
</body>
</html>