<?php 
session_start();
if (isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
}

require 'functions.php';

if (isset($_POST["login"])) {
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result =mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");

	//cek username
	if (mysqli_num_rows($result) === 1) {
		
		//cek passwordnya
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])){
			//Mengatur session
			$_SESSION["login"] = true;


			header("Location: index.php");
			exit;
		}

	}

	$error = true;
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Signin :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</head>
<body background="img/bg_img.jpg" >

	<?php if (isset($error)) : ?>
		<p style="color: red; font-style: italic;">Username / Password salah</p>
	<?php endif; ?>


	<div class="login">
		<h1><a href="index.html">Minimal </a></h1>
		<div class="login-bottom">
			<h2>Login</h2>
			<form action="" method="post">
			<div class="col-md-6">
				<div class="login-mail">
					<input type="text" name="username" id="username" placeholder="username">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" name="password" id="password" placeholder="Password">
					<i class="fa fa-lock"></i>
				</div>
				   <a class="news-letter " href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
					   </a>
					   <div class="clearfix"></div>

			</div>
			<div class="col-md-6 login-do">
				<!-- Digunakan Untuk tombol submit -->
					<button type="submit" name="login" class="btn btn-primary">Login</button>
					
					<p>Do not have an account?</p>
				<button type="submit" name="login" class="btn btn-default">Register</button>
			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
	<div class="copy-right">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>  
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
</body>
</html>