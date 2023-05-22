<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thêm nhà sản xuất</title>
</head>
<body>
	<?php
		include '../menu.php';
	?>
<form method="post" action="process_insert.php">
	<fieldset>
		<legend>Thêm nhà sản xuất</legend>
		<p>
			Tên:
			<input type="text" name="name">
		</p>
		<br>
		<p>
			Địa chỉ:
			<textarea name="address"></textarea>
		</p>
		<br>
		<p>
			Điện thoại:
			<input type="text" name="phone">
		</p>
		<br>
		<p>
			Ảnh:
			<input type="text" name="photo">
		</p>
		<br>
		<p>
			<button>Thêm</button>
		</p>
	</fieldset>
</form>
</body>
</html>