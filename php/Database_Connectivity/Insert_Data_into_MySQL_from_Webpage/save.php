<?php
$conn = mysqli_connect("localhost", "root", "", "studentdb");
if (!$conn) {
  die("Connection Failed: " . mysqli_connect_error());
}
// Check form submitted or not
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $trade = $_POST['trade'];
  $sql = "INSERT INTO students(id,name,trade)
 VALUES('$id','$name','$trade')";
  if (mysqli_query($conn, $sql)) {
    echo "Record Inserted Successfully";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
mysqli_close($conn);
?>

<html>

<body>
  <h2>Student Form</h2>
  <form method="post">
    Id:
    <input type="text" name="id"><br><br>
    Name:
    <input type="text" name="name"><br><br>
    Trade:
    <input type="text" name="trade"><br><br>
    <input type="submit" name="submit" value="Save">
  </form>
</body>

</html>