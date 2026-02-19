<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test the Button</title>
</head>
<body>
  <h2>Test the Button:</h2>
  <form method="post">
    <input type="submit" name="click" value="Click me">
  </form>
  <?php
    if(isset($_POST["click"])){
      echo "Button is Clicked.";
    }
  ?>
</body>
</html>