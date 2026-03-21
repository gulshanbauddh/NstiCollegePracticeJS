<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="/gulshan/node_modules/bootstrap/dist/css/bootstrap.min.css" />
</head>

<body>
  <?php //Nav bar Start
  require 'components/_connaction.php';
  require 'components/_nav.php';
  global $conn;
  session_start();
  // $_SESSION['found']=false;
  ?>
  <!-- login -->
  <div class="container">
    <div class="container mt-5">
      <h2>Login using Username and Password</h2>
      <form method="post" action="">
        <div class="mb-3">
          <label for="usernameLogin" class="form-label">User name</label>
          <input type="text" class="form-control" id="usernameLogin" aria-describedby="emailHelp" name="usernameLogin" required>
        </div>
        <div class="mb-3">
          <label for="passwordLogin" class="form-label">Password</label>
          <input type="text" class="form-control" id="passwordLogin" name="passwordLogin" required>
        </div>

        <input type="submit" class="btn btn-primary" value="Login" name="login">
      </form>
    </div>
  </div>
  <?php
  if (isset($_POST['login']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameLogin = $_POST['usernameLogin'];
    $passwordLogin = $_POST['passwordLogin'];
    $sql = "SELECT `username`,`password` FROM `user`;";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    while ($num > 0) {
      $row = mysqli_fetch_assoc($result);
      if($usernameLogin==$row['username'] && $passwordLogin==$row['password']){
      $_SESSION['found']=true;
      // print($_SESSION['found']);
      // print_r($_SESSION['found']);
      // echo ($_SESSION['found']);
      // printf ($_SESSION['found']);
      header("location:index.php");
      }
      $num--;
    }
  }
  ?>
  <script src="/gulshan/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>