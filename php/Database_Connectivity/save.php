<?php
$conn = mysqli_connect("localhost","root", "Root@123","studentdb");

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $trade = $_POST['trade'];

    $sql = "INSERT INTO students(id, name, trade) VALUES('$id', '$name', '$trade')";

    if(mysqli_query($conn, $sql)) {
        echo "Record Inserted Successfully";
    } else {
        echo "Error: ". mysqli_error($conn);
    }
}
mysqli_close($conn);
?>