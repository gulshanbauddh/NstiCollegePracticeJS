<?php
include "db.php";
/** @var mysqli $conn */
$sql = "SELECT * FROM stock";
$result = mysqli_query($conn, $sql);
echo "<h2>Stock Details</h2>";
while($row = mysqli_fetch_assoc($result))
{
 echo "ID: " . $row['id'] . "<br>";
 echo "Product: " . $row['product_name'] . "<br>";
 echo "Quantity: " . $row['quantity'] . "<br>";
 echo "Price: " . $row['price'] . "<br><br>";
}
?>