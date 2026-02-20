<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result Sheet Of Traniee</title>
</head>
<body>
  <h2>Result Sheet Of Traniee</h2>
  <form method="post">
    Eneter Name of Student <input type="text" name="nameS" required> <br><br>
    Eneter mark of subject Networking <input type="number" name="net" required> <br><br>
    Eneter mark of subject Java Script <input type="number" name="js" required> <br><br>
    Eneter mark of subject MySQL<input type="number" name="mysql" required> <br><br>
    Eneter mark of subject PHP<input type="number" name="php" required> <br><br>
    Eneter mark of subject Python<input type="number" name="python" required> <br><br>
    <input type="submit" name="result" value="Calculate Result">
  </form> <br>
  <hr> <br>

  <?php
  if(isset($_POST['result'])){
    $net =$_POST['net'];
    $js =$_POST['js'];
    $mysql =$_POST['mysql'];
    $php =$_POST['php'];
    $python =$_POST['python'];
    $pass='Pass';
    if($net>30 || $js>30 ||  $mysql>30 ||  $php>30 ||  $python>30 )  $pass='Faild';
    $total=$net+$js+$mysql+$php+$python;
    $per=round(($total/5), 2);
    $grade;
    if($per>=90) $grade='A+';
    elseif($per>=80) $grade='A';
    elseif($per>=70) $grade='B+';
    elseif($per>=60) $grade='B';
    elseif($per>=50) $grade='C+';
    elseif($per>=40) $grade='C';
    else $grade='D+';
    echo "<b>Name: ".$_POST['nameS']."</b><br><br>";
    echo "<table border='1' cellpadding='6' cellspacing='0'>";
    echo "<tr><th>Subject</th><th>Marks</th></tr>";
    echo "<tr><td>Java Script</td><td>".$js."</td></tr>";
    echo "<tr><td>Networking</td><td>".$net."</td></tr>";
    echo "<tr><td>MySQL</td><td>".$mysql."</td></tr>";
    echo "<tr><td>PHP</td><td>".$php."</td></tr>";
    echo "<tr><td>Python</td><td>".$python."</td></tr>";
    echo "<tr><td>Result</td><td>".$pass."</td></tr>";
    echo "<tr><td>Total Marks</td><td>".$total."</td></tr>";
    echo "<tr><td>Percentage</td><td>".$per." %</td></tr>";
    echo "<tr><td>Grade</td><td>".$grade."</td></tr></table>";
  }
  ?>
</body>
</html>