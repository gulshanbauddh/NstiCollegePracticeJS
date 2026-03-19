<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Display Form DB</title>
  <link rel="stylesheet" href="/gulshan/node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <style>
    /* .successAddNote{
      display: none;
    } */
  </style>
</head>

<body>
  <!-- Nav bar Start   -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">iNotes</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-disabled="true">Contuct us</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- Nav bar End   -->

  <!-- Alert Add Note Start -->
  <?php
  $insState = '';
  $noteTitle = '';
  $noteDescription = '';
  $delCon = false;
  // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'inotedb';
  $conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $database
  );
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $noteTitle = $_POST['noteTitle'];
    $noteDescription = $_POST['noteDesc'];
    $insQuery = "INSERT INTO `inote` (`title`, `description`) VALUES ('" . $noteTitle . "', '" . $noteDescription . "');";
    $insState = mysqli_query($conn, $insQuery);
    if ($insState) {
      echo "<div class='successAddNote'>
    <div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>Succes!</strong> Note add Succesfull.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div></div>";
    } else {
      die("Database not connected.");
    }
  }
  ?>
  <?php

  // Delete
  if (isset($_GET['delete'])) {
    $snD = $_GET['delete'];
    $delQuery = "DELETE FROM `inote` WHERE `sNo` = $snD";
    $delCon = mysqli_query($conn, $delQuery);
    $delCon = true;
  }
  if ($delCon) {
    echo "<div class='successAddNote'>
    <div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>Succes!</strong> Note deleted Succesfull.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div></div>";
  }
  ?>
  <!-- Alert Add Note End -->

  <!-- Input Area Start -->
  <div class="container mt-5">
    <h2>Add a Note to iNote</h2>
    <form method="post" action="008_DB_crudMiniProject.php">
      <div class="mb-3">
        <label for="noteTitle" class="form-label">Note Title</label>
        <input type="text" class="form-control" id="noteTitle" aria-describedby="emailHelp" name="noteTitle">
      </div>
      <div class="mb-3">
        <label for="noteDesc" class="form-label">Note Description</label>
        <input type="text" class="form-control" id="noteDesc" name="noteDesc">
      </div>

      <button type="submit" class="btn btn-primary">Add Note</button>
    </form>
  </div>
  <?php

  ?>
  <!-- Input Area Stop -->


  <!-- Table start -->
  <div class="container mt-3 ">
    <table class="table table-striped table-hover table-bordered">
      <thead class="table-dark ">
        <tr>
          <th scope="col">S.no</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $fullTableQuert = "SELECT * FROM `inote` Where `title`!='' OR `description`!='';";
        $fullTable = mysqli_query($conn, $fullTableQuert);
        $rows = mysqli_num_rows($fullTable);
        $sno = 1;
        while ($rows > 0) {
          $insResult = mysqli_fetch_assoc($fullTable);
          echo "<tr>
          <td class='d-none' >" . $insResult['sNo'] . "</td>
          <th scope='row'>" . $sno++ . "</th>
          <td>" . $insResult['title'] . "</td>
          <td>" . $insResult['description'] . "</td>
          <td><button type='button' class='btn btn-primary btn-sm btnEdit' data-bs-toggle='modal' data-bs-target='#exampleModal'>Edit</button> <button type='button' class='btn btn-danger btn-sm btnDelete'>Delete</button>
          </td>
        </tr>";
          $rows--;
        }
        ?>

      </tbody>
    </table>
  </div>
  <!-- Table end -->

  <!-- Modal Start -->
  <div class='container'>
    <!-- Button trigger modal -->
    <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h1 class='modal-title fs-5' id='exampleModalLabel'>Edit iNote</h1>
            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
          </div>
          <!-- -------------------- Start ------------------------------ -->
          <!-- -------------------- Start ------------------------------ -->
          <div class='modal-body'>
            <form method="post" action="008_DB_crudMiniProject.php">
              <div class="mb-3">
                <label for="noteTitle" class="form-label">Note Title</label>
                <input type="text" class="form-control" id="editNoteTitle" aria-describedby="emailHelp" name="editNoteTitle">
              </div>
              <div class="mb-3">
                <label for="noteDesc" class="form-label">Note Description</label>
                <input type="text" class="form-control" id="editNoteDesc" name="editNoteDesc">
              </div>
            </form>
          </div>
          <!-- ------------------------ End --------------------------- -->
          <!-- ------------------------ End --------------------------- -->
          <div class='modal-footer'>
            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
            <button type='button' class='btn btn-primary'>Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal end -->
  <script src="/gulshan/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const btnDelete = document.querySelectorAll(".btnDelete");
    btnDelete.forEach((btn) => {
      btn.addEventListener('click', (el) => {
        a = el.target.parentNode.parentNode;
        var snoD = a.getElementsByTagName("td")[0].innerText;
        // console.log(value);
        if (confirm("Are you sure you want to delete this note!")) {
          window.location = `008_DB_crudMiniProject.php?delete=${snoD}`;
        }
      });
    });

    // auto alart remove
    setTimeout(function() {
      var alert = document.querySelector('.alert');
      if (alert) {
        var bsAlert = new bootstrap.Alert(alert);
        bsAlert.close();
      }
    }, 3000);
  </script>
</body>

</html>