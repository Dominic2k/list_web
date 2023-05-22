<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang chủ</title>
</head>
<body>
<?php
include 'connect.php';

$page = 1;
if(isset($_GET['page'])){
	$page = $_GET['page'];
}
$search = '';
if(isset($_GET['search'])){
	$search = $_GET['search'];
}

$sql_number_news = "select count(*) from news 	where 
	title like '%$search%'";
$array_number_news = mysqli_query($conn, $sql_number_news);
$result_number_news = mysqli_fetch_array($array_number_news);
$number_news = $result_number_news['count(*)'];
$number_news_on_1_page = 1;
$number_page = ceil($number_news / $number_news_on_1_page);

$skip = $number_news_on_1_page * ($page - 1);

	$sql = "select * from news 
	where 
	title like '%$search%'
	limit $number_news_on_1_page offset $skip";

$result = mysqli_query($conn, $sql);
?>

<h1><em>Trang chủ</em></h1>
<a href="form_insert.php">
	<p><strong>
	Thêm bài viết
	</strong></p>
</a>
<table border="1" width="100%">
	<caption>
		<form>
			<input type="search" name="search"
			 value="<?php echo $search ?>"
			>Tìm
		</form>
	</caption>
	<tr>
		<th>Mã</th>
		<th>Tiêu đề</th>
		<th>Ảnh</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php foreach ($result as $page_news): ?>
		<tr>
			<td><?php echo $page_news['id'] ?></td>	
			<td>
				<a href="process_show.php?id=<?php echo $page_news['id'] ?>">
					<?php echo $page_news['title'] ?>
				</a>
			</td>
			<td>
				<img src="<?php echo $page_news['photo'] ?>" height='80'>
			</td>
			<td>
				<a href="form_update.php?id=<?php echo $page_news['id'] ?>">Sửa</a>
			</td>
			<td>
				<a href="form_delete.php?id=<?php echo $page_news['id'] ?>">Xóa</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>

<?php for($i = 1; $i <= $number_page; $i++){ ?>
	<a href="?page=<?php echo $i ?>&search=<?php echo $search ?>">
		<?php echo $i ?>
	</a>
<?php } ?>

<?php
mysqli_close($conn)
?>
</body>
</html>