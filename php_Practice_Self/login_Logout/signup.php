<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signup</title>
  <link rel="stylesheet" href="/gulshan/node_modules/bootstrap/dist/css/bootstrap.min.css" />
</head>

<body>
  <?php //Nav bar Start
  require 'components/_connaction.php';
  require 'components/_nav.php';
  global $conn;
  session_start();
  if (isset($_SESSION['signStatus'])) {
    if ($_SESSION['signStatus'] == true) {
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        <strong>Success!</strong> Account Created.</div>";
    } else {
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      <strong>Alert!</strong> Empty filed is not allows.</div>";
    }
    unset($_SESSION['signStatus']);
  }
  if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $usernameSign = $_POST['usernameSign'];
    $passwordSign = $_POST['passwordSign'];
    if (empty($usernameSign) || empty($passwordSign)) {
      $_SESSION['signStatus'] = false;
    } else {
      $sql = "INSERT INTO `user` (`username`, `password`) VALUES ('$usernameSign', '$passwordSign');";
      $result = mysqli_query($conn, $sql);
      $_SESSION['signStatus'] = true;
    }
    header("location:signup.php");
    exit;
  }
  ?>
  <!-- Signup -->
  <div class="container">
    <div class="container mt-5">
      <h2>Create account</h2>
      <form method="post" action="">
        <div class="mb-3">
          <label for="usernameSign" class="form-label">User name</label>
          <input type="text" class="form-control" id="usernameSign" name="usernameSign" required>
        </div>
        <div class="mb-3">
          <label for="passwordSign" class="form-label">Password</label>
          <input type="password" class="form-control" id="passwordSign" name="passwordSign" required>
        </div>

        <input type="submit" class="btn btn-primary" value="Signup" name="signup">
      </form>
    </div>
  </div>
  <script src="/gulshan/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // auto alart remove
    setTimeout(function() {
      var alert = document.querySelector('.alert');
      if (alert) {
        var bsAlert = new bootstrap.Alert(alert);
        bsAlert.close();
      }
    }, 5000);
  </script>
</body>

</html>