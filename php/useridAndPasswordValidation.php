<!DOCTYPE html>
<html>

<head>
  <title>Regular Expression Validation</title>
</head>

<body>
  <center>
    <div>
      <h2>User Id Password Validation:</h2>

      <form method="POST" action="">
        <input type="text" name="userID" placeholder="Enter your ID" required>
        <br><br>
        <input type="password" name="userPassword" placeholder="Enter your Password" required>
        <br><br>
        <button type="submit" name="submitBtn">Submit</button>
      </form>

      <br>

      <?php
      // Sirf tabhi chalega jab POST request aayegi (Submit button click hoga)
      if (isset($_POST['submitBtn'])) {

        // POST method se data get karna
        $userId = $_POST['userID'];
        $userPassword = $_POST['userPassword'];

        // PHP me Regex ko forward slashes (/) ke andar likhna zaroori hai
        $regixUserID = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)[A-Za-z\d]{4,}$/";
        $regixPassword = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$!%*?&])[A-Za-z\d@#$!%*?&]{8,}$/";

        // --- User ID Validation ---
        if (preg_match($regixUserID, $userId)) {
          echo '<p style="color: green;">User Id valid</p>';
        } else {
          echo '<p style="color: red;">User Id must be at least 4 characters long with alphanumerical</p>';
        }

        // --- Password Validation ---
        if (preg_match($regixPassword, $userPassword)) {
          echo '<p style="color: green;">Strong Password</p>';
        } else {
          echo '<p style="color: red;">Password must be at least 8 characters with alphanumerical and special character</p>';
        }
      }
      ?>
    </div>
  </center>
</body>

</html>