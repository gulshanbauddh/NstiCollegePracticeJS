<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="components/logo.png" type="image/x-icon">
  <title>Nook | User Dashboard</title>
  <link href="/gulshan/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="components/style.css">

  <style>
    body {
      background-color: #f4f7f6;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .hero-gradient {
      background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
      color: white;
      padding: 80px 0;
      border-bottom-left-radius: 40px;
      border-bottom-right-radius: 40px;
    }

    .profile-section {
      margin-top: -60px;
    }

    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }

    .dev-badge {
      background: #eef2ff;
      color: #4338ca;
      padding: 5px 15px;
      border-radius: 20px;
      font-size: 0.9rem;
      font-weight: 600;
    }
  </style>
</head>

<body>
  <?php
  session_start();
  require 'components/_nav.php';
  require 'components/_connaction.php';
  if ($_SESSION['islogin'] != true) {
    header("location:index.php");
    exit;
  }
  ?>
  <header class="hero-gradient text-center">
    <div class="container">
      <h1 class="fw-bold fs-1">ABOUT DEVELOPER</h1>
      <p class="opacity-75 fs-4">Welcome to your personalized Nook Dashboard</p>
    </div>
  </header>

  <main class="container profile-section pb-5">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card p-4 p-md-5">
          <div class="row">
            <div class="col-md-5 border-end">
              <h4 class="text-primary mb-4">Meet the Developer</h4>
              <div class="mb-3">
                <h2 class="h3 mb-0">Gulshan Bauddh</h2>
                <span class="dev-badge">Full-Stack Developer</span>
              </div>
              <ul class="list-unstyled mt-4 text-secondary">
                <li class="mb-2"><strong>Academic:</strong> B.Tech in CSE (2023)</li>
                <li class="mb-2"><strong>Current Training:</strong> CITS Trainee</li>
                <li class="mb-2"><strong>Institute:</strong> NSTI Mumbai</li>
                <li class="mb-2"><strong>Trade:</strong> CSA (Computer Software Applications)</li>
              </ul>
            </div>

            <div class="col-md-7 ps-md-5 mt-4 mt-md-0">
              <h4 class="text-primary mb-4">About Project: Nook</h4>
              <p class="text-muted leading-relaxed">
                <strong>Nook</strong> is a streamlined platform designed to bridge the gap between parties for rental and matching services.
                Built with a focus on simplicity and efficiency, the platform facilitates direct connections without handling financial transactions internally.
              </p>
              <h6 class="mt-4 fw-bold">Technical Stack Used:</h6>
              <div class="d-flex flex-wrap gap-2 mt-2">
                <span class="badge bg-dark">PHP</span>
                <span class="badge bg-dark">MySQL</span>
                <span class="badge bg-dark">JavaScript</span>
                <span class="badge bg-dark">Bootstrap 5</span>
                <span class="badge bg-dark">HTML5/CSS3</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="text-center py-4">
    <small class="text-muted">&copy; 2026 Nook Project | Crafted by Gulshan Bauddh</small>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>