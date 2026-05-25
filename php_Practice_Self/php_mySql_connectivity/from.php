<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>
  <h1>Signup</h1>
  <form target="form.php" method="post">
    <input type="text" name="name" placeholder="Enter Your name."> <br><br>
    <input type="text" name="trade" placeholder="Enter Your Trade."> <br><br>
    <input type="number" name="rollno" placeholder="Enter Your rollno."> <br><br>
    <input type="submit" value="Submit" name="submit">
  </form>
  <?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $trade = $_POST['trade'];
    $rollno = $_POST['rollno'];
    // Connection
    $conn = mysqli_connect('localhost', 'root', '', 'fristDB');
    if (!$conn) {
      die("Database not connected." . mysqli_connect_error());
    }
    $sql = "insert into data values ('$name','$trade','$rollno');";
    $result=mysqli_query($conn, $sql);
    if(!$result){
      echo "SQL error ". mysqli_error($conn);
    } else{
      echo "Data insert succesfully";
    }
  }
  ?>
</body>

</html>