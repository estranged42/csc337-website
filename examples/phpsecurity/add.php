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
  $name = filter_var($_REQUEST['name'], FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW);
  $phone = filter_var($_REQUEST['phone'], FILTER_SANITIZE_NUMBER_INT);
  $phone = str_replace('-', '', $phone);
  $email = filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL);
  $values = array(
    ':name'  => $name,
    ':phone' => $phone,
    ':email' => $email
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
