var addCount = function(event) {
  var curCount = Number(this.textContent);
  curCount++;
  this.textContent = curCount.toString();
  
  if (curCount == 1) {
    this.style.position = "absolute";
  }
  
  var max_x = window.innerWidth - 110;
  var max_y = window.innerHeight - 60;
  var newX = Math.random() * max_x;
  var newY = Math.random() * max_y;
  newX = Math.floor(newX);
  newY = Math.floor(newY);
  
  this.style.top = newY.toString() + "px";
  this.style.left = newX.toString() + "px";
}

window.addEventListener('load', function() {
  var numBoxes = 1;
  main = document.getElementById('main');
  for (i = 0; i < numBoxes; i++) {
    var newBox = document.createElement("div");
    main.appendChild(newBox);
    newBox.textContent = "0";
    newBox.addEventListener('click', addCount);
  }
});
