<?php

$dsn = 'mysql:dbname=fischerm_testing;host=localhost';
$user = 'youruser';
$password = 'xxxxxxxxxxxxxxxxxx';

$db = new PDO($dsn, $user, $password);

function pr($text) {
  echo "<pre>\n";
  print_r($text);
  echo "</pre>\n";
}

function formatPhone($input) {
  if(preg_match( '/^(\d{3})(\d{4})$/', $input,  $matches) ){
    $phone = sprintf("%s-%s", $matches[1], $matches[2]);
    return $phone;
  }
  return $input;
}