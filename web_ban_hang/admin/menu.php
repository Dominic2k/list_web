<ul>
	<li>
		<a href="../manufacture"><em><h3>
			Quản lí nhà sản xuất.</h3></em>
		</a>
	</li>
	<li>
		<a href="../products"><em><h3>
			Quản lí sản phẩm.</h3></em>
		</a>
	</li>
</ul>
<body>
<?php
if(isset($_GET['error'])){
?>
	<span style="color: red">
		<?php echo $_GET['error'] ?>
	</span>
<?php
}
?>
<?php
if(isset($_GET['success'])){
?>
	<span style="color: green">
		<?php echo $_GET['success'] ?>
	</span>
<?php
}
?>