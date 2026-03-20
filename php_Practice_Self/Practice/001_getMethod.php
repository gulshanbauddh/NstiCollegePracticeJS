<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP GET Working</title>
</head>

<body>
  <?php
    $method=$_SERVER['REQUEST_METHOD'];
    echo "<pre>";
    if($method==='GET'){
      echo '<h1>PHP GET Working:-</h1>';
      print_r($_GET);
      print_r('Name: '.$_POST['name']);      
      print_r('<br>Age: '.$_POST['age']);
      } elseif($method==='POST'){
      echo '<h1>PHP POST Working:-</h1>';
      print_r($_POST);
      print_r('Name: '.$_POST['name']);      
      print_r('<br>Age: '.$_POST['age']);
    }
      
  ?>

</body>

</html>