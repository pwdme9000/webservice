<?php 
require 'functions.php';



//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	//var_dump($_POST); die; // digunakan untuk melihat aksi atau melakukan debugg

	
//cek apakah data berhasil di tambahkan atau tidak
	if (tambah($_POST)> 0 ) {
		echo"
		<script>
			alert('data berhasil di tambahkan!');
			document.location.href ='index.php';
		</script>
		";
	}else {
		echo "
		<script>
			alert('data gagal di tambahkan!');
			document.location.href ='index.php';
		</script>
		";
	}



}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tambah data mahasiswa</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Tambah data mahasiswa</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<input type="text" name="nrp" placeholder="masukkan nrp" required>
			</li>
			<li>
				<input type="text" name="nama" placeholder="masukkan nama">
			</li>
			<li>
				<input type="text" name="email" placeholder="Masukkan email">
			</li>
			<li>
				<input type="text" name="jurusan" placeholder="Masukkan Jurusan">
			</li>
			<li>
				<label for="gambar">Pilih Gambar</label>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>
		
	</form>
	
</body>
</html>