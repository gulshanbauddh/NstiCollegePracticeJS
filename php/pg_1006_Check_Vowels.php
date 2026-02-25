<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vowels and consonants</title>
</head>
<body>
  <h1>Vowels and consonants</h1>
  <form method="post">
    Enter Any Alphabet: <br><br><input type="text" name="alpha"><br><br>
    <input type="submit" name='submit' value="Check"><br><br>
  </form>
  <?php
  if(isset($_POST['submit'])){
    $alpha=$_POST['alpha'];
    $alpha=strtolower($alpha);

    switch ($alpha) {
      case 'a':
      case 'e':
      case 'i':
      case 'o':
      case 'u':
        Echo "<b>".strtoupper($alpha)." & ".strtolower($alpha)."</b> : is Vowels.";
        break;
      default:
        if(is_numeric($alpha)){ 
          Echo "Invalit! Alphabet";
          } else {
          Echo "<b>".strtoupper($alpha)." & ". strtolower($alpha)."</b> : is Consonants";  
        }
        break;
    }
  }
  ?>
</body>
</html>