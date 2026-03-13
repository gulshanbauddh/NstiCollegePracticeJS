<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET method</title>
</head>

<body>
  <h1>GET Method</h1>
  <h2>Form submit using GET Method :</h2>
  <form action="getMethod.php" method="get">
    <label for="name">Name : </label>
    <input type="text" name="name" id="name"> <br><br>
    <label for="name">Age : </label>
    <input type="number" name="age" id="age"> <br><br>
    <input type="submit" value="Submit">
  </form>
  <hr>
  <h2>Form submit using POST Method :</h2>
  <form action="getMethod.php" method="POST">
    <label for="name">Name : </label>
    <input type="text" name="name" id="name"> <br><br>
    <label for="name">Age : </label>
    <input type="number" name="age" id="age"> <br><br>
    <input type="submit" value="Submit">
  </form>
</body>

</html>