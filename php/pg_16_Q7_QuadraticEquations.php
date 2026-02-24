<html>
<head>
    <title>Quadratic Equation</title>
</head>
<body>
    <h2>Roots of Quadratic Equation-</h2>

    <form method="post">
        Enter value of a: <input type="number" name="a" step="any" required><br><br>
        Enter value of b: <input type="number" name="b" step="any" required><br><br>
        Enter value of c: <input type="number" name="c" step="any" required><br><br>
        <input type="submit" name="calculate" value="Find Roots">
    </form><hr>

    <?php
        if (isset($_POST['calculate'])) {
            // Initialization & Input
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];

            echo "a = " . $a . "<br>";
            echo "b = " . $b . "<br>";
            echo "c = " . $c . "<br>";

            // Calculation of Discriminant (d)-
            $d = ($b * $b) - (4 * $a * $c);
            
            // Mathematical Logic
            if ($d > 0) {
            // Roots are Real and Different
                echo "<h3>Roots are real and different:</h3>";
                $root1 = (-$b + sqrt($d)) / (2 * $a);
                $root2 = (-$b - sqrt($d)) / (2 * $a);
                echo "Root 1 = " . number_format($root1, 2) . "<br>";
                echo "Root 2 = " . number_format($root2, 2) . "<br>";
            }
            elseif ($d < 0) {
            // Roots are Imaginary and Different
                echo "<h3>Roots are Imaginary and different:</h3>";
                $realPart = -$b / (2 * $a);
                $imPart = sqrt(-$d) / (2 * $a);
                echo "Root 1 = " . number_format($realPart, 2) . " + " . number_format($imPart, 2) . "i<br>";
                echo "Root 2 = " . number_format($realPart, 2) . " - " . number_format($imPart, 2) . "i<br>";
            }
            else {
            // Roots are Real and Same
                echo "<h3>Roots are Real and same:</h3>";
                $root1 = -$b / (2 * $a);
                echo "Root = " . number_format($root1, 2);
            }
        }
    ?>
</body>
</html>