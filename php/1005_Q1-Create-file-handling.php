<?php
  $file=fopen("sample.txt","w");
  $text="Hello, this is file handling in PHP";
  fwrite($file, $text);
  fclose($file);
  echo "File created and data write successfully.";
?>