<?php
class student
{
  public string $name, $fName, $mName, $class, $subject;
  public float $roll, $mark, $fee;
  public bool $result;
  // Fee card
  function feeCard()
  {
    echo "
  \nName:" . $this->name . "
  \nClass:" . $this->class . "
  \nRoll no:" . $this->roll . "
  \nMonthly-Fee:" . $this->fee . "
  ";
  }
  // Scholarship card
  function scholar()
  {
     echo "
  \nName:" . $this->name . "
  \nClass:" . $this->class . "
  \nRoll no:" . $this->roll . "
  \nMonthly-Fee:" . $this->fee . 
  "\nScholarShip:" . $this-> fee*12 . "
  ";
  }
  // Marksheet
  function marksheet(){
        echo "
  \nName:" . $this->name . "
  \nClass:" . $this->class . "
  \nRoll no:" . $this->roll . "
  \nTotal-Mark:" . $this->mark . "
  \nResult:" . $this->result . "
  ";
  }
}

$student1= new student();