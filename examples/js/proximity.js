/* Shamelessly stollen from https://bip.io */

document.addEventListener("DOMContentLoaded", function(event) {
  startup();
});

var startup = function() {
  var pressed = false;

  function random(min, max){
    return Math.random()*(max - min)+min;
  }

  function sq(num){
    return num*num;
  }

  function getDist(x1,y1,x2,y2){
    var dx = x1 - x2;
    var dy = y1 - y2;
    var d = Math.sqrt(sq(dx)+sq(dy));
    var ux = dx/d;
    var uy = dy/d;
    return {
      dx: dx,
      dy: dy,
      d: d,
      ux: ux,
      uy: uy
    }
  }

  function drawCircle(ctx,centerX,centerY,radius,stroke){
    ctx.beginPath();
    ctx.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
    ctx.fill();
    if (stroke) ctx.stroke();
  };

  function drawLine(ctx,startX,startY,endX,endY){
    ctx.beginPath();
    ctx.moveTo(startX, startY);
    ctx.lineTo(endX, endY);
    ctx.stroke();
  };

  function setup(){

    //var coverElBox = document.getElementById('cover').getBoundingClientRect();
    //var width = coverElBox.width;
    //var height = coverElBox.height;
    var width = window.innerWidth,
    height = window.outerHeight - 110;

    var colors = {
      background : "rgb(0,148,164)",
      circles : "rgba(0,148,164, 0.6)",
      lines: "rgba(255,255,255,0.8)",
      //lines: "rgb(255,255,255)",
      //lines: "rgba(255,255,255,0.9)",
      //lines: "rgba(128,128,128,0.8)",
      //lines: "rgba(246,134,31,0.4)",
      dots: "hsla(266,65%,100%,1)"
    }

    var layers = ['circles', 'lines', 'dots'];

    layers.forEach(function(layer, i){
      layer = document.getElementById('cover-mesh-'+layer).getContext('2d');
      layer.canvas.width = width;
      layer.canvas.height = height;
      layers[i] = layer;
    })

    //var numCircles = width * height / 20000;
    var numCircles = 40;
    var circleSize = {
      min: 60,
      max: 100
    };
    var circleSpeed = 1;
    var circles = [];
    var lines = [];
    var lineOffset = 4;
    var dotSize = 6;
    var maxDistance = 120;

    for (var j=0; j< numCircles; j++) {
      var circle = {
        x: random(0,width),
        y: random(0,height),
        //radius: random(circleSize.min, circleSize.max),
        radius : 24,
        vx: random(-1*circleSpeed, circleSpeed),
        vy: random(-1*circleSpeed, circleSpeed)
      }
      // no overlappers
      var overlapping = false;
      if (!overlapping) circles.push(circle);
    }

    function moveCircles(){
      circles.forEach(function(circle){

        // Move circle
        circle.x += circle.vx;
        circle.y += circle.vy;

        // Wrap edges
        if ( circle.x < 0-circle.radius) {
          circle.x = width+circle.radius;
        }
        if ( circle.x > width+circle.radius ) {
          circle.x = -circle.radius;
        }
        if ( circle.y < 0-circle.radius     ) {
          circle.y = height+circle.radius;
        }
        if ( circle.y > height+circle.radius) {
          circle.y = 0-circle.radius;
        }

        circles.forEach(function(circle2){
          var dist = getDist(circle.x,circle.y,circle2.x,circle2.y);
          if ( dist.d < circle.radius + circle2.radius + maxDistance ) {
            lines.push({
              x1: circle.x,
              y1: circle.y,
              x2: circle2.x,
              y2: circle2.y
            });
          }
        });
      })
    }

    function drawCircles(){
      var layer = layers[0];
      circles.forEach(function(circle){
        // draw circle
        layer.fillStyle = pressed ? 'rgb(75,197,151)' : colors.circles;

        drawCircle(layer, circle.x, circle.y, circle.radius);
      })
    }

    function drawDots(){
      var layer = layers[2];
      layer.strokeStyle = colors.circles;
      layer.lineWidth = 3;

      circles.forEach(function(circle){
        drawCircle(layer, circle.x, circle.y, circle.radius - 10);
      })
    }

    function drawLines(){
      var layer = layers[1];
      layer.lineCap = 'round';
      layer.strokeStyle = colors.lines;

      lines.forEach(function(line){
        var dist = getDist(line.x1,line.y1,line.x2,line.y2);
        var lineW = ((maxDistance - dist.d)/maxDistance) * 30;
        if (lineW < 1) { lineW = 1; }
        layer.beginPath();
        layer.lineWidth = lineW;
        layer.moveTo(line.x1, line.y1);
        layer.lineTo(line.x2, line.y2);
        layer.stroke();
        layer.closePath();
      })


      layer.stroke();
    }

    function render(){
      layers.forEach(function(layer){
        layer.clearRect(0,0,width,height);
      })
      drawCircles();
      drawLines();
      drawDots();
      lines = [];
      moveCircles();
      requestAnimationFrame(render);
    }

    render();
  }

  setup();

  window.onresize = function(){
    setup();
  }
}

