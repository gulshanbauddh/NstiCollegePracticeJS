<?php
$email = 'Gulshan@gmail.com';
if (preg_match("/^[\w\.-]+@[\w\.-]+\.\w+$/", $email)) {
  echo "Valid email";
} else {
  echo "Invalid email";
}
?>