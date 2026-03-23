<?php session_start();
session_start();
if (!isset($_SESSION['findSNO'])) {
  header('location:forget.php'); // Wapas bhej do agar session nahi hai
  exit;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="components/logo.png" type="image/x-icon">
  <title>Login</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="/gulshan/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="components/style.css">
</head>

<body>
  <?php //Nav bar Start
  require 'components/_connaction.php';
  require 'components/_nav.php';
  global $conn;
  if ($_SESSION['findSNO'] == false) {
    header("location:login.php");
  } else {
    // 
  }
  ?>

  <div class="container2">
    <div class="welcome-card mt-5">
      <h1 class="display-5 fw-bold text-dark">Welcome , Login!</h1>
      <div class="container mt-3">
        <form method="post" action="">
          <div class="mb-3 text-start text-sm-start">
            <label for="passwordLogin" class="form-label fs-4">New password</label>
            <input type="password" class="form-control" id="passwordLogin" name="passwordLogin" required>
          </div>
          <div class="mb-3 text-start text-sm-start">
            <label for="cpasswordLogin" class="form-label fs-4">Confirm new password</label>
            <input type="password" class="form-control" id="cpasswordLogin" name="cpasswordLogin" required>
          </div>
          <input type="submit" class="btn btn-primary col-8" value="Login" name="login">
          <input type="clear" class="btn btn-success col-8 mt-2" value="Create new account" name="new account" id="newAccoungBtn">
        </form>
        <!-- Forget Password -->
        <p class="m-0 mt-3"><a class="link-opacity-50-hover" href="forgetUser.php">Forget Username</a></p>
        <!-- Forget Username -->
        <p class="m-0 mt-2"><a class="link-opacity-50-hover" href="forgetPass.php">Forget Password</a></p>
      </div>
      <p class="mt-4 text-secondary small">
      <p class="d-inline">Current Time : </p>
      <p class="fw-bold d-inline" id="live-clock">00:00:00 </p>
      <p class="d-inline"> from Mumbai, India</p>
    </div>
  </div>

  <?php
  if (isset($_POST['login']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameLogin = $_POST['usernameLogin'];
    $passwordLogin = $_POST['passwordLogin'];
    $sql = "SELECT `username`,`password`,`fullname` FROM `user`;";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    while ($num > 1) {
      $row = mysqli_fetch_assoc($result);
      if ($usernameLogin == $row['username'] && $passwordLogin == $row['password']) {
        $_SESSION['islogin'] = true;
        $_SESSION['fullname'] = $row['fullname'];
        $fullname = $_SESSION['fullname'];
        $words = explode(" ", $fullname);
        $initial = "";
        foreach ($words as $word) {
          $initial .= strtoupper(($word[0]));
        }
        $_SESSION['shortname'] = $initial;

        header("location:index.php");
      }
      $num--;
    }
  }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
  <script>
    const newAccoungBtn = document.querySelector("#newAccoungBtn");
    newAccoungBtn.addEventListener('click', () => {
      window.location.href = "signup.php";
    });
    // For Current live time
    function updateClock() {
      const now = new Date();

      let options = {
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: true
      };

      const timeString = now.toLocaleTimeString('en-IN', options);
      document.getElementById('live-clock').innerText = timeString;
    }
    setInterval(updateClock, 1000);
    updateClock();
  </script>
</body>

</html>