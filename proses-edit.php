<?php

include("config.php");

	//cek apakah tombol simpan udah diklik atau belum
	if(isset($_POST['simpan'])){
		//ambil data dari formulir
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jk = $_POST['jenis_kelamin'];
		$agama = $_POST['agama'];
		$sekolah = $_POST['sekolah_asal'];

		// buat query update

		$sql = "update calon_siswa set nama='$nama',alamat='$alamat',jenis_kelamin='$jk',agama='$agama',sekolah_asal='sekolah' where id=$id";
		$query = mysqli_query($db, $sql);

		//apakah query update berhasil 
		if ($query){
			header('Location: list-siswa.php');
		} else {
			die("Gagal menyimpan perubahan...");
		}
	} else {
		die("akses dilarang...");
	}
?>