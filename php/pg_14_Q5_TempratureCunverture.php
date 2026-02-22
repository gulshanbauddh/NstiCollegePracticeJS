<!DOCTYPE html>
<html>
<head>
    <title>Temperature Conversion</title>
</head>
<body>
    <h1>Temperature Conversion-</h1>

    <form method="post" action="">
        Enter temperature value: 
        <input type="number" name="temp" step="any" required><br><br>
        
        Convert to:<br>
        <input type="radio" name="choice" value="C" id="celsius" required>
        <label for="celsius" style="cursor:pointer;" >Celsius to Fahrenheit (°C to °F)</label><br>
        
        <label style="cursor:pointer;" >          
          <input type="radio" name="choice" value="F" id="fahrenheit" required>
          Fahrenheit to Celsius (°F to °C)
        </label><br><br>
        
        <input type="submit" name="submit" value="Convert">
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $temp = (float)$_POST['temp'];
        $choice = $_POST['choice']; // Yeh radio button ki 'value' uthayega (C ya F)

        if ($choice === "C") {
            $f = ($temp * 9 / 5) + 32;
            echo "<h3>Result:</h3>";
            echo $temp . " °C = " . number_format($f, 2) . " °F";
        } 
        elseif ($choice === "F") {
            $c = ($temp - 32) * 5 / 9;
            echo "<h3>Result:</h3>";
            echo $temp . " °F = " . number_format($c, 2) . " °C";
        }
    }
    ?>
</body>
</html>