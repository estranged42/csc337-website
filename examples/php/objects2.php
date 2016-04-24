<?php

/**
 * Baseball
 *    dia: 7.5cm
 *
 * Soccer:
 *    dia: 22cm
 *    psi: 12
 *
 * Basketball:
 *    dia: 24cm
 *    psi: 9
 *
 */

error_reporting(E_ALL);
ini_set('display_errors', 'on');

class ball {
    protected $diameter;
    
    public function getDiameter() {
        return $this->diameter;
    }
}

class inflataBall extends ball {
    protected $targetPSI = 0;
    protected $curPSI = 0;

    public function inflate($psi) {
        if ($this->curPSI < $this->targetPSI) {
            echo "Pump\n";
            $this->curPSI = $this->curPSI + $psi;
            if ($this->curPSI > $this->targetPSI) {
                $this->curPSI = $this->targetPSI;
            }
        } else {
            echo "Full\n";
        }
    }
}

class baseball extends ball {
    public function __construct() {
        $this->diameter = "7.5cm";
    }
}

class soccerball extends inflataBall {  
    public function __construct() {
        $this->diameter = "22cm";
        $this->targetPSI = 12;
    }
}

class basketball extends inflataBall {
    public function __construct() {
        $this->diameter = "24cm";
        $this->targetPSI = 9;
    }
}

class pump {
    public static function inflate(inflataBall $ball) {
        $ball->inflate(5);
    }
}

$b = new basketball();
pump::inflate($b);
pump::inflate($b);
pump::inflate($b);
pump::inflate($b);
