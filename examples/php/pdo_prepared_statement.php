<?php
ini_set('display_errors', 'on');

$dsn = 'mysql:dbname=cs337;host=localhost';
$user = 'root';
$password = 'bitnami';
$db = new PDO($dsn, $user, $password);

$sql = "SELECT * FROM staff WHERE phone=? AND name=?";

$stmt = $db->prepare($sql);
$stmt->execute(array("626-1541", "Jan"));

$results = $stmt->fetchAll(PDO::FETCH_CLASS);

print_r($results);
