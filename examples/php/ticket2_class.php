<?php

class ticketer {

  // Property to hold our redis connection
  public $redis;
  
  public function __construct() {
    // Connect to our redis source
    $this->redis = new redis($host, $port, $user, $pass);
  }
  
  public function newTicket() {
    $t = $this->newTicketTemplate();
    $t->id = $this->newTicketID();
    $this->redis->add($t);
    return $t;
  }
  
  public function getTicket($ticketID) {
    // ...
  }

}
