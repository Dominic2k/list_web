<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Xem tin tức</title>
</head>
<body>
<?php
	$id = $_GET['id'];
	include 'connect.php';
	$sql = "select * from news
	where id = $id";
	$result = mysqli_query($conn, $sql);
	$first_news = mysqli_fetch_array($result);
?>
<fieldset>
	<legend><h1><?php echo $first_news['title'] ?></h1></legend>
	<p><?php echo nl2br($first_news['content']) ?></p>
	<img src="<?php echo $first_news['photo'] ?>" height='200'>
</fieldset>
</body>
</html>