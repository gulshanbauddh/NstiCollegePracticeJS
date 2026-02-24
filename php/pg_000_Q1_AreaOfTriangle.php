<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Q1 Area Of Rectrangle</title>
</head>

<body>
  <h2>Q1 Area Of Rectrangle</h2>
  <form method="post">
    Enter Length (cm)
    <input type="number" name="l" placeholder="Enter length"><br> <br>
    Enter width (cm)
    <input type="number" name="w" placeholder="Enter width"><br> <br>
    <input type="submit" name="submit">
  </form> <hr>
  <?php
  if (isset($_POST["submit"])) {
    if ($_POST["w"] && $_POST["l"]) {
      $w = $_POST["w"];
      $l = $_POST["l"];
      echo "Length a=".$l."<br>Width b=".$w."<br>Area=".($l * $w)."cm<sup>2</sup>";
    } else echo "Error: Enter both length and width.";
  }
  ?>
</body>

</html>