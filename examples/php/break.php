<?php
$numbers = range(0, 100);

$numEvens = 0;
foreach($numbers as $n) {
  echo $n . "\n";

  if ( ($n % 2) == 0 ) {
    $numEvens++;
  }

  if ($numEvens >= 5) {
    break;
  }
}
