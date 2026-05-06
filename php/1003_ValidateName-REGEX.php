<?php
  $name="Gulshan";
  if(preg_match("/^[a-zA-Z]+$/", $name)){
    echo "Valide name";
  } else{
    echo "Invalid name";
  }
?>