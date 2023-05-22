<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Máy tính tổng</title>
</head>
<body>
	<form method="post" action="sum.php">
		<h1>Tính tổng:</h1>
		<label>Nhập số nguyên:</label>
		<input type="text" name="number">
		<input type="submit" value="Calculate Sum">
	</form>
</body>

<?php
	$sum = $_GET['sum'];
	$num = $_GET['num'];
	$date = $_GET['date'];

	echo "Previous result: <strong><br>","At: ", $date, "</strong>. You enter: ", $num, " result is: ", $sum ;
?>
</html>