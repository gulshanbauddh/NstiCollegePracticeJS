<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drop Down</title>
</head>
<body>
  <h2>Drop down</h2>
  <form method="post">
    <select name="trade" >
      <option>CSA</option>
      <option>3D</option>
      <option>Fitter</option>
      <option>EM</option>
      <option>IT</option>
    </select> <br> <br>
    <input type="submit" name="submit">
  </form>
  <hr>
  <?php
  if(isset($_POST["submit"])){
    echo "You are Selected: ". $_POST["trade"];
  }
  ?>
</body>
</html>