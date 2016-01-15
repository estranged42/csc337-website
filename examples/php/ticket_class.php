<?php

class ticketer {

  // Property to hold our database connection
  public $db;
  
  public function __construct() {
    // Connect to our database
    $this->db = new PDO($dsn, $user, $pass);
  }
  
  public function newTicket() {
    $sql = "INSERT INTO tickets ....";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    $newTicketID = $this->getLastInserID();
    return $this->getTicket($newTicketID);
  }
  
  public function getTicket($ticketID) {
    // ...
  }

}

