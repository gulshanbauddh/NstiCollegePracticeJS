<?php
session_start();
if ($_SESSION['found']!=true) {
  // $_SESSION['found']=false;
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="/gulshan/node_modules/bootstrap/dist/css/bootstrap.min.css" />
</head>

<body>
  <?php //Nav bar Start
  include 'components/_connaction.php';
  require 'components/_nav.php';
  ?>
  <!-- Signup -->
  <div class="container">
    <h1>Signup Succesfully.</h1>
  </div>
  <script src="/gulshan/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>