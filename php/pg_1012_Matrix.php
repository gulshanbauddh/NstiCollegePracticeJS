<!DOCTYPE html>
<html>
<head>
    <title>Matrix Addition in PHP</title>
</head>
<body>
<center>
<h2>Matrix Addition Program</h2>

<form method="post">
    Enter number of rows:
    <input type="number" name="rows" required><br><br>
    
    Enter number of columns:
    <input type="number" name="cols" required><br><br>
    <input type="submit" value="Next">
</form>

<?php
// Step 2: Input matrices
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['rows']) && isset($_POST['cols'])){
    $rows = $_POST['rows'];
    $cols = $_POST['cols'];
    
    echo '<form method="post">';
    echo '<input type="hidden" name="rows" value="'.$rows.'">';
    echo '<input type="hidden" name="cols" value="'.$cols.'">';
    
    // Matrix A
    echo "<h3>Enter elements for Matrix A:</h3>";
    for($i=0; $i<$rows; $i++){
        for($j=0; $j<$cols; $j++){
            echo "A[$i][$j]: ";
            echo "<input type='number' name='A[$i][$j]' required>";
        }
        echo "<br><br>";
    }
    
    // Matrix B
    echo "<h3>Enter elements for Matrix B:</h3>";
    for($i=0; $i<$rows; $i++){
        for($j=0; $j<$cols; $j++){
            echo "B[$i][$j]: ";
            echo "<input type='number' name='B[$i][$j]' required>";
        }
        echo "<br><br>";
    }
    
    echo '<input type="submit" value="Add Matrix">';
    echo '</form>';
}

// Step 3: Add matrices
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['A']) && isset($_POST['B'])){
    $A = $_POST['A'];
    $B = $_POST['B'];
    $rows = $_POST['rows'];
    $cols = $_POST['cols'];
    
    $C = array();
    
    // Addition
    for($i=0; $i<$rows; $i++){
        for($j=0; $j<$cols; $j++){
            $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
        }
    }
    
    // Display Matrix A
    echo "<h3>Matrix A</h3>";
    echo "<table border='1' cellpadding='5'>";
    for($i=0; $i<$rows; $i++){
        echo "<tr>";
        for($j=0; $j<$cols; $j++){
            echo "<td>".$A[$i][$j]."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    
    // Display Matrix B
    echo "<h3>Matrix B</h3>";
    echo "<table border='1' cellpadding='5'>";
    for($i=0; $i<$rows; $i++){
        echo "<tr>";
        for($j=0; $j<$cols; $j++){
            echo "<td>".$B[$i][$j]."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    
    // Display Result
    echo "<h3>Resultant Matrix (A + B)</h3>";
    echo "<table border='1' cellpadding='5'>";
    for($i=0; $i<$rows; $i++){
        echo "<tr>";
        for($j=0; $j<$cols; $j++){
            echo "<td>".$C[$i][$j]."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
</center>
</body>
</html>