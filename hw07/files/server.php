<?php

require 'db.php';
require 'nicejson.php';


// Get Command
// Figure out what command is trying to be called by pulling in arguments
// from the URL query string.

// Do command based error handling.  Did they call a valid command?

// Process command: What command did they call? It might be clearer to 
// call a dedicated function to handle each different command here.



/**********************************************************
 **********************************************************
 * End of program flow. Functions only beyond this point.
 **********************************************************
 **********************************************************/

/**
 * doNewGame
 *
 * Create a new empty session, and set up a new game. Pick the 
 * prize door randomly, and save a new game in the database 
 * with the prize door. Return a response that contains the 
 * new Game ID from the newly created database row.
 */


/**
 * doFirstChoice
 *
 * Player has made their first choice of a door. We need to pick
 * one of the remaining doors to 'open' and show no prize. We know
 * which door has the prize, (chozen in doNewGame). If the player 
 * picked the right door, just randomly pick one of the remaining 
 * doors to 'open'.  If the player didn't pick the correct door,
 * be sure to 'open' the only remaining door that doesn't have 
 * the prize.
 *
 * Error checking
 * We need to make sure of the following things in this function:
 *  1. The game_id exists in the db
 *      - If it doesn't return an error "no matching game found" with
 *        a return value of 404 (not found)
 *  2. The game hasn't already had a final choice made
 *      - If it does, return a 409 status code and "game complete"
 *  3. The game hasn't already had a first choice made
 *      - If it does, just return the already chosen door to 'open'
 *
 * We also need to do input validation for the game_id and choice 
 * parameters. We need to make sure they're both integers. Note that
 * They will initially be strings from the $_GET superglobal. We need
 * to convert them to ints first, and make sure that they did convert
 * correctly.
 */



/**
 * doFinalChoice
 *
 * Player selects their final choice. They could either stay with their
 * first choice, or switch to the other closed door. We don't really 
 * need to do anything other than record their final choice, and return
 * a response with a message of either "you win" or "you loose".
 *
 * Error checking
 * We'll need to check the same conditions as doFirstChoice. It might
 * be tricky, but its possible to abstract the validation into a separate
 * function rather than duplicating all the checks.
 *
 * Checking for if the game is over or not should be done separately,
 * so that the final game state is returned instead of an error.
 *
 * One new check that needs to be made is that the player cannot choose
 * the door we opened in the previous step. If the player chooses that
 * door don't store the value, and return an error "cannot choose opened door"
 * with a status code of 409.
 */


/**
 * doStats
 *
 * Get stats on wins when the player switches and doesn't switch their choice
 */



/**
 * doError
 *
 * Construct an error response, and send it to the user.
 */
function doError($data, $code = 400) {
  if(is_array($data)) {
    $errorText = json_encode($data);
  } else {
    $errorText = $data;
  }
  $error = array("error" => $errorText);
  returnResponse($error, $code);
}


/**
 * returnResponse
 *
 * Return a JSON encoded response to the user.
 */
function returnResponse($data, $code) {
  // Determine the error code, and send that to the client

  // Be sure to set the MIME type of the response to JSON

  // Convert the response data to JSON, and optionally style it by calling
  // the json_format() function (included in nicejson.php).

  // The following bit if code is required to address the issue of security
  // that comes up when web pages from one site attempt to access resources
  // on another site. This bit of code should work as-is, and will only be 
  // needed if your web page and server are on different hosts.
  // See http://www.html5rocks.com/en/tutorials/cors/ for a more detailed
  // overview.
  if (isset($_SERVER['HTTP_REFERER'])) {
    $referer = $_SERVER['HTTP_REFERER'];
    $urlParts = parse_url($referer);
    $accessHost = $urlParts['scheme'] . "://" . $urlParts['host'];

    header("Access-Control-Allow-Origin: {$accessHost}");
    header("Access-Control-Allow-Credentials: true");
  }
  
  // Send the final JSON text to the client.
}


