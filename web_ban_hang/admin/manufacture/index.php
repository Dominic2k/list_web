<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nhà sản xuất</title>
</head>
<body>
<h1><em>Giao diện quản lí nhà sản xuất</em></h1>
<a href="form_insert.php"><h3>Thêm mới</h3></a>
<?php
include '../menu.php';
?>
<?php
require '../connect.php';
$sql = "select * from manufacture";
$result = mysqli_query($connect, $sql);
?>
<table border="1" width="100%">
	<tr>
		<th>Mã</th>
		<th>Tên</th>
		<th>Địa chỉ</th>
		<th>Điện thoại</th>
		<th>Ảnh</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo $each['id'] ?></td>
			<td><?php echo $each['name'] ?></td>
			<td><?php echo $each['address'] ?></td>
			<td><?php echo $each['phone'] ?></td>
			<td>
				<img height="100" src="<?php echo $each['photo'] ?>">
			</td>
			<td>
				<a href="form_update.php?id=<?php echo $each['id'] ?>">
					Sửa
				</a>
			</td>
			<td>
				<a href="delete.php?id=<?php echo $each['id'] ?>">
					Xóa
				</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>
<?php
mysqli_close($connect);
?>
</body>
</html>