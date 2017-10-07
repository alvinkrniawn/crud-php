<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Mahasiswa Baru | Politeknik Negeri Samarinda</title>
</head>
<body>
	<tr>
			<td><a href="index.php">Beranda</a></td>
			<td><a href="list-siswa.php">Lihat Mahasiswa</a>
	</tr>
	<header>
		<h3>Siswa yang sudah mendaftar</h3>
	</header>

	<nav>
		<a href="form-daftar.php">[+] Tambah Baru</a>
	</nav>

	<br>

	<table border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Sekolah Asal</th>
				<th>Tindakan</th>
			</tr>
		</thead>
<tbody>

<?php
	$sql = "Select * from calon_siswa";
	$query = mysqli_query($db, $sql);

	while($siswa = mysqli_fetch_array($query)){
		echo"<tr>";

		echo"<td>".$siswa['id']."</td>";
		echo"<td>".$siswa['nama']."</td>";
		echo"<td>".$siswa['alamat']."</td>";
		echo"<td>".$siswa['jenis_kelamin']."</td>";
		echo"<td>".$siswa['agama']."</td>";
		echo"<td>".$siswa['sekolah_asal']."</td>";

		echo"<td>";
		echo"<a href='form-edit.php?id=".$siswa['id']."''>Edit</a> | ";
		echo"<a href ='hapus.php?id=".$siswa['id']."'>Hapus</a>";
		echo "</td>";

		echo "</tr";
		echo "<br>";
	}
?>
</tbody>
	</table>
	<p>Total : <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>