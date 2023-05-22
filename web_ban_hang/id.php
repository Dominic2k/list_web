<style type="text/css">
	.tung_san_pham{
		width: 33%;
		border: 1px solid black;
		height: 290px;
		float: left;
	}
</style>
<?php
$id = $_GET['id'];
require 'admin/connect.php';
$sql = "select * from products where id = '$id'";
$result = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($result);
?>
<div id="mid">
	<h1>
		<?php echo $each['name'] ?>
	</h1>
	<img src="admin/products/photos/<?php echo $each['photo'] ?>" height='120'>
	<p><?php echo $each['price'] ?> </p>
	<p><?php echo $each['description'] ?></p>
</div>