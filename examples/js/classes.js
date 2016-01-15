function Droid(type, name) {
  this.type = type;
  this.name = name;
}

Droid.prototype = {
  getName: function() { return this.name },
  getType: function() { return this.type }
}

var r2 = new Droid('astromech', 'R2D2');
var c3 = new Droid('protocol', 'C3PO');

console.log(r2.getName());

Droid.prototype.getName = function() { return this.name.toLowerCase() };

console.log(r2.getName());
