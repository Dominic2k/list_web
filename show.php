<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<!-- Xử lí lấy bài đăng theo mã để trả kết quả khi click xem -->
	<?php
	$ma = $_GET['ma'];
	require 'connect.php';
	$sql = "select * from tin_tuc
	where ma = $ma";
	$ket_qua = mysqli_query($ket_noi,$sql);
	// lấy cái đầu tiên từ mảng
	$bai_tin_tuc = mysqli_fetch_array($ket_qua);
	?>
	<h1>
		<!-- in ra tiêu đề -->
		<?php echo nl2br ($bai_tin_tuc['tieu_de']) ?>
	</h1>
	<p>
		<!-- in ra nội dung -->
		<?php echo nl2br ($bai_tin_tuc['noi_dung']) ?>
	</p>
	<!-- ảnh -->
	<img src="<?php echo $bai_tin_tuc['anh'] ?>" height = '200'>
</body>
</html>