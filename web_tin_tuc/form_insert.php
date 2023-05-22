<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Insert</title>
</head>
<body>
<form method="post" action="process_insert.php">
	<fieldset>
		<legend>Thêm nội dung:</legend>
		Tiêu đề:
		<input type="text" name="title">
		<br>
		Nội dung:
		<textarea name="content"></textarea>
		<br>
		Link ảnh:
		<input type="text" name="photo">
		<br>
		<button>THÊM</button>
	</fieldset>
</form>
</body>
</html>