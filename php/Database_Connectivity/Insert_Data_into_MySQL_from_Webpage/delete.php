<?php
$conn = mysqli_connect("localhost","root","","studentdb");
$sql = "DELETE FROM students
 WHERE id=1";
if(mysqli_query($conn,$sql))
{
 echo "Record Deleted Successfully";
}
else
{
 echo "Delete Failed";
}
mysqli_close($conn);
?>