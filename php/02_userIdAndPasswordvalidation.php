<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Id and password validation</title>
</head>

<body>
  <h3>User Id and password validation</h3>
  <form method="post">
    <input type="text" name="userId" placeholder="Enter user Id"> <br> <br>
    <input type="text" name="userPass" placeholder="Enter password Id"> <br><br>
    <input type="submit" name="submit">
  </form>
  <?php
  if (isset($_POST['submit'])) {
    $userId = $_POST['userId'];
    $userPass = $_POST['userPass'];
    // regix
    $userIdRegix = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)[A-Za-z\d]{4,}$/";
    $userPasswordRegix = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/";
    // Validate 
    if (preg_match($userIdRegix, $userId)) {
      echo "<br>User id validate";
    } else {
      echo "<br>User id not valid it must be contain alpha numerical.";
    }
    if (preg_match($userPasswordRegix, $userPass)) {
      echo "<br><br>User password strong";
    } else {
      echo "<br><br>User password not valid it must be contain alpha numerical and spical character.";
    }
  }
  ?>
</body>
 
</html>