<?php
session_start();
if ($_SESSION['islogin'] == false) {
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="components/style.css">
  <link rel="stylesheet" href="/gulshan/node_modules/bootstrap/dist/css/bootstrap.min.css" />
</head>

<body>
  <?php //Nav bar Start
  include 'components/_connaction.php';
  require 'components/_nav.php';
  ?>
  <!-- Signup -->
  <div class="container text-center mt-5">
    <div class="main-container">
      <div class="welcome-card">
        <div class="user-avatar">JD</div>

        <h1 class="display-5 fw-bold text-dark">Welcome Back, John Doe!</h1>
        <p class="text-muted fs-5">We are glad to see you again. Here is what's happening with your account today.</p>

        <div class="row g-3">
          <div class="col-md-4">
            <div class="stat-box">
              <h3 class="fw-bold mb-0">12</h3>
              <small class="text-muted">Active Projects</small>
            </div>
          </div>
          <div class="col-md-4">
            <div class="stat-box">
              <h3 class="fw-bold mb-0">85%</h3>
              <small class="text-muted">Task Completion</small>
            </div>
          </div>
          <div class="col-md-4">
            <div class="stat-box">
              <h3 class="fw-bold mb-0">4</h3>
              <small class="text-muted">New Messages</small>
            </div>
          </div>
        </div>

        <div class="mt-5 d-flex flex-column flex-sm-row justify-content-center gap-3">
          <button class="btn btn-primary btn-action shadow-sm">Go to Dashboard</button>
          <button class="btn btn-light btn-action shadow-sm">Account Settings</button>
          <button id="logout-btn" class="btn btn-logout-alt btn-action"><a href='logout.php'>Sign Out</a></button>
        </div>

        <p class="mt-5 text-secondary small">Last login: Today at 10:45 AM from Mumbai, India</p>
      </div>
    </div>
  </div>
  <script src="/gulshan/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const logoutBtn = document.getElementById('logout-btn');

    logoutBtn.addEventListener('click', function(event) {
      const response = confirm("Are you sure you want to logout?");

      if (!response) {
        event.preventDefault();
      }
    });
  </script>
</body>

</html>