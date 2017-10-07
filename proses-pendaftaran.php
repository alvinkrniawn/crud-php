<?php
include("config.php");

if (isset($_POST['Daftar'])) {
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$sekolah = $_POST['sekolah_asal'];

	// buat query
	$sql = "Insert into calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) value ('$nama','$alamat','$jk','$agama','$sekolah')";

	$query = mysqli_query($db, $sql);

	//apakah query simpan berhasil?
	if ($query) {
		header('Location: index.php?status=sukses');
	} else {
		header('Location: index.php?status=gagal');
	}
} else {
	die("Akses dilarang...");
}
?>