<?php
  $mobile="7348248943";
  if(preg_match("/^[0-9]{10}$/", $mobile)){
    echo "Valide mobile number.";
  } else{
    echo "Invalid mobile number.";
  }
?>