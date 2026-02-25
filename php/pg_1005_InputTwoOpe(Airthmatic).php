<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Airthmatic Operaion using Operants & Operator</title>
</head>
<body>
  <h1>Airthmatic Operaion using Operants & Operator</h1>
  <form method="post">
    Enter Any Number a: <br><br><input type="number" name="a"><br><br>
    Enter Any Number b: <br><br><input type="number" name="b"><br><br>
    Choice Operator: <br><br>
    <input type="radio" name="ope" id="+" value="+">
    <label for="+"> + </label>
    <input type="radio" name="ope" id="-" value="-">
    <label for="-"> - </label>
    <input type="radio" name="ope" id="*" value="*">
    <label for="*"> * </label>
    <input type="radio" name="ope" id="/" value="/">
    <label for="/"> / </label>
    <input type="radio" name="ope" id="%" value="%">
    <label for="%"> % </label>
    <input type="radio" name="ope" id="**" value="**">
    <label for="**"> ** </label>
    <br><br>
    <input type="submit" name='submit' value="Check"><br><br>
  </form>
  <?php
  if(isset($_POST['submit'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $ope=$_POST['ope'];
    switch ($ope) {
      case '+':
        Echo "Addition (a+b):<br>";
        Echo $a." + ".$b." = ". ($a+$b);
        break;
      case '-':
        Echo "Subtraction (a-b):<br>";
        Echo $a." - ".$b." = ". ($a-$b);   
        break;
      case '*':
        Echo "Multiplication (a*b):<br>";
        Echo $a." * ".$b." = ". ($a*$b);  
        break;
      case '**':
        Echo "Exponation (a**b):<br>";
        Echo $a." ** ".$b." = ". ($a**$b);  
        break;
      case '/':
        if($b!=0){
        Echo "Division (a/b):<br>";
        Echo $a." / ".$b." = ". ($a/$b);  
        }else{
        Echo "Error: Not Allow Division by Zero.";
        }
        break;
      case '%':
        if($b!=0){
        Echo "Modulas (a/b):<br>";
        Echo $a." % ".$b." = ". ($a%$b);  
        } else{ 
        Echo "Error: Not Allow Division by Zero."; 
        }
        break;
      default:
        Echo "Invalid! Operator";
        break;
    }
  }
  ?>
</body>
</html>