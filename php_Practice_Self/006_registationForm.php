<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registation Form</title>
  <link
    rel="stylesheet"
    href="/gulshan/node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <style>
    /* Thoda extra styling layout ko premium banane ke liye */
    body {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      /* Gradient background */
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .form-container {
      background: rgba(255, 255, 255, 0.9);
      /* Glass effect */
      backdrop-filter: blur(10px);
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
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

    .navbar {
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .formContainer {
      display: flex;
      justify-content: center;
      align-items: center;
      height: auto;
    }

    form {
      width: 50vw;
    }

    .cusNav {
      border-radius: 1rem 0rem;
    }

    .cusNav1 {
      border-radius: 1rem 0rem;
    }

    .searchInput {
      width: 15rem;
    }

    .searchInputM {
      justify-content: flex-end;
    }
  </style>
</head>

<body>
  <!-- Nav Bar Start -->
  <div class="mx-auto p-4 cusNav">
    <nav class="cusNav1 navbar navbar-expand-lg bg-body-tertiary p-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">My School</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Forms</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Addmision</a></li>
                <li><a class="dropdown-item" href="#">Study matarial</a></li>
                <li><a class="dropdown-item" href="#">Live Classes</a></li>
                <li><a class="dropdown-item" href="#">Notification</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Gulshan Bauddh</a>
            </li>
          </ul>
          <form class="d-flex text-right searchInputM" role="search">
            <input class="form-control me-2 searchInput" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </div>

  <!-- Nav Bar End -->
  <!-- Form Start -->
  <div class="container formContainer mt-5">
    <form method="post" action="006_afterSuccesReg.php" class="row g-3 p-4 m-3 bg-dark-subtle rounded">
      <div class="text-center ">
        <h1 class="fw-bold text-dark">Registation Form-</h1>
        <p class="text-muted">Enter Student Details</p>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Name</label>
        <input
          type="text"
          class="form-control"
          id="inputPassword4"
          name="name" required />
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Father Name</label>
        <input
          type="text"
          class="form-control"
          id="inputPassword4"
          name="fName" required />
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Mother Name</label>
        <input
          type="text"
          class="form-control"
          id="inputPassword4"
          name="mName" required />
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input
          type="email"
          class="form-control"
          id="inputEmail4"
          name="email" required />
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input
          type="text"
          class="form-control"
          id="inputAddress"
          placeholder="NSTI mumbai, mumbai, Maharastra " name="address" required />
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity" name="city" required />
      </div>
      <div class="col-6">
        <label for="inputState" class="form-label">State</label>
        <input id="inputState" class="form-control" name="state" required />
      </div>
      <div class="col-md-2">
        <label for="inputPin" class="form-label">Pin</label>
        <input type="number" class="form-control" id="inputPin" name="pinCode" required />
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck" name="check" required />
          <label class="form-check-label" for="gridCheck">
            I am not robot
          </label>
        </div>
      </div>
      <div class="col-12">
        <input type="submit" class="btn text-white btn-submit fw-bold w-100" value="Submit" />
      </div>
    </form>
  </div>
  <!-- Form End -->
  <script src="/gulshan/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>