<!-- Truyền mã của bài cần xóa lên rồi truy vấn xóa -->
<?php

$ma = $_GET['ma'];

require 'connect.php';

$truy_van = "delete from tin_tuc where ma = $ma";

mysqli_query($ket_noi,$truy_van);
mysqli_close($ket_noi);