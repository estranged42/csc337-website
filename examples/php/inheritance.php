<?php

class droid
{
  private $name = "";
  
  public function __construct($setName) {
    $this->name = $setName;
  }
  
  public function status() {
    echo "I'm {$this->name} the " 
          . get_class($this) . ".\n";
  }
}

class protocolDroid extends droid {
  public function translate() {
    return "Beep boop";
  }
}

class astromechDroid extends droid {
  public function pilot() {
    return "Zzzooooooom!";
  }
}

$c3po = new protocolDroid("C3PO");
$c3po->status();

$r2 = new astromechDroid("R2D2");
$r2->status();
