<!DOCTYPE html>
<html>
<head>
    <title>Employeeee Salary Slip</title>
</head>
<body>
    <h2>Employeeee Salary Input.</h2>
    <form method="post" action="">
        Employeeee Name: <input type="text" name="empName" required><br><br>
        Employeeee ID: <input type="text" name="empId" required><br><br>
        Designation: <input type="text" name="empDesignation" required><br><br>
        Basic Pay: <input type="number" name="basicPay" required><br><br>
        Deduction: <input type="number" name="dect" required><br><br>
        <input type="submit" name="calculate" value="Generate Salary Slip">
    </form>

    <hr>

    <?php
    if (isset($_POST['calculate'])) {
        // 1. Input (Fetching from the form)
        $empName = $_POST['empName'];
        $empId = $_POST['empId'];
        $empDesignation = $_POST['empDesignation'];
        $basicPay = (int)$_POST['basicPay'];
        $dect = (int)$_POST['dect'];

        // 2. Calculation
        $hra = $basicPay * 0.3;
        $da = $basicPay * 0.53;
        $ta = $basicPay * 0.15;
        $totalSalary = $basicPay + $hra + $da + $ta;
        $netSalary = $totalSalary - $dect;

        // 3. Display or Output
        echo "<h3><u>Salary Details:</u></h3>";
        echo "<b>Employee Name:</b> " . $empName;
        echo "<br><br><b>Employee Id:</b> " . $empId;
        echo "<br><br><b>Employee Designation:</b> " . $empDesignation;
        echo "<br><br><b>Employee Basic Pay:</b> ₹" . $basicPay;
        echo "<br><br><b>Employee Deduction</b>: ₹" . $dect;
        echo "<br><br><b>Employee Total Salary:</b> ₹" . $totalSalary;
        echo "<br><br><b>Employee Net Salary:</b> ₹" . $netSalary . "</b>";
    }
    ?>
</body>
</html>