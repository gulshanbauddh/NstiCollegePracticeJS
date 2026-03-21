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
  include 'components/_connaction.php';
  require 'components/_nav.php';
  ?>
  <!-- Signup -->
  <div class="container">
    <div class="container mt-5">
      <h2>Create account</h2>
      <form method="post" action="">
        <div class="mb-3">
          <label for="usernameSign" class="form-label">User name</label>
          <input type="text" class="form-control" id="usernameSign" aria-describedby="emailHelp" name="usernameSign">
        </div>
        <div class="mb-3">
          <label for="passwordSign" class="form-label">Password</label>
          <input type="text" class="form-control" id="passwordSign" name="passwordSign">
        </div>

        <input type="submit" class="btn btn-primary" value="Add Note" name="addNote">
      </form>
    </div>
  </div>
  <script src="/gulshan/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>