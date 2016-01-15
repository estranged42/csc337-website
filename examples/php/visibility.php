<?php

ini_set('display_errors', 'on');

class droid
{
  protected $name = "";
  
  public function __construct($setName) {
    $this->name = $setName;
  }
  
  public function status() {
    echo "I'm {$this->name} the " 
          . get_class($this) . ".\n";
  }
}

class astromechDroid extends droid {
  public function pilot() {
    return "Zzzooooooom!";
  }
  
  public function description() {
    $desc = "Astromech Droid: ";
    $desc .= $this->name;
    return $desc;
  }
}

$r2 = new astromechDroid("R2D2");
echo $r2->description() . "\n";

echo $r2->name . "\n";
