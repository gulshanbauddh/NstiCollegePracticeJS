<?php

use BcMath\Number;

echo "GULSHAN \n";
class calculator{
  public float $c, $d, $num;

  function sum(){
    $this->num=$this->c + $this->d;
    return $this->num;
  }
  function sub(){
    $this->num=$this->c - $this->d;
    return $this->num;
  }
  function mul(){
    $this->num=$this->c * $this->d;
    return $this->num;
  }
  function div(){
    $this->num=$this->c / $this->d;
    return $this->num;
  }
};

$cal1=new calculator();
$cal1->c=110;
$cal1->d=50;
echo "Sum is : ". $cal1->sum();
echo "\nSub is : ". $cal1->sub();
echo "\nMul is : ". $cal1->mul();
echo "\nDiv is : ". $cal1->div();
echo "\n";
?>