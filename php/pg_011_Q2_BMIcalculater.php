<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BMI Calculater:</title>
</head>
<body>
  <h2>BMI Calculater:</h2>
  <form method="post">
    Height(cm) <input type="number" name="height"> <br> <br>
    Weight(kg) <input type="number" name="weidth"> <br> <br>
    <input type="submit" name="bmi" value="check">
  </form> <hr>
  <?php
  if(isset($_POST['bmi'])){
    $h=$_POST['height'];
    $w=$_POST['weidth'];
    $bmi=round($w/(($h*$h)/10000),2);
    echo "Your height is: ".$h."cm<br><br>";
    echo "Your weidth is: ".$w."cm<br><br>";
    echo "BMI is: ".$bmi."cm<br><br>";
    if($bmi<18.5) echo 'Under weight';
    elseif ($bmi>=18 && $bmi<25) echo "Normal weight";
    elseif ($bmi<=25 && $bmi>30) echo "Over weight";
    else echo "Obecity";
  }
  ?>
</body>
</html>