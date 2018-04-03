<?php 
require 'functions.php';

//ambil data dari URL
$id = $_GET["id"];
// var_dump($id);
//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	// var_dump($_POST); // digunakan untuk melihat aksi

	 
//cek apakah data berhasil di ubah atau tidak
	if (ubah($_POST)> 0 ) {
		echo"
		<script>
			alert('data berhasil di ubah!');
			document.location.href ='index.php';
		</script>
		";
	}else {
		echo "
		<script>
			alert('data gagal dirubah!');
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
	<title>Ubah data mahasiswa</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Ubah data mahasiswa</h1>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $mhs["id"];?>">
		<ul>
			<li>
				<input type="text" name="nrp" required value="<?= $mhs["nrp"]; ?>">
			</li>
			<li>
				<input type="text" name="nama" required value="<?php echo $mhs["nama"]; ?>">
			</li>
			<li>
				<input type="text" name="email" requred value="<?php echo$mhs["email"]; ?>">
			</li>
			<li>
				<input type="text" name="jurusan" required value="<?php echo $mhs["jurusan"]; ?>" >
			</li>
			<li>
				<label for="gambar">Masukkan Gambar</label>
				<input type="text" name="gambar" id="gambar" required value="<?php echo $mhs["gambar"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data</button>
			</li>
		</ul>
		
	</form>
	
</body>
</html>