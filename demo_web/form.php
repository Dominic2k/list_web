<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post" action="process.php">
	Name:
	<input type="text" name="name">
	<br>
	Year born:
	<input type="date" name="year_born">
	<br>
	Password:
	<input type="password" name="password">
	<br>
	Gender:
	<input type="radio" name="gender" value="men">Men
	<input type="radio" name="gender" value="women">Women
	<br>
	Interest:
	<select name="interest">
		<option value="1">Movie</option>
		<option value="2">Music</option>
		<option value="3">Football</option>
	</select>
	<br>
	Describe:
	<textarea name="describe"></textarea>
	<br>
	<button>Sign Up</button>
</form>
</body>
</html>