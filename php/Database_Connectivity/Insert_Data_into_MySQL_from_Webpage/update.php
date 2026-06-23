<?php
$conn = mysqli_connect("localhost","root","","studentdb");
$sql = "UPDATE students
 SET trade='CSA'
 WHERE id=1";
if(mysqli_query($conn,$sql))
{
 echo "Record Updated Successfully";
}
else
{
 echo "Update Failed";
}
mysqli_close($conn);
?>