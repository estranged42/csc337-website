<?php
$people = array(
  array("name" => "Mark Fischer","role" => "Instructor"),
  array("name" => "Margrit McIntosh","role" => "Student"),
  array("name" => "Michale Hirst","role" => "Student"),
);

// Echo only students
foreach($people as $p) {
  if ($p['role'] == "Instructor") {
    continue;
  }
  
  echo $p['name'] . "\n";
}
