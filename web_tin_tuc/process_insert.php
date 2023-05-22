<?php

$title = $_POST['title'];
$content = $_POST['content'];
$photo = $_POST['photo'];

include 'connect.php';

$sql = "insert into news(title, content, photo)
values('$title', '$content', '$photo')";

mysqli_query($conn, $sql);

$error = mysqli_error($conn);
echo "$error";

mysqli_close($conn);