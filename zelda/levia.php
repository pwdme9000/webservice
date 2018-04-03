<?php 
// if (isset($_POST["name"]) && isset($_POST["age"])) {
// 	echo "Welcome".$_POST['name']."<br>";
// 	echo "Your Age".$_POST['age']."<br>";
// 	exit();

// }
if (isset($_POST["name"]) && isset($_POST["age"])) {
	echo "Selamat datang Bruh" .$_POST['name']."<br>";
	echo "Umur kamu" .$_POST['age']."<br>";
	exit();
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ini adalah contoh perbedaan menggunakan metode get dan post</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="POST">
		Name: <input type="text" name="name">
		Age : <input type="text" name="age">
		<button type="submit">submit</button>
	</form>
	
</body>
</html>