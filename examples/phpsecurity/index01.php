<!DOCTYPE html>

<head>
	<title>Staff Page</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<div id="main_page">

	<h1>Staff</h1> 
	<hr>
	
	<?php
	
	require 'db.php';
	
	$sql = 'SELECT * FROM staff ORDER BY name';
	$people = $db->query($sql);

	?>
	
	<table>
	<tr>
		<th>Name</th>
		<th>Phone</th>
		<th>Email</th>
	</tr>
	<?php foreach($people as $person): ?>
	<tr>
		<td><?php echo $person['name']; ?></td>
		<td><?php echo $person['phone']; ?></td>
		<td><?php echo $person['email']; ?></td>
	</tr>
	<?php endforeach; ?>
	</table>

</div>

</body>
</html>
