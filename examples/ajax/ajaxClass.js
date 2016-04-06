var gameID;

window.addEventListener('load', function() {
    console.log("loaded");
    ajax("cmd=newGame", gotNewGame);
});

function gotNewGame(response) {
    console.log(response);
    gameID = response.data.game_id;
}



function ajax(url, callback) {
  url = "http://52.35.157.11/hw6/server.php?" + url;
  url = url + "&seed=" + (new Date()).getTime();
  
  // Create a new XMLHttpRequest Object
  var req = new XMLHttpRequest();
  
  // Pass Cookie Credentials along with request
  req.withCredentials = true;
  
  // Create a callback function when the State of the Connection changes
  req.onreadystatechange = function() {
    if (req.readyState == 4)       // state of 4 is 'done'. The request has completed
    {
      callback( JSON.parse(req.responseText) );  // The .responseText property of the request object
    } else {                                     // contains the Text returned from the request.
      // console.log(req.readyState);
    }
  };
  
  // Set up our HTTP Request
  req.open('GET', url, true);
  
  // Finally initiate the request
  req.send();

}
