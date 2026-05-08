<?php
// 1. Create and write-
echo "<strong>1. Create and write-</strong><br>";
$file = fopen("sample.txt", "w");
$text = "Hello, this is file handling in PHP";
fwrite($file, $text);
fclose($file);
echo "File created and data write successfully.";

// 2. Append Data to File-
echo "<strong><br><br>2. Append Data to File-</strong>";
$file = fopen("sample.txt", "a");
$text = "This is new append line.";
fwrite($file, $text);
fclose($file);
echo "<br>Data appended successfully.";

// 3. Read File line by line content
echo "<strong><br><br>3. Read File line by line content</strong><br>";
$file = fopen("sample.txt", "r");
while (!feof($file)) {
  echo fgets($file);
}
fclose($file);

// 4. Check file Exists
echo "<br><br><strong>4. Check file Exists-</strong><br>";
if (file_exists("sample.txt")) {
  echo "File exists";
} else {
  echo "File not exists";
}

// 5. Delete file
echo "<br><br><strong>5. Delete file-</strong><br>";
$filename = "sample.txt";

if (file_exists($filename)) {
  if (unlink($filename)) {
    echo "File deleted successfully.";
  } else {
    echo "Error: File could not be deleted.";
  }
} else {
  echo "File does not exist, so it cannot be deleted.";
}
