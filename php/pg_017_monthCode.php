<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Month Code</title>
</head>
<body>
  <h1>Month Code</h1>
  <form method="post">
    Enter Month Code: <br><br><input type="number" name="code"><br><br>
    <input type="submit" name='submit' value="Check"><br><br>
  </form>
  <?php
  if(isset($_POST['submit'])){
    $code=$_POST['code'];
    switch ($code) {
      case 1:
        Echo "Month is: <b>January</b>";
        break;
      case 2:
        Echo "Month is: <b>Febuary</b>"; 
        break;
      case 3:
        Echo "Month is: <b>March</b>";
        break;
      case 4:
        Echo "Month is: <b>April</b>";
        break;
      case 5:
        Echo "Month is: <b>May</b>";   
        break;
      case 6:
        Echo "Month is: <b>June</b>";     
        break;
      case 7:
        Echo "Month is: <b>July</b>";
        break;
      case 8:
        Echo "Month is: <b>August</b>";
        break;
      case 9:
        Echo "Month is: <b>Septamber</b>";
        break;
      case 10:
        Echo "Month is: <b>October</b>";
        break;
      case 11:
        Echo "Month is: <b>November</b>";
        break;
      case 12:
        Echo "Month is: <b>December</b>";
        break;
      default:
        Echo "Invalid! Month";
        break;
    }
  }
  ?>
</body>
</html>