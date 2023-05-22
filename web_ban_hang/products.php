<style type="text/css">
	.tung_san_pham{
		width: 33%;
		border: 1px solid black;
		height: 290px;
		float: left;
	}
</style>
<?php
require 'admin/connect.php';
$sql = "select * from products";
$result = mysqli_query($connect, $sql);
?>
<div id="mid">
	<?php foreach ($result as $each): ?>
		<div class="tung_san_pham">
			<h1>
				<?php echo $each['name'] ?>
			</h1>
			<img src="admin/products/photos/<?php echo $each['photo'] ?>" height='120'>
			<p><?php echo $each['price'] ?> $</p>
			<a href="product.php?id=<?php echo $each['id'] ?>"><em>
				Xem chi tiết >>>
			</em></a>
		</div>
	<?php endforeach ?>
</div>