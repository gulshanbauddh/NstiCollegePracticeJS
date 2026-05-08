<?php
  $file=fopen("sample.txt","r");
  $content=fread($file, filesize("sample.txt"));
  echo $content;
  fclose($file);
?>