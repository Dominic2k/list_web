<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Variables, Condition, and Loop</title>
</head>
<?php
	include("functions.php");
?>
<body>
<h1>Kết quả:</h1>
<?php
	if (isset($_POST['number'])){
		$num = $_POST["number"];
		if (isPositiveInt($num)){
			$sum = calculateSum($num);
			echo "<p>Tổng các số tự nhiên từ 1 đến ", $num, " là: <strong>", $sum ,"</strong>";
		} else{
			echo "Please enter an interger";
		}
	} else {
		echo "Something wrong, please contact..";
	}
?>


<?php
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	$date = date('m/d/Y h:i:s a', time());
?>

<p><a href='sum_calculate.php?sum=<?php echo $sum ?>&num=<?php echo $num ?>&date=<?php echo $date ?>'>Quay lại trang trước</a></p>

</body>
</html>