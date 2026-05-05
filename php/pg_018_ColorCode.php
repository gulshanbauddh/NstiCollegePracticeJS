<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Color Code</title>
</head>
<body>
  <h1>Color Code</h1>
  <table  cellpadding='7' cellspacing='0' cellpadding='7' border='1' >
    <tr><th>V</th><th>I</th><th>B</th><th>G</th><th>Y</th><th>O</th><th>R</th></tr>
    <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td></tr>
  </table> <br>
  <form method="post">
    Enter Color Code (1-7): <br><br><input type="number" name="code"><br><br>
    <input type="submit" name='submit' value="Check"><br><br>
  </form>
  <?php
  if(isset($_POST['submit'])){
    $code=$_POST['code'];
    switch ($code) {
      case 1:
        Echo "Color is: <b>Violet</b>";
        break;
      case 2:
        Echo "Color is: <b>Indigo</b>";      
        break;
      case 3:
        Echo "Color is: <b>Blue</b>";      
        break;
      case 4:
        Echo "Color is: <b>Green</b>";      
        break;
      case 5:
        Echo "Color is: <b>Yellow</b>";      
        break;
      case 6:
        Echo "Color is: <b>Orange</b>";      
        break;
      case 7:
        Echo "Color is: <b>Red</b>";
        break;
      default:
        Echo "Invalid! Color";
        break;
    }
  }
  ?>
</body>
</html>