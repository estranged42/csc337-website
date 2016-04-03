// Suggested Global Variables
var door0;
var door1;
var door2;
var doors;
var messageBox;
var actionStep;
var gameID;

// Event Listener for DOM Loading

// Choose Door Callback Function
// This function should be called whenever a door is clicked, 
// and should trigger appropriate AJAX calls.
var chooseDoor = function(e) {

}

// You will need to define various other functions and callbacks.

// ajax helper function
// This function can be used as-is to initiate AJAX calls to the API back-end.
// usage:
//    ajax("cmd=yourcommand&option=value", callbackFunctionName);
//
// callbackFunctionName should then be defined like:
//    var callbackFunctionName = function(response) {
//       console.log(response);
//    }
//
//    The response variable will receive the response from the Server for the
//    given API call.
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

