<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill</title>
</head>
<body>
    <h1>Electricity Bill</h1>

    <form method="post" action="">
        Enter Consumer Name: <input type="text" name='conName' required><br><br>
        Enter Consumer Id: <input type="text"name='conId' required><br><br>
        Enter Units Consumed: <input type="number" name='unit' required><br><br>
        <input type="submit" name="calculate" value="Generate Bill"> 
    </form><br>

    <hr>

    <?php
    if (isset($_POST['calculate'])) {
        // Initialization
        $bill = 0;
        $sur = 0;
        $conName = $_POST['conName'];
        $conId = $_POST['conId'];
        $unit = (int)$_POST['unit'];

        // Calculate Electric Bill 
        if ($unit < 100) {
            $bill = ($unit * 5);
        } elseif ($unit < 200) {
            $bill = (100 * 5) + (($unit - 100) * 7);
        } else {
            $bill = ((100 * 5) + (100 * 7) + (($unit - 200) * 10));
        }

        // Calculate Surcharge
        if ($bill > 1000) {
            $sur = $bill * 0.1;
        }

        // Display and Output
        echo "<div class='bill-container'>";
        echo "<h3>Electricity Rate-</h3>";
        echo "-------------------------------------------";
        echo "<br>0-100 unit @ ₹ 5";
        echo "<br>100-200 unit @ ₹ 7";
        echo "<br>200 above unit @ ₹ 10";
        echo "<br>-------------------------------------------";
        
        echo "<h3>Your Bill-</h3>";
        echo "Name of Consumer: " . $conName;
        echo "<br>Consumer Id: " . $conId;
        echo "<br>Number of unit: " . $unit;
        echo "<br>Surcharge: ₹ " . number_format($sur, 2);
        echo "<br><b>Total Bill: ₹ " . number_format(($bill + $sur), 2) . "</b>";
        echo "</div>";
    }
    ?>
</body>
</html>