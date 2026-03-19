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
  <!-- Modal Start  -->
  <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h1 class='modal-title fs-5' id='exampleModalLabel'>Edit iNote</h1>
          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        <div class='modal-body'>
          <form method='POST' action='008_DB_crudMiniProject.php' name="editNoteSubmit">
            <input type="hidden" name="editNoteSno" id="editNoteSno">
            <div class="mb-3">
              <label for="noteTitle" class="form-label">Note Title</label>
              <input type="text" class="form-control" id="editNoteTitle" aria-describedby="emailHelp" name="editNoteTitle">
            </div>
            <div class="mb-3">
              <label for="noteDesc" class="form-label">Note Description</label>
              <input type="text" class="form-control" id="editNoteDesc" name="editNoteDesc">
            </div>
            <div class='modal-footer'>
              <input type='submit' class='btn btn-primary' value="Save changes" name="editNoteSubmit">
              <input type="button" class='btn btn-secondary' data-bs-dismiss='modal' value="Close">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>


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
  $editCon = false;
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
  if (isset($_POST['addNote'])) {
    $noteTitle = $_POST['noteTitle'];
    $noteDescription = $_POST['noteDesc'];
    $insQuery = "INSERT INTO `inote` (`title`, `description`) VALUES ('" . $noteTitle . "', '" . $noteDescription . "');";
    $insState = mysqli_query($conn, $insQuery);
    // Note Add
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
  // Edit
  if (isset($_POST['editNoteSubmit'])) {
    $editNote = $_POST['editNoteTitle'];
    $editDesc = $_POST['editNoteDesc'];
    // $editQuery = "UPDATE `inote` SET `title` = $editNote, `description` = $editDesc WHERE `inote`.`sNo` = 20;";
    // mysqli_query($conn, $editQuery);

    // if ($editCon) {
    //   echo "<div class='successAddNote'>
    // <div class='alert alert-success alert-dismissible fade show' role='alert'>
    //   <strong>Succes!</strong> Note edit Succesfull.
    //   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    // </div></div>";
    // }
  }
  ?>
  <!-- Alert Add Note End -->




  <!-- Input Area Start -->
  <div class="container mt-5">
    <h2>Add a Note to iNote</h2>
    <form method="post" action="">
      <div class="mb-3">
        <label for="noteTitle" class="form-label">Note Title</label>
        <input type="text" class="form-control" id="noteTitle" aria-describedby="emailHelp" name="noteTitle">
      </div>
      <div class="mb-3">
        <label for="noteDesc" class="form-label">Note Description</label>
        <input type="text" class="form-control" id="noteDesc" name="noteDesc">
      </div>

      <input type="submit" class="btn btn-primary" value="Add Note" name="addNote">
    </form>
  </div>
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
            <td class='d-none'>" . $insResult['sNo'] . "</td>
            <th scope='row'>" . $sno++ . "</th>
            <td>" . $insResult['title'] . "</td>
            <td>" . $insResult['description'] . "</td>
            <td><button type='button' class='btn btn-primary btn-sm btnEdit' data-bs-toggle='modal_Gulshan' data-bs-target='#exampleModal' name='".$insResult['sNo']."'>Edit</button> <button type='button' class='btn btn-danger btn-sm btnDelete'>Delete</button>
            </td>
          </tr>";
          $rows--;
        }
        ?>
      </tbody>
    </table>
  </div>
  <!-- Table end -->



  <script>
    // Delete
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
    // Edit
    const btnEdit = document.querySelectorAll(".btnEdit");
    btnEdit.forEach((btn) => {
      btn.addEventListener('click', (el) => {
        a = el.target.parentNode.parentNode;
        var snoD = a.getElementsByTagName("td")[0].innerText;
        c=a.getElementsByTagName("td")[0].innerText;
        console.log(el.target);
        console.log(el.target.id);
      });
      // $(`#Modal`).modal('toggle');
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
  <script src="/gulshan/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>