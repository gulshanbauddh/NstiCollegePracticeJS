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
    // echo "Gulshan";
    // $a=$_GET['name'];
    // echo "Name : ".$a;
    // echo "<br>Age : ".$_GET['age'];
    echo "<pre>";
<<<<<<< HEAD
    print_r($_GET);
  ?>

=======
    // print_r($_GET);
    // print("<br>Method Name is : ".$_SERVER['REQUEST_METHOD']."<BR>");
    // echo $a['name'];
    // echo '$_REQUEST IS : '.$_REQUEST.'<br>';
    echo 'print_r is : '.print_r($_REQUEST).'<br>';
    if($_SERVER['REQUEST_METHOD']=='GET'){
      echo 'Name is : '.$_GET['name'];
      echo '<br>Age is : '.$_GET['age'];
      echo '<hr>Display using : GET Method<br>';
      foreach ($_GET as $key => $value) {
        echo $key . ": "  .$value. "<br>";
      }
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
      echo '<hr>Display using : POST Method<br>';
      foreach ($_POST as $key => $value) {
        echo $key . ": "  .$value. "<br>";
      }
    }
    ?>
  <a href="./001_GET_Method.php">Return to Home Submit page</a>
>>>>>>> af0c759d266b8b5ae3be6350eeeefa55b99a8cd4
</body>

</html>