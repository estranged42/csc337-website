<?php

require "ticket_class.php";

$tickets = new ticketer();

$newTicket = $tickets->newTicket();

$ticketDB = $tickets->db;

$sql = "SELECT * FROM tickets WHERE ...";
$stmt = $ticketDB->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

