<?php
// DATABASE CONNECTION
$conn = mysqli_connect("localhost", "root", "", "stockdb");
if (!$conn) {
  die("Connection Failed : " . mysqli_connect_error());
}
// DEFAULT VARIABLES
$id = "";
$pname = "";
$qty = "";
$price = "";
$edit = false;
/* INSERT OPERATION */
if (isset($_POST['save'])) {
  $id = $_POST['id'];
  $pname = $_POST['product_name'];
  $qty = $_POST['quantity'];
  $price = $_POST['price'];
  $sql = "INSERT INTO stock(id, product_name, quantity, price)
VALUES('$id','$pname','$qty','$price')";
  if (mysqli_query($conn, $sql)) {
    echo "Record Inserted Successfully<br><br>";
  } else {
    echo "Insert Error : " . mysqli_error($conn);
  }
}
/* DELETE OPERATION */
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $sql = "DELETE FROM stock WHERE id='$id'";
  if (mysqli_query($conn, $sql)) {
    echo "Record Deleted Successfully<br><br>";
  } else {
    echo "Delete Error : " . mysqli_error($conn);
  }
}
/* FETCH RECORD FOR EDIT */
if (isset($_GET['edit'])) {
  $edit = true;
  $id = $_GET['edit'];
  $sql = "SELECT * FROM stock WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $pname = $row['product_name'];
    $qty = $row['quantity'];
    $price = $row['price'];
  }
}
/* UPDATE OPERATION */
if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $pname = $_POST['product_name'];
  $qty = $_POST['quantity'];
  $price = $_POST['price'];
  $sql = "UPDATE stock
SET
product_name='$pname',
quantity='$qty',
price='$price'
WHERE id='$id'";
  if (mysqli_query($conn, $sql)) {
    echo "Record Updated Successfully<br><br>";
    // CLEAR VALUES AFTER UPDATE
    $id = "";
    $pname = "";
    $qty = "";
    $price = "";
    $edit = false;
  } else {
    echo "Update Error : " . mysqli_error($conn);
  }
}
?>
<html>

<head>
  <title>Stock CRUD Program</title>
</head>

<body>
  <h2>Stock Management System</h2>
  <form method="post">
    ID :
    <input type="text"
      name="id"
      value="<?php echo $id; ?>">
    <br><br>
    Product Name :
    <input type="text"
      name="product_name"
      value="<?php echo $pname; ?>">
    <br><br>
    Quantity :
    <input type="number"
      name="quantity"
      value="<?php echo $qty; ?>">
    <br><br>
    Price :
    <input type="text"
      name="price"
      value="<?php echo $price; ?>">
    <br><br>
    <?php
    if ($edit == true) {
    ?>
      <input type="submit"
        name="update"
        value="Update">
    <?php
    } else {
    ?>
      <input type="submit"
        name="save"
        value="Insert">
    <?php
    }
    ?>
    <input type="button"
      value="Clear"
      onclick="window.location.href='crud.php'">
  </form>
  <hr>
  <h2>Stock Details</h2>
  <table border="1" cellpadding="15" cellspacing="0">
    <tr>
      <th>ID</th>
      <th>Product Name</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Action</th>
    </tr>
    <?php
    $sql = "SELECT * FROM stock";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['product_name']; ?></td>
        <td><?php echo $row['quantity']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td>
          <a href="crud.php?edit=<?php echo $row['id']; ?>">
            Edit
          </a>
          |
          <a href="crud.php?delete=<?php echo $row['id']; ?>">
            Delete
          </a>
        </td>
      </tr>
    <?php
    }
    ?>
  </table>
</body>

</html>
<?php
mysqli_close($conn);
?>