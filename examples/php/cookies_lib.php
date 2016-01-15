<?php

// See if we should clear cookies
if (isset($_GET['clear'])) {
  clearCookies();
}

// Set a new cookie
$value = getWord() . "-" . getWord() . "-" . getWord();
$cookieName = "CS337-Test-Cookie-" . time();
$expiration = time()+3600;
setcookie($cookieName, $value, $expiration);

function clearCookies() {
  foreach($_COOKIE as $cookieName => $v) {
    // Set expiration to some time in the past
    $expiration = time() - 3600;
    setcookie($cookieName, null, $expiration);
  }
}

// Get a random word from a wordlist
function getWord() {
  $numWords = 31860;
  $randWordRow = rand(1, $numWords);
  $wordlist = fopen('wordlist.txt', 'r');
  $i = 0;
  while ($i < $randWordRow) {
    $word = fgets($wordlist);
    $i++;
  }
  chop($word);
  $word = trim($word);
  return $word;
}