<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registation Form</title>
  <link
    rel="stylesheet"
    href="/gulshan/node_modules/bootstrap/dist/css/bootstrap.min.css" />
</head>

<body class="bg-secondary-subtle">
  <!-- Nav Bar Start -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
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
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">
            Search
          </button>
        </form>
      </div>
    </div>
  </nav>
  <!-- Nav Bar End -->
  <!-- Form Start -->
  <div class="container mt-3">
    <form method="post" action="006_afterSuccesReg.php" class="row g-3 p-4 m-3 bg-dark-subtle rounded">
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
      <div class="col-md-4">
        <label for="inputState" class="form-label">State</label>
        <input id="inputState" class="form-control" name="state" required />
      </div>
      <div class="col-md-2">
        <label for="inputPin" class="form-label">Pin</label>
        <input type="number" class="form-control" id="inputPin" name="pinCode" required />
      </div>
      <!-- <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck" name="check" required/>
          <label class="form-check-label" for="gridCheck">
            I am not robot
          </label>
        </div>
      </div> -->
      <div class="col-12">
        <input type="submit" class="btn btn-primary" value="Submit" />
      </div>
    </form>
  </div>
  <!-- Form End -->
  <script src="/gulshan/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>