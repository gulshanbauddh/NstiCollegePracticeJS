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
      "\nScholarShip:" . $this->fee * 12 . "
  ";
  }
  // Marksheet
  function marksheet()
  {
    echo "
  \nName:" . $this->name . "
  \nClass:" . $this->class . "
  \nRoll no:" . $this->roll . "
  \nTotal-Mark:" . $this->mark . "
  \nResult:" . $this->result . "
  ";
  }
}
echo "\n";
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
echo "\nScholarship";
$student1->scholar();

$student2 = new student();
