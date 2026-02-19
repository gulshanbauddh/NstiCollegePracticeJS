<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Airthmatic Operator</title>
</head>
<body>
  <form method="post">
    <input type="text" name="value1" placeholder="Enter Value one"> <br><br>
    <input type="text" name="value2" placeholder="Enter Value Two"> <br><br>
    <input type="submit" name="airthMatic" value="Click me"> <br><hr>
  </form>

  <?php
    if(isset($_POST["airthMatic"])){
      $a=$_POST["value1"];
      $b=$_POST["value2"];
      echo $a." + ".$b." = ".$a+$b;
      echo "<br>".$a." - ".$b." = ".$a-$b;
      echo "<br>".$a." x ".$b." = ".$a*$b;
      if($b!=0){
      echo "<br>".$a." / ".$b." = ".$a/$b;
      echo "<br>".$a." % ".$b." = ".$a%$b;
      } else echo "<br>Division and modulus not possible.(Divide by zero)";
      echo "<br>".$a." ^ ".$b." = ".$a**$b;      
    }
  ?> 
</body>
</html>