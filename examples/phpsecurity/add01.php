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
  $name = $_REQUEST['name'];
  $phone = $_REQUEST['phone'];
  $email = $_REQUEST['email'];

  // Create our insert query
  $sql = "INSERT INTO staff (name, phone, email) 
          VALUES ('" . $name . "','" . $phone . "','" . $email . "')";
  $db->query($sql);

	?>
	
  <h3><?php echo $sql; ?></h3>
  
  <a href="index.php">Back to staff page</a>

</div>

</body>
</html>
