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
    $fullname = $_POST['fullname'];
    $fathername = $_POST['fathername'];
    $dob = $_POST['dob'];
    $mothername = $_POST['mothername'];
    $passwordSign = $_POST['passwordSign'];
    $cpasswordSign = $_POST['cpasswordSign'];
    $address = $_POST['address'];
    if (empty($usernameSign) || empty($passwordSign) || empty($fullname) || empty($fathername) || empty($dob) || empty($mothername) || empty($address) || empty($cpasswordSign)) {
      $_SESSION['signStatus'] = false;
    } else {
      $sql = "INSERT INTO `user` (`username`, `fullname`, `fathername`, `mothername`, `dob`, `password`, `address`) VALUES ('$usernameSign', '$fullname', '$fathername', '$mothername', '$dob', '$passwordSign', '$address');";
      $_SESSION['signStatus'] = true;
      $result = mysqli_query($conn, $sql);

      if (!$result) {
        die("SQL Error: " . mysqli_error($conn));
      }
    }
    header("location:signup.php");
    exit;
  }
  ?>
  <!-- Signup -->
  <div class="container mb-5">
    <div class="container mt-5">
      <h2>Create account</h2>
      <form method="post" action="">
        <div class="mb-3">
          <label for="usernameSign" class="form-label">User name <sup>*Used for login must be remamber</sup> </label>
          <input type="text" class="form-control" id="usernameSign" name="usernameSign">
        </div>
        <div class="mb-3">
          <label for="fullname" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="fullname" name="fullname">
        </div>

        <div class="mb-3">
          <label for="fathername" class="form-label">Father name</label>
          <input type="text" class="form-control" id="fathername" name="fathername">
        </div>
        <div class="mb-3">
          <label for="mothername" class="form-label">Mother name</label>
          <input type="text" class="form-control" id="mothername" name="mothername">
        </div>
        <div class="mb-3 col-2">
          <label for="dob" class="form-label">DOB</label>
          <input type="date" class="form-control" id="dob" name="dob">
        </div>

        <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <textarea rows="4" class="form-control" id="address" name="address"></textarea>
        </div>
        <div class="mb-3">
          <label for="passwordSign" class="form-label">Password</label>
          <input type="text" class="form-control" id="passwordSign" name="passwordSign">
        </div>
        <div class="mb-3">
          <label for="cpasswordSign" class="form-label">Confirm Password</label>
          <input type="text" class="form-control" id="cpasswordSign" name="cpasswordSign">
        </div>

        <input type="submit" class="btn btn-primary" id="submit" value="Signup" name="signup">
      </form>
    </div>
  </div>
  <script src="/gulshan/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // const submit = document.getElementById("submit");
    // const passwordInput = document.getElementById("passwordSign");
    // const cpasswordInput = document.getElementById("cpasswordSign");
    // const regixPassword = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$!%*?&])[A-Za-z\d@#$!%*?&]{8,}$/;

    // submit.addEventListener('click', (event) => {
    //   const password = passwordInput.value;
    //   const cpassword = cpasswordInput.value;

    //   // 1. Password Matching
    //   if (password !== cpassword) {
    //     alert("Passwords Don't Match");
    //     event.preventDefault();
    //   }
    //   // 1. Regex Validation
    //   if (!regixPassword.test(password)) {
    //     alert("Password must be at least 8 characters with uppercase, lowercase, number and special character.")
    //     event.preventDefault();
    //     return;
    //   }

    // });
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