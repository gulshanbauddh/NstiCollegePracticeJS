<?php
include "db.php";
/** @var mysqli $conn */
$sql = "UPDATE stock
 SET quantity = 20
 WHERE id = 1";
if(mysqli_query($conn, $sql))
{
 echo "Record Updated Successfully";
}
else
{
 echo "Update Failed";
}
?>