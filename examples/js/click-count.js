var addCount = function(event) {
  var curCount = Number(this.textContent);
  curCount++;
  this.textContent = curCount.toString();
}

window.addEventListener('load', function() {
  var numBoxes = 9;
  main = document.getElementById('main');
  for (i = 0; i < numBoxes; i++) {
    var newBox = document.createElement("div");
    main.appendChild(newBox);
    newBox.textContent = "0";
    newBox.addEventListener('click', addCount);
  }
});
