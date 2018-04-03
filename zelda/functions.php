<?php 
//Koneksi ke database
$conn = mysqli_connect("localhost","root","","unitlaka");

function query($query){
	global $conn;
	$result =mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn; 
	// ambil data dari tiap elemen dalam form
    $newshead = htmlspecialchars($data["news_heading"]);
    $newsdate = htmlspecialchars($data["news_date"]);
    $newscate = htmlspecialchars($data["cate_id"]);
    $newsdesc = htmlspecialchars($data["news_description"]);
    $newsimage =htmlspecialchars($data["news_image"]);

    // query insert data 
    $query= "INSERT INTO tbl_news
    VALUES('','$newshead','$newsdate','$newscate','$newsdesc','$newsimage')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);	
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");
	return mysqli_affected_rows($conn);
}



function registerasi($data) {
	global $conn;
	
	$username =strtolower(stripcslashes($data["username"]));
	$password =mysqli_real_escape_string($conn, $data["password"]);
	$password2 =mysqli_real_escape_string($conn, $data["password2"]);

	//cek username sudah ada atau belum
	$result =mysqli_query($conn, "SELECT username FROM user WHERE username ='$username'");
	if (mysqli_fetch_assoc($result)) {
		echo "
		<script>
		alert('Username sudah terdaftar');
		</script>
		";
		return false;
	}



	//cek konfirmasi password
	if ($password !== $password2) {
	 	echo "
	 	<script>
	 	alert('konfirmasi password tidak sesuai');
	 	</script>";
	 	return false; 
	 } 
	 // enkripsi password
	 $password = password_hash($password, PASSWORD_DEFAULT);



	 // tambahkan user baru ke database
	 mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");

	 return mysqli_affected_rows($conn);

}



 ?>