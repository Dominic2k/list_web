<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Update</title>
</head>
<body>

<?php
$id = $_GET['id'];
include 'connect.php';
$sql = "select * from news
where id = $id";
$result = mysqli_query($conn, $sql);
$news = mysqli_fetch_array($result);
?>

<form method="post" action="process_update.php">
	<fieldset>
		<legend>Sửa nội dung:</legend>
		<input type="hidden" name="id" value="<?php echo $id ?> ">
		Tiêu đề:
		<input type="text" name="title" value="<?php echo $news['title']?> ">
		<br>
		Nội dung:
		<textarea name="content"><?php echo $news['content'] ?></textarea>
		<br>
		Link ảnh:
		<input type="text" name="photo" value="<?php echo $news['photo'] ?>">
		<br>
		<button>SỬA</button>
	</fieldset>
</form>
<?php
mysqli_close($conn);
?>
</body>
</html>