<?php
session_start();

// If we're POSTing to this page, its probalby a form update
if (!empty($_POST)) {
  $newSavedString = $_POST['saveString'];
  $_SESSION['saveString'] = $newSavedString;
  // Redirect to the page via GET to fix the back button issue
  header('Location: sessions.php');
}
?>
<!doctype html>
<html>
<head>
  <title>php/sessions.php</title>
</head>
<body>
  <section>
    <h2>
      Current Saved String: <?php echo $_SESSION['saveString']; ?>
    </h2>
  </section>

  <section>
    <form action="sessions.php" method="POST">
      <input name="saveString" type="text">
      <input type="submit" value="Update Saved String">
    </form>
  </section>

</body>
</html>
