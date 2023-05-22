<?php

$id = $_GET['id'];

include 'connect.php';

$sql = "delete from news where id = '$id'";

mysqli_query($conn, $sql);
mysqli_close($conn);