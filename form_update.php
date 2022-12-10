<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<!-- Lấy lại những nội dung bài đăng trước đó in vòa form để sửa  -->
	<?php
	$ma = $_GET['ma'];
	require 'connect.php';
	$sql = "select * from tin_tuc
	where ma = $ma";
	$ket_qua = mysqli_query($ket_noi,$sql);
	$tin_tuc = mysqli_fetch_array($ket_qua);
	?>
	<!--Giao diện Form để sửa nội dung -->
	<form method="post" action="process_update.php">
		<!-- input này để đẩy cái mã theo form nếu nhấn sửa -->
		<input type="hidden" name="ma" value="<?php echo $ma ?>">
		Tiêu đề
		<input type="text" name="tieu_de" value="<?php echo $tin_tuc['tieu_de'] ?>">
		<br>
		Nội dung
		<textarea name="noi_dung"><?php echo $tin_tuc['noi_dung'] ?>
		</textarea>
		<br>
		Link ảnh
		<input type="text" name="anh" value=" <?php echo $tin_tuc['anh'] ?>">
		<br>
		<button>Sửa</button>
	</form>
	<?php mysqli_close($ket_noi)?>
</body>
</html>