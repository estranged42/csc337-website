var doubleMe = function doubleMe(x) {
  
}

var halveMe = function halveMe(x) {
  return x/2;
}

var myLib = {
  version: 0.3,
  name: "My Test Library",
  double: doubleMe,
  half: halveMe
}

console.log( myLib.double(3) );
console.log( myLib.half(10) );

var myLib = {
  version: 0.4,
  name: "My Test Library",
  double: function(x) { return 2 * x; },
  half: function(x) { return x/2; }
}
