<!DOCTYPE html>
<html>
<head>
  <title>Prime number between two limit:</title>
</head>
<body>

  <h1>Prime number between two limit:</h1>

  <form method="post">
    <label>Enter Start Limit:</label>
    <input type="number" name="limit1"> <br><br>

    <label>Enter End Limit:</label>
    <input type="number" name="limit2"> <br><br>

    <input type="submit" name="check">
  </form>

  <?php
  if (isset($_POST['check'])) {
    $limit1 = $_POST['limit1'];
    $limit2 = $_POST['limit2'];

    echo "<br>Prime number between " . $limit1 . " and " . $limit2 . ":<br>";

    if ($limit1 > 0 && $limit1 < $limit2) {

      for ($i = $limit1; $i <= $limit2; $i++) {
        $num = $i;
        $isPrime = true;

        for ($j = 2; $j <= $num / 2; $j++) {
          if ($num % $j == 0) {
            $isPrime = false;
            break;
          }
        }

        if ($isPrime && $num != 1) {
          echo $num . ", ";
        }
      }

    } else {
      echo "Something wrong !";
    }
  }
  ?>

</body>
</html>