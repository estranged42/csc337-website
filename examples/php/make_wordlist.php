<?php

$fh = fopen('dictionary_english.txt', 'r');
$wordlist = fopen('wordlist.txt', 'w');

while($word = fgets($fh)) {
  if (rand(1, 5) != 1) {
    continue;
  }
  
  if (strlen($word) > 10) {
    continue;
  }

  if (strlen($word) < 4) {
    continue;
  }

  if (strpos($word, "'") !== false) {
    continue;
  }
  
  fprintf($wordlist, $word);
}

close($fh);
close($wordlist);