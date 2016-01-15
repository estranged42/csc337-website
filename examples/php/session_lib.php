<?php
session_start();

// If we're POSTing to this page, its probalby a form update
if (!empty($_POST)) {
  $newSavedString = $_POST['saveString'];
  $_SESSION['saveString'] = $newSavedString;
  header('Location: sessions.php');
}