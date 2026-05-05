<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check no is Armstrong or not</title>
</head>
<body>

    <h1>Check no is Armstrong or not:</h1>

    <form method="post">
        <label>Enter any number:</label>
        <input type="number" name="num">
        <input type="submit" name="check">
    </form>

    <?php
    if (isset($_POST['check'])) {

        $num = $_POST['num'];
        $orgNum = $num;
        $sum = 0;

        echo "<br>Your number is: " . $num . "<br>";

        // count digits (simple way)
        $digit = strlen($num);

        while ($num > 0) {
            $temp = $num % 10;
            $sum = $sum + pow($temp, $digit);
            $num = (int)($num / 10);
        }

        if ($sum == $orgNum) {
            echo "Armstrong";
        } else {
            echo "Not Armstrong";
        }
    }
    ?>

</body>
</html>