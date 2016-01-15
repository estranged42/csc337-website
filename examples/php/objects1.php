<?php

class droid
{
  $type = "";
  
  function __construct($setType) {
    $this->type = $setType;
  }
}

$droid1 = new droid('astromech');
$droid2 = new droid('protocol');

$droid1->setName('R2D2');
echo $droid1->name;