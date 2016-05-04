<?php
header('Content-Type: application/json');

$var = new StdClass();
$var->name = "Mark";
$var->phone = "626-1541";
$var->mettings = array("mtg1", "mtg2", "mtg3");
$var->data = new StdClass();
$var->data->value1 = "abc";
$var->data->value2 = "xyz";

$json_var = json_encode($var, JSON_PRETTY_PRINT);

pr( $json_var );







function pr($o) {
    print_r($o);
    echo "\n";
}