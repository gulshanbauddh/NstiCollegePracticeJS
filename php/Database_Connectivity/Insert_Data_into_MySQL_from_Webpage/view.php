<?php
$conn = mysqli_connect("localhost","root","","studentdb");
if(!$conn)
{
die("Connection Failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_assoc($result))
{
echo "ID: " . $row['id'] . "<br>";
echo "Name: " . $row['name'] . "<br>";
echo "Trade: " . $row['trade'] . "<br><br>";
}
}
else
{
echo "No Records Found";
}
mysqli_close($conn);
?>