<?php

class droid
{
  public $type = "";
  
  function __construct($setType) {
    $this->type = $setType;
  }
}

$droid1 = new droid('astromech');
$droid2 = new droid('protocol');

print_r( $droid1 );