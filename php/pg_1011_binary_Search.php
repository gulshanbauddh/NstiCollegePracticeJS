<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Binary Search</title>
</head>
<body>
  <h4>Binary Search</h4>
  <form method="post">
    Enter number (Seprate by comma)
    <input type="text" name="inputNum" ><br><br>
    Enter search number
    <input type="text" name="searchNum" > <br> <br>
    <input type="submit" name="search" value="Search">
  </form>
  <?php
  if(isset($_POST['search'])){
    // Input array
    $inputNum=explode(',',$_POST['inputNum']);
    $inputNum=array_map('trim',$inputNum);
    $inputNum=array_map('intval',$inputNum);
    // Search array
    $searchNum=$_POST['searchNum'];
    // Original Array
    echo "<br>Original Array: ";
    foreach($inputNum as $num){
      echo $num." ";
    }
    // Bubble sorting    
  }
  ?>
</body>
</html>