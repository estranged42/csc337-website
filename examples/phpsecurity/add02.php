<!DOCTYPE html>

<head>
	<title>Save New Staff</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<div id="main_page">

	<?php
	
	require 'db.php';
	
  // Get the submitted form data
  $values = array(
    ':name' => $_REQUEST['name'],
    ':phone' => $_REQUEST['phone'],
    ':email' => $_REQUEST['email']
  );

  // Create our insert query
  $sql = "INSERT INTO staff (name, phone, email) VALUES (:name, :phone, :email)";
  $statement = $db->prepare($sql);
  $statement->execute($values);

	?>
	
  <h3><?php echo $sql; ?></h3>
  
  <a href="index.php">Back to staff page</a>

</div>

</body>
</html>
