<?php
$conn=mysqli_connect("localhost","root","","gulshan");
if(!$conn){
  die("Connection faild ".mysqli_connect_error());
} else{
  echo "Connection succesfully";
}
?>