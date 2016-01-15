<?php
ini_set('display_errors', 'on');

require 'dbinfo.php';

$db = new PDO($dsn, $user, $password);

$arrObj = new ArrayObject();
$arrObj->append('Apple');

// $results = $stmt->fetchAll();
// $results = $stmt->fetchAll(PDO::FETCH_COLUMN);
// $results = $stmt->fetchAll(PDO::FETCH_CLASS);

// print_r($results);
