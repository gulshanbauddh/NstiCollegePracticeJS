<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to oops</title>
</head>

<body>
  <h1>Welcome to oops-</h1>
  <?php
  class Player
  {
    // Properties (Variables)
    public $name;
    public $speed = 3;
    public $run=false;

    // Methods
    function set_name($name)
    {
      $this->name = $name;
    }
    function get_name()
    {
      return $this->name;
    }
    function run() {
      
    }
  }
  echo "Lets understand OOPs Using GTA Vice City<br>";
  //  Player 1
  $player1 = new Player();

  $player1->set_name("Gulshan");
  echo $player1->get_name();

  // Player 2
  $player2 = new Player();
  $player2->set_name("Kajal");
  echo $player2->get_name();
  ?>
</body>

</html>