<?php session_start();
if (!isset($_SESSION['findSNO']) || $_SESSION['findSNO'] != true) {
  $_SESSION['PassChangeStatus'] = false;
  header('location:forgetPass.php');
  exit;
}
?>
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
  global $is_verified;
  $is_done = $_SESSION['PassChangeStatus'];
  if ($_SESSION['PassChangeStatus'] == true) {
    echo "<div class='alert alert-success alert-dismissible fade show m-0' role='alert'>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                <strong>Succes! </strong> Your Password Change Succesfull.Password is- <strong>" . $_SESSION['newPass'] . "</strong></div>";
    $_SESSION['PassChangeStatus'] = false;
    $_SESSION['findSNO'] = false;
  }
  if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $_SESSION['newPass'] = $_POST['NewPass'];
    $sno = $_SESSION['user_sno'];
    $newPassword = $_POST['NewPass'];
    $sql = "UPDATE `user` SET `password` = '$newPassword' WHERE `sno` = '$sno'";
    $result = mysqli_query($conn, $sql);
    $_SESSION['PassChangeStatus'] = true;
    header('location:changePass.php');
    exit;
  }
  ?>

  <div class="container2">
    <div class="welcome-card mt-5">
      <h1 class="display-5 fw-bold text-dark">Change password</h1>
      <div class="container mt-3">
        <form method="post" action="">
          <div class="mb-3 text-start text-sm-start">
            <label for="NewPass" class="form-label fs-4">New password</label>
            <input type="password" class="form-control" id="NewPass" name="NewPass" title="Enter Password" <?php echo ($is_done ? 'disabled' : '') ?> required>
          </div>
          <div class="mb-3 text-start text-sm-start">
            <label for="cNewPass" class="form-label fs-4">Confirm new password</label>
            <input type="password" class="form-control" id="cNewPass" name="cNewPass" <?php echo ($is_done ? 'disabled' : '') ?> required>
          </div>
          <input type="submit" class="btn btn-primary col-8" value="Change Password" name="login" id="submit" <?php echo ($is_done ? 'disabled' : '') ?>>
          <input type="clear" class="btn btn-success col-8 mt-2" value="Create new account" name="new account" id="newAccoungBtn">
        </form>
      </div>
      <p class="mt-4 text-secondary small">
      <p class="d-inline">Current Time : </p>
      <p class="fw-bold d-inline" id="live-clock">00:00:00 </p>
      <p class="d-inline"> from Mumbai, India</p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
  <script>
    const input =
      function inputDisab() {

      }
    // password validation
    const submit = document.getElementById("submit");
    const passwordInput = document.getElementById("NewPass");
    const cpasswordInput = document.getElementById("cNewPass");

    const regixPassword = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$!%*?&])[A-Za-z\d@#$!%*?&]{6,}$/;

    submit.addEventListener('click', validate);

    function validate(event) {
      const password = passwordInput.value;
      const cpassword = cpasswordInput.value;

      // 1. Password Matching
      if (password != cpassword) {
        alert("Passwords Password must be same to same.");
        event.preventDefault();
        return;
      }
      // 1. Regex Validation
      if (!regixPassword.test(password)) {
        alert("Password must be at least 8 characters with uppercase, lowercase, number and special character.")
        event.preventDefault();
        return;
      }
    };

    const logAccoungBtn = document.getElementById('newAccoungBtn');
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