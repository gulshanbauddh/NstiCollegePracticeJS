<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check Box</title>
</head>
<body>
  <h2>Check Box</h2>
  <form method="post">
    <input type="checkbox" name="check">PHP <br><br>
    <input type="submit" name="submit">
  </form>
  <?php
  if(isset($_POST["submit"])){
    if(isset($_POST["check"])) echo "Check Box Selected.";
    else echo "Check Box Not Selected.";
  }
  ?>
</body>
</html>