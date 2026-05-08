<?php
  $file=fopen("sample.txt","a");
  $text="<br>This is new append line.";
  fwrite($file,$text);
  fclose($file);
  echo "Data appended successfully.";
?>