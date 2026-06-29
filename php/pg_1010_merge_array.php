<?php
echo "<h3>Mege two array:</h3>";
$arr1=array(15,25,45,10,2,65);
$arr2=array(78,5,14,23,21,45,25,64,12);
echo "Array 1 is: ";
print_r($arr1);

echo "<br><br>Array 2 is: ";
print_r($arr2);

$mergeArray=array_merge($arr1,$arr2);
echo "<br><br>Merge Array is: ";
print_r($mergeArray);
?>