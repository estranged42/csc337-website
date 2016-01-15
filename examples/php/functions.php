<?php
function foo() {
  function foo2() {
    return "bar!";
  }
  
  return foo2();
}

// Cannot call foo2() here, 
// it doesn't exist yet!

var_dump(foo());

// Now we can call foo2, its been 
// defined by calling foo()
var_dump(foo2());

