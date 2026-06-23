<?php
class student
{
  public string $name, $fName, $mName, $subject;
  public float $mark, $fee;
  public bool $result;
  public int $roll, $class;
  // Fee card
  function feeCard()
  {
    echo "
  \n<br>Name:" . $this->name . "
  \n<br>Class:" . $this->class . "
  \n<br>Roll no:" . $this->roll . "
  \n<br>Monthly-Fee:" . $this->fee . "
  ";
  }
  // Scholarship card
  function scholar()
  {
    echo "
  \n<br>Name:" . $this->name . "
  \n<br>Class:" . $this->class . "
  \n<br>Roll no:" . $this->roll . "
  \n<br>Monthly-Fee:" . $this->fee .
      "\n<br>ScholarShip:" . $this->fee * 12 . "
  ";
  }
  // Marksheet
  function marksheet()
  {
    echo "
  \n<br>Name:" . $this->name . "
  \n<br>Class:" . $this->class . "
  \n<br>Roll no:" . $this->roll . "
  \n<br>Total-Mark:" . $this->mark . "
  \n<br>Result:" . $this->result . "
  ";
  }
}
echo "\n<br>";
$student1 = new student();

$student1->name = 'Gulshan';
$student1->fName = 'Govind';
$student1->mName = 'Soniya';
$student1->subject = 'Science';
$student1->mark = 97.65;
$student1->fee = 12364;
$student1->result = true;
$student1->roll = 1234;
$student1->class = 12;
$student1->feeCard();
echo "\n<br>Scholarship";
echo "<strong><br><br>Scholar Ship</strong>";
$student1->scholar();

// $student2 = new student();
