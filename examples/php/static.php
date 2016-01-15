<?php

ini_set('display_errors', 'on');

class util {
  
  const HOSTNAME = 'localhost';
  const CURRENT_VERSION = '1.7.10';

  public static function pow($base, $power) {
    $product = 1;
    for ($i = 0; $i < $power; $i++) {
      $product = $product * $base;
    }
    return $product;
  }
}

echo util::pow(2, 8) . "\n";

echo util::CURRENT_VERSION . "\n";
