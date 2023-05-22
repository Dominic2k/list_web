<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sửa sản phẩm</title>
</head>
<body>
<?php
	$id = $_GET['id'];
	require '../menu.php';
	require '../connect.php';
	$sql = "select * from products where id = '$id'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);

	$sql = "select * from manufacture";
	$manufacture = mysqli_query($connect, $sql);
?>
<form method="post" action="process_update.php" enctype="multipart/form-data">
	<fieldset>
		<legend>Thêm sản phẩm</legend>
		<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
		Tên:
		<input type="text" name="name" value="<?php echo $each['name'] ?>">
		<br>
		Đổi ảnh mới:
		<input type="file" name="photo_new">
		<br>
		Giữ ảnh cũ:
		<img src="photos/<?php echo $each['photo'] ?>" height="100">
		<input type="hidden" name="photo_old" value="<?php echo $each['photo'] ?>">
		<br>
		Giá:
		<input type="number" name="price" value="<?php echo $each['price'] ?>">
		<br>
		Mô tả:
		<textarea name="description"><?php echo $each['description'] ?></textarea>
		<br>
		Nhà sản xuất:
		<select name="manufacture_id">
			<?php foreach($manufacture as $manufacture): ?>
				<option
				 value="<?php echo $manufacture['id'] ?>"
				 <?php if($each['manufacture_id'] == $manufacture['id']){ ?>
				 	selected
				 <?php } ?> 
				 >
					<?php echo $manufacture['name'] ?>
				</option>
			<?php endforeach ?>
		</select>
		<br>
		<button>Sửa</button>
	</fieldset>
</form>
</body>
</html>