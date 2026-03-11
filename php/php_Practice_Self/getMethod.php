<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP GET Working</title>
</head>
<body>
  <h1>PHP GET Working</h1>
  <?php
    echo "Gulshan";
    $a=$_GET['name'];
    echo "Name : ".$a;
    echo "<br>Age : ".$_GET['age'];
    echo "<pre>";
    print_r($_GET);
  ?>
</body>
</html>