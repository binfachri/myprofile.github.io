<?php
	//file untuk konek ke database
$username = "root";
$password = "";
$server = "localhost";
$database = "db_sekolahidn";


// pdo (php data object)
// mysqli

// buat koneksi
// prosedural
$koneksi = mysqli_connect($server, $username, $password);

// cek apakah konek atau tidak

if (!$koneksi) {
	die('kita tidak konek ke server karena  :'. mysqli_connect_error());
}

// sistem object orented
$koneksi = new mysqli($server, $username, $password, $database);

//cek error
if ($koneksi->connect_error) {
	die('Gagal koneksi karna : '. $koneksi->connect_error);
}


// echo "koneksi berhasil ";

//$koneksi->close();


?>

