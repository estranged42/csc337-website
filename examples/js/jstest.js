var doubleMe = function(x) {
  return 2 * x;
}

var halveMe = function(x) {
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

myLib.half = function(x) {
    return x/3;
}

console.log( myLib.half(9) );
