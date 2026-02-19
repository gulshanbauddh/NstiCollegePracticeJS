<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test Box Input Event</title>
</head>
<body>
  <h2>Test Box Input Event</h2>
  <form method="post">
  <input type="text" name="event" placeholder="Write Something"><br> <br>
  <input type="submit" name="submit" value="Click me"><br><hr>
  </form>
  <?php
  if(isset($_POST["submit"])){
  echo "This is working! and you are Enterd : ".$_POST["event"];
  }
  ?>
</body>
</html>