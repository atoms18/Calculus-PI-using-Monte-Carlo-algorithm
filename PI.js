var shoot = 10000;
var enter = 0;

for(var i = 0; i < shoot; i++) {
  var x = Math.random() * 2 - 1;
  var y = Math.random() * 2 - 1;
  var distance = Math.sqrt((x * x) + (y * y));
  if(distance < 1) {
    enter++;
  }
}

var pi = (4 * enter) / shoot;
var diff = (Math.abs(pi - Math.PI) * 100) / Math.PI;

console.log("In Circle " + enter + "/" + shoot + " times");
console.log("PI Estimate: " + pi);
console.log("Expected PI: " + Math.PI);
console.log("% Diff: " + diff);
