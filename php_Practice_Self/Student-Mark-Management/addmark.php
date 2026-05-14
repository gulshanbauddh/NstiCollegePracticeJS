<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Mark Management (Add mark)</title>
</head>

<body>
  <h1>Student mark management (Add mark):</h1>
  <form action="" method="POST">
    <input type="number" name="rollno" id="rollno" placeholder="Enter rollno of student." required> <br> <br>
    <input type="text" name="name" id="name" placeholder="Enter name of student." required> <br> <br>
    <input type="number" name="mark" id="mark" placeholder="Enter mark of student." required> <br> <br>
    <input type="submit" name="AddMark" value="Add Mark">
  </form>
  <br><br>
  <a href="home.php">Back to Home</a>
  <br> <br>
  <?php
  if (isset($_POST['AddMark'])) {
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $mark = $_POST['mark'];
    if ($rollno !== "" && $name !== "" && $mark !== "") {
      $data = $rollno . "|" . $name . "|" . $mark . "\n";
      $file = fopen('student.txt', 'a');
      fwrite($file, $data);
      echo "Mark add succesfull.";
    } else {
      echo "Mark not add succesfull.";
    }
  }
  ?>
</body>

</html>