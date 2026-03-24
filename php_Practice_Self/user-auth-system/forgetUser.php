<?php
session_start();
if (isset($_SESSION['forgetUserFind']) && $_SESSION['forgetUserFind'] == true) {
  header('location:forgetUser.php');
  $_SESSION['forgetUserFind'] = false;
  $is_done = $_SESSION['forgetUserFind'];
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="components/logo.png" type="image/x-icon">
  <title>Forget Username</title>
  <link href="/gulshan/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="components/style.css">
</head>

<body>
  <?php
  require 'components/_nav.php';
  require 'components/_connaction.php';
  global $conn;
  global $is_done;
  if ($_SESSION['islogin'] == true) {
    header("location:index.php");
    exit;
  }
  if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $fullname = $_POST['fullname'];
    $fathername = $_POST['fathername'];
    $dob = $_POST['dob'];
    $passwordSign = $_POST['passwordSign'];
    if (empty($fullname) || empty($fathername) || empty($dob) || empty($passwordSign)) {
      echo "<div class='alert alert-danger alert-dismissible fade show m-0' role='alert'>
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      <strong>Alert!</strong> Blank Field is not allow.</div>";
    } else {
      $fullname     = mysqli_real_escape_string($conn, $fullname);
      $fathername   = mysqli_real_escape_string($conn, $fathername);
      $dob          = mysqli_real_escape_string($conn, $dob);
      $passwordSign = mysqli_real_escape_string($conn, $passwordSign);

      $sql = "SELECT `username` FROM `user` WHERE `fullname`='$fullname' AND `fathername`='$fathername' AND `dob`='$dob' AND `password`='$passwordSign'";

      $result = mysqli_query($conn, $sql);

      if ($result) {
        $count = mysqli_num_rows($result);

        if ($count == 1) {
          $_SESSION['findSNO'] = true;
          $row = mysqli_fetch_assoc($result);
          $username = $row['username'];
          echo "<div class='alert alert-success alert-dismissible fade show m-0 fs-5' role='alert'>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                <strong>Auccess!</strong> User name found and username is- <strong>" . $username . "</strong></div>";
          $_SESSION['forgetUserFind'] = true;
          $is_done = $_SESSION['forgetUserFind'];
        } elseif ($count > 1) {
          echo "<div class='alert alert-warning alert-dismissible fade show m-0' role='alert'>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                <strong>Alert!</strong> Multiple users found with these details. Please contact admin.</div>";
        } else {
          echo "<div class='alert alert-danger alert-dismissible fade show m-0' role='alert'>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                <strong>Error!</strong> User not found. Please check your details.</div>";
        }
      } else {
        die("SQL Error: " . mysqli_error($conn));
      }
    }
  }
  ?>

  <!-- Forget password Form -->
  <div class="container2">
    <div class="welcome-card welcome-cardSign">
      <h1 class="display-6 fw-bold text-dark">Forget Username</h1>
      <div class="container mt-3">
        <form method="post" action="">
          <div class="mb-3 text-start text-sm-start">
            <label for="fullname" class="form-label fs-5">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" <?php echo ($is_done ? 'disabled' : '') ?> required>
          </div>

          <div class="mb-3 text-start text-sm-start">
            <label for="fathername" class="form-label fs-5">Father name</label>
            <input type="text" class="form-control" id="fathername" name="fathername" <?php echo ($is_done ? 'disabled' : '') ?> required>
          </div>
          <div class="mb-3 text-start text-sm-start">
            <label for="dob" class="form-label fs-5">DOB</label>
            <input type="date" class="form-control" style="width: auto;" id="dob" name="dob" <?php echo ($is_done ? 'disabled' : '') ?> required>
          </div>
          <div class="mb-3 text-start text-sm-start">
            <label for="passwordSign" class="form-label fs-5">Password</label>
            <input type="password" class="form-control" id="passwordSign" name="passwordSign" <?php echo ($is_done ? 'disabled' : '') ?> required>
          </div>
          <input type="submit" class="btn btn-primary col-8" id="submit" value="Submit" name="signup" <?php echo ($is_done ? 'disabled' : '') ?>>
          <input type="button" class="btn btn-success col-8 mt-2" value="Create new account" name="login" id="logAccoungBtn">
        </form>
        <!-- Forget Username & Password -->
        <p class="m-0 mt-3">
          <a class="link-opacity-50-hover" href="forgetUser.php">Forget Username</a>
          <a class="link-opacity-50-hover ms-4" href="login.php">Login here</a>
        </p>

      </div>
      <p class="mt-4 text-secondary small">
      <p class="d-inline">Current Time : </p>
      <p class="fw-bold d-inline" id="live-clock">00:00:00 </p>
      <p class="d-inline"> from Mumbai, India</p>
    </div>
  </div>
  <script>
    const logAccoungBtn = document.getElementById('logAccoungBtn');
    logAccoungBtn.addEventListener('click', login);

    function login(event) {
      window.location.href = "login.php";
    };

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