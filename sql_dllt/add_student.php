<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add student</title>
</head>
<body>
	<h1>Add a new student</h1>
	<form method="POST" action="new_student.php">
	<fieldset>
		<legend>New student detail:</legend>
		<p>
			<label for="name">Enter Student Name:</label>
			<input type="text" name="name"/>
		</p>
		<p>
			<label for="grade">Enter Student Grade:</label>
			<input type="text" name="grade"/>
		</p>
		<p>
			<label for="class">Enter Student Class:</label>
			<input type="text" name="class"/>
		</p>
		<p>
			<input type="submit" name="" value="Add student">
			<?php
				session_start();
				echo $_SESSION['notification'];
				$_SESSION['notification'] = "";
				if ($_SESSION['success'] == 1){
					echo ".Successfully added new student: Name: " ,$_SESSION['name'];
				}
			?>
		</p>
	</fieldset>
	</form>
</body>
</body>
</html>