<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Mahasisswa Baru | Politeknik Negeri Samarinda</title>
</head>
<body>
	<header>
			<h3>Pendaftaran Mahasiswa Baru</h3>
			<h1>Politeknik Negeri Samarinda</h1>
	</header>
	<tr>
			<td><a href="index.php">Beranda</a></td>
			<td><a href="list-siswa.php">Lihat Mahasiswa</a>
	</tr>

	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="form-daftar.php">Daftar Baru</a></li>
			<li><a href="list-siswa.php">Pendaftar</a></li>
		</ul>
	</nav>
	<?php if (isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran Siswa Baru Berhasil!";
			} else {
				echo "Pendaftaran Gagal!";
			}
		?>
	</p>
<?php endif; ?>

</body>
</html>
