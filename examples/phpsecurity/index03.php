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
		<td><?php echo htmlentities($person['name']); ?></td>
		<td><?php echo formatPhone(htmlentities($person['phone'])); ?></td>
		<td><?php echo htmlentities($person['email']); ?></td>
	</tr>
	<?php endforeach; ?>
	</table>

	<form action="add.php" method="POST">
	  <table>
	    <tr>
	      <td>Name</td>
	      <td><input type="text" name="name"></td>
	    </tr>
	    <tr>
	      <td>Phone</td>
	      <td><input type="text" name="phone"></td>
	    </tr>
	    <tr>
	      <td>Email</td>
	      <td><input type="text" name="email"></td>
	    </tr>
	    <tr>
	      <td>&nbsp;</td>
	      <td><input type="submit" name="submit" value="Add New Staff"></td>
	    </tr>
	  </table>
	</form>

</div>

</body>
</html>
