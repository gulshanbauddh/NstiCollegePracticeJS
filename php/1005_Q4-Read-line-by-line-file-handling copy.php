<?php
$file = fopen("sample.txt", "r");
while (!feof($file)) {
  echo fgets($file);
}
fclose($file);
