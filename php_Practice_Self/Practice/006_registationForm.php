<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration Form</title>
  <link rel="stylesheet" href="/gulshan/node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <style>
    body {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* GLASS EFFECT CONTAINER */
    .form-container-main {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      padding: 2rem;
      margin: 1rem;
      /* Mobile par full width, Desktop par 50% */
      width: 100%;
      max-width: 800px;
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #764ba2;
    }

    .btn-submit {
      background: #764ba2;
      border: none;
      padding: 10px 30px;
      transition: 0.3s;
    }

    .btn-submit:hover {
      background: #5a377d;
      transform: translateY(-2px);
    }

    /* Navbar Customization */
    .cusNav1 {
      border-radius: 0 1rem;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .searchInput {
        width: 100% !important;
        /* Mobile par search bar full width */
        margin-bottom: 10px;
      }

      .form-container-main {
        padding: 1.5rem;
      }
    }
  </style>
</head>

<body>
  <!-- Start NavBar -->
  <div class="container mt-3">
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-3 cusNav1 shadow-sm">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">My School</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link fw-bold active" href="#">Forms</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Services</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Admission</a></li>
                <li><a class="dropdown-item" href="#">Study Material</a></li>
                <li><a class="dropdown-item" href="#">Live Classes</a></li>
                <li><a class="dropdown-item" href="#">Our Vision</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search" style="width: auto;">
            <input class="form-control me-2 searchInput" type="search" placeholder="Search" style="width: 200px;">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </div>
  <!-- Start NavBar -->

  <!-- Form Start -->
  <div class="container d-flex justify-content-center align-items-center mt-3">
    <div class="form-container-main">
      <form method="post" action="006_registationForm.php" class="row g-3">
        <div class="text-center mb-3">
          <h2 class="fw-bold text-dark">Registration Form</h2>
          <p class="text-muted">Enter Student Details</p>
        </div>

        <div class="col-md-6">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">Father Name</label>
          <input type="text" class="form-control" name="fName" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">Mother Name</label>
          <input type="text" class="form-control" name="mName" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email" required />
        </div>
        <div class="col-12">
          <label class="form-label">Address</label>
          <input type="text" class="form-control" placeholder="NSTI Mumbai, Maharashtra" name="address" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">City</label>
          <input type="text" class="form-control" name="city" required />
        </div>
        <div class="col-md-4 col-6">
          <label class="form-label">State</label>
          <input class="form-control" name="state" required />
        </div>
        <div class="col-md-2 col-6">
          <label class="form-label">Pin</label>
          <input type="number" class="form-control" name="pinCode" required />
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" required />
            <label class="form-check-label" for="gridCheck">Accepting Terms and Conditions.</label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn text-white btn-submit fw-bold w-100">Submit</button>
        </div>
      </form>
    </div>
  </div>
  <!-- Form Start -->

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Variable
    $name = $_POST['name'];
    $fName = $_POST['fName'];
    $mName = $_POST['mName'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pinCode = $_POST['pinCode'];
    // Connection
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'school';
    $conn = mysqli_connect($servername, $username, $password, $database);
    if ($conn) {
      $insQuert = "INSERT INTO `student`(`NAME`,`fName`,`mName`,`email`,`adds`,`city`,`state`,`pinCode`) VALUES( '$name', '$fName', '$mName', '$email', '$address', '$city', '$state','$pinCode');";
      mysqli_query($conn, $insQuert);
    }

    echo "<div class='text-center text-white'> Name: " . $name . "<br>Father name: " . $fName . "<br>Mother name: " . $mName . "<br>Email: " . $email . "</div>";
  }
  /*
 "CREATE TABLE `student` (
                          `id` INT(11) NOT NULL AUTO_INCREMENT,
                          `NAME` VARCHAR(100) NOT NULL,
                          `fName` VARCHAR(100) NOT NULL,
                          `mName` VARCHAR(100) NOT NULL,
                          `email` VARCHAR(100) NOT NULL,
                          `adds` TEXT NOT NULL,
                          `city` VARCHAR(50) NOT NULL,
                          `state` VARCHAR(50) NOT NULL,
                          `pinCode` VARCHAR(10) NOT NULL,
                          `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
                          PRIMARY KEY (`id`)
                        );"
*/
  ?>
  <script src="/gulshan/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>