<?php
  $name='Gulshan';
  if(preg_match("/^[a-zA-Z]+$/", $name)){
    echo "Valid name";
  } else {
    echo "Invalid name";
  }
?>