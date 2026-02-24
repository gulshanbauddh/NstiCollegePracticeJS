<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Day Code</title>
</head>
<body>
  <h1>Day Code</h1>
  <form method="post">
    Enter day Code: <br><br><input type="number" name="code"><br><br>
    <input type="submit" name='submit' value="Check"><br><br>
  </form>
  <?php
  if(isset($_POST['submit'])){
    $code=$_POST['code'];
    switch ($code) {
      case 1:
        Echo "Today is Monday";
        break;
      case 2:
        Echo "Today is Tuesday";      
        break;
      case 3:
        Echo "Today is Wednesday";      
        break;
      case 4:
        Echo "Today is Thuresday";      
        break;
      case 5:
        Echo "Today is Friday";      
        break;
      case 6:
        Echo "Today is Saturday";      
        break;
      case 7:
        Echo "Today is Sunday";
        break;
      default:
        Echo "Invalid! Day code";
        break;
    }
  }
  ?>
</body>
</html>