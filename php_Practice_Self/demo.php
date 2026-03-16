<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Professional Registration Form</title>
  <link rel="stylesheet" href="/gulshan/node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <style>
    /* Thoda extra styling layout ko premium banane ke liye */
    body {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); /* Gradient background */
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .form-container {
      background: rgba(255, 255, 255, 0.9); /* Glass effect */
      backdrop-filter: blur(10px);
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
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
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">MY APP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-lg-8 form-container p-5">
        <div class="text-center mb-4">
          <h2 class="fw-bold text-dark">Registration Form</h2>
          <p class="text-muted">Please fill in your details to create an account</p>
        </div>

        <form method="post" action="006_afterSuccesReg.php" class="row g-4">
          <div class="col-md-6">
            <label class="form-label fw-semibold">Name</label>
            <input type="text" class="form-control" name="name" placeholder="John Doe" required />
          </div>

          <div class="col-md-6">
            <label class="form-label fw-semibold">Email Address</label>
            <input type="email" class="form-control" name="email" placeholder="example@mail.com" required />
          </div>

          <div class="col-md-6">
            <label class="form-label fw-semibold">Father's Name</label>
            <input type="text" class="form-control" name="fName" required />
          </div>
          <div class="col-md-6">
            <label class="form-label fw-semibold">Mother's Name</label>
            <input type="text" class="form-control" name="mName" required />
          </div>

          <div class="col-12">
            <label class="form-label fw-semibold">Address</label>
            <textarea class="form-control" name="address" rows="2" placeholder="Street, Area, etc." required></textarea>
          </div>

          <div class="col-md-5">
            <label class="form-label fw-semibold">City</label>
            <input type="text" class="form-control" name="city" required />
          </div>
          <div class="col-md-4">
            <label class="form-label fw-semibold">State</label>
            <select class="form-select" name="state" required>
              <option selected disabled value="">Choose...</option>
              <option>Maharashtra</option>
              <option>Uttar Pradesh</option>
              <option>Delhi</option>
            </select>
          </div>
          <div class="col-md-3">
            <label class="form-label fw-semibold">Pin Code</label>
            <input type="number" class="form-control" name="pinCode" required />
          </div>

          <div class="col-12">
            <div class="form-check border p-2 rounded bg-light">
              <input class="form-check-input ms-1" type="checkbox" id="gridCheck" name="check" required />
              <label class="form-check-label ms-2" for="gridCheck">
                I agree to the terms and conditions
              </label>
            </div>
          </div>

          <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-primary btn-submit text-white fw-bold w-100">
              SUBMIT REGISTRATION
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="/gulshan/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>