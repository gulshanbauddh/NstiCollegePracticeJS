<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Binary Search</title>
</head>

<body>
  <h3>Binary Search</h3>
  <form method="post">
    Enter number (Seprate by comma)
    <input type="text" name="inputNum"><br><br>
    Enter search number
    <input type="text" name="searchNum"> <br> <br>
    <input type="submit" name="search" value="Search">
  </form>
  <?php
  if (isset($_POST['search'])) {
    // Input array
    $inputNum = explode(',', $_POST['inputNum']);
    $inputNum = array_map('trim', $inputNum);
    $inputNum = array_map('intval', $inputNum);
    // Search array
    $searchNum = $_POST['searchNum'];
    // Original Array
    echo "<br>Original Array: ";
    foreach ($inputNum as $num) {
      echo $num . " ";
    }
    // Bubble sorting
    function bubbleSort(array $arr)
    {
      for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr) - $i - 1; $j++) {
          if ($arr[$j] > $arr[$j + 1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
          }
        }
      }
      return $arr;
    }
    // Binary Search
    function binarySearch(array $arr, int $searchKey)
    {
      $start = 0;
      $end = count($arr) - 1;
      $mid = 0;
      $flag = 0;
      echo "<br><br>Search key is: $searchKey";
      while ($start <= $end) {
        $mid = (int)(($start + $end) / 2);
        if ($searchKey > $arr[$mid]) {
          $start = $mid + 1;
        } elseif ($searchKey < $arr[$mid]) {
          $end = $mid - 1;
        } else {
          $flag = 1;
          break;
        }
      }
      if($flag){
        echo "<br><Element found at index : ". $mid;
      } else{
        echo "<br><Element not found.";
      }
    }

    // Sorted Array
    $sortedArray = bubbleSort($inputNum);
    echo "<br><br>Sorted Array: ";
    foreach ($sortedArray as $el) {
      echo $el . " ";
    }
    // Binary Search
    binarySearch($sortedArray, $searchNum);
  }
  ?>
</body>

</html>