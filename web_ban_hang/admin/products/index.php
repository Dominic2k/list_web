<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sản phẩm</title>
</head>
<body>
	<?php
	require '../menu.php';
	require '../connect.php';
	$sql = "select 
	products.*,
	manufacture.name as manufacture_name 
	from products 
	join manufacture on products.manufacture_id = manufacture.id";
	$result = mysqli_query($connect, $sql);
	?>
	<h1><em>Giao diện quản lí nhà sản xuất</em></h1>
	<a href="form_insert.php">
		<h3>Thêm mới</h3>
	</a>
	<table border="1" width="100%">
		<tr>
			<th>Mã</th>
			<th>Tên</th>
			<th>Ảnh</th>
			<th>Giá</th>
			<th>Tên nhà sản xuất</th>
			<th>Sửa</th>
			<th>Xóa</th>
		</tr>
		<?php foreach ($result as $each): ?>
			<tr>
				<td><?php echo $each['id'] ?></td>
				<td><?php echo $each['name'] ?></td>
				<td>
					<img height="100" src="photos/<?php echo $each['photo'] ?>">
				</td>
				<td><?php echo $each['price'] ?></td>
				<td><?php echo $each['manufacture_name'] ?></td>
				<td>
					<a href="form_update.php?id=<?php echo $each['id'] ?>">Sửa
					</a>
				</td>
				<td>
					<a href="delete.php?id=<?php echo $each['id'] ?>">Xóa
					</a>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>