<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADD NEW STUDENT</title>
</head>
<body>
	<h1>ADD NEW STUDENT</h1>
<?php
	require_once(setting.php);
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
	
	if (!$conn){
		echo "<p>Connection fail</p>";
	}else {
		echo "<p>Connection successfully</p>";

		$sql_table = "student";

		if (isset($_POST['name']) && isset($_POST['grade']) && isset($_POST['class'])){
		$name = $_POST['name'];
		$grade = $_POST['grade'];
		$class = $_POST['class'];
		}

		$query = "INSERT INTO $sql_table(name, grade, class) VALUES ('$name', $grade, $class)";
		$result = mysqli_query($conn, $query);
		session_start();
		
		if($result){
			$noti = "successfully run adding student query";
			$_SESSION['success'] = 1;
		}else{
			$noti = "Something wrong when executing query:" + $query; 
			$_SESSION['success'] = 0;
		}
		$_SESSION['notification'] = $noti;
		$_SESSION['name'] = $name;
		$_SESSION['grade'] = $grade;
		$_SESSION['class'] = $class;
		header("location: add_student.php");

		mysqli_close($conn);
	}
?>
</body>
</html>