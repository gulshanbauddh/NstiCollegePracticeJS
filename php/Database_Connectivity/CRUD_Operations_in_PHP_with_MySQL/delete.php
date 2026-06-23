<?php
include "db.php";
/** @var mysqli $conn */
$sql = "DELETE FROM stock
 WHERE id = 1";
if(mysqli_query($conn, $sql))
{
 echo "Record Deleted Successfully";
}
else
{
 echo "Delete Failed";
}
?>