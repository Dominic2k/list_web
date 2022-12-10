<!-- Lấy dữ liệu sửa để cập nhật bài mới vào DB -->
<?php

$ma = $_POST['ma'];
$tieu_de = $_POST['tieu_de'];
$noi_dung = $_POST['noi_dung'];
$anh = $_POST['anh'];

require 'connect.php';

$truy_van = "update tin_tuc 
set 
tieu_de = '$tieu_de',
noi_dung = '$noi_dung',
anh = '$anh'
where 
ma = '$ma'";

mysqli_query($ket_noi,$truy_van);
mysqli_close($ket_noi);