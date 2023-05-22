<?php

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$photo = $_POST['photo'];


include 'connect.php';

$sql = "update news
set title = '$title', content = '$content', photo = '$photo' where id = '$id'";

mysqli_query($conn, $sql);
mysqli_close($conn);