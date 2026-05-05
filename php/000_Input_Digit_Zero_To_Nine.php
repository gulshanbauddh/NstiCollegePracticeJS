<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digit Code (0-9)</title>
</head>
<body>
  <h1>Digit Code (0-9)</h1>
  <form method="post">
    Enter Digit Code (0-9): <br><br><input type="number" name="code"><br><br>
    <input type="submit" name='submit' value="Check"><br><br>
  </form>
  <?php
  if(isset($_POST['submit'])){
    $code=$_POST['code'];
    switch ($code) {
      case 1:
        Echo "Number is: <b>One</b>";
        break;
      case 2:
        Echo "Number is:  <b>Two</b>";      
        break;
      case 3:
        Echo "Number is:  <b>Three</b>";      
        break;
      case 4:
        Echo "Number is:  <b>Four</b>";      
        break;
      case 5:
        Echo "Number is:  <b>Five</b>";      
        break;
      case 6:
        Echo "Number is:  <b>Six</b>";      
        break;
      case 7:
        Echo "Number is:  <b>Seven</b>";
        break;
      case 8:
        Echo "Number is:  <b>Eight</b>";
        break;
      case 9:
        Echo "Number is:  <b>Nine</b>";
        break;
      default:
        Echo "Invalid! Digit code(0-9)</b>";
        break;
    }
  }
  ?>
</body>
</html>