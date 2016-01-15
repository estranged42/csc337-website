<?php

// Open our CSV data file
$bookFile = fopen('books.csv', 'r');

// Parse each line of the book file into an array element.
$books = array();
while ($line = fgets($bookFile)) {
  $bookArray = str_getcsv($line);
  $bookObj = new StdClass();
  $bookObj->title = $bookArray[0];
  $bookObj->author = $bookArray[1];
  $books[] = $bookObj;
}

// Encode our data as JSON
echo json_encode($books);

