<?php
include "db.php";
/** @var mysqli $conn */
if (isset($_POST['submit'])) {
  $pname = $_POST['product_name'];
  $qty = $_POST['quantity'];
  $price = $_POST['price'];
  $sql = "INSERT INTO stock(product_name, quantity, price)
 VALUES('$pname','$qty','$price')";
  if (mysqli_query($conn, $sql)) {
    echo "Stock Added Successfully";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
?>
<html>

<body>
  <h2>Add Stock</h2>
  <form method="post">
    Product Name:
    <input type="text" name="product_name"><br><br>
    Quantity:
    <input type="number" name="quantity"><br><br>
    Price:
    <input type="text" name="price"><br><br>
    <input type="submit" name="submit" value="Save">
  </form>
</body>

</html>