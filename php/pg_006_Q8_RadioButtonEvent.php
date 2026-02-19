<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RadioButtonEvent</title>
</head>
<body>
  <h2>RadioButtonEvent</h2>
  <form method="post">
  <h3>Gender :</h3>
  <input type="radio" name="gender" value="male">Male<br> <br>
  <input type="radio" name="gender" value="female">Female<br> <br>
  <input type="radio" name="gender" value="other">Other<br> <br>
  <input type="submit" name="submit" value="Submit"><br><hr>
  </form>
  <?php
  if(isset($_POST["submit"])){
  echo "This is working! and you are Enterd : ".$_POST["gender"];
  }
  ?>
</body>
</html>