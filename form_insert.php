<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<!-- Giao diện form điền để thêm bài báo -->
	<form method="post" action="process_insert.php">
		Tiêu đề
		<input type="text" name="tieu_de">
		<br>
		Nội dung
		<textarea name="noi_dung"></textarea>
		<br>
		Link ảnh
		<input type="text" name="anh">
		<br>
		<button>Thêm</button>
	</form>
</body>
</html>