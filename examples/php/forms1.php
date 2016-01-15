<!doctype html>
<?php
  $input = "";
  if (!empty($_POST)) {
    $input = print_r($_POST, true);
  }
?>
<html>
<head>
  <title>php/forms1.php</title>
</head>
<body>
  <h1>A Sample Form</h1>
  <form action="forms1.php" method="POST">
    <input type="text" name="nameField" size="20">
    <input type="submit" value="GO!">  
  </form>
  <pre>
  <?php echo $input; ?>
  </pre>
</body>
</html>
