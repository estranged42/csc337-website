<?php
// Open a file handle to 'file.txt'
$fileHandle = fopen('file.txt', 'r');

// Read one line from the $fileHandle
$aLine = fgets($fileHandle);

// Read another line from the $fileHandle
$anotherLine = fgets($fileHandle);

echo $anotherLine;