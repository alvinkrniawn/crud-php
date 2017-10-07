<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Mahasiswa Baru | Politeknik Negeri Samaridna</title>
</head>
<body>
	<header>
		<h3>Formulir Pendaftaran Siswa Baru</h3>
	</header>
	<tr>
			<td><a href="index.php">Beranda</a></td>
			<td><a href="list-siswa.php">Lihat Mahasiswa</a>
	</tr>

	<form action="proses-pendaftaran.php" method="POST">
		<fieldset>
			<p>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" placeholder="nama lengkap" required />
			</p>
			<p>
				<label for="alamat">Alamat :</label>
				<textarea name="alamat"></textarea>
			</p>
			<p>
				<label for="jenis_kelamin">Jenis Kelamin :</label>
				<label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki - Laki</input></label>
				<label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</input></label>
			</p>
			<p>
				<label for="agama">Agama: </label>
				<select name="agama" required="">
					<option value="">Pilih Agama</option>
					<option>Islam</option>
					<option>Kristen</option>
					<option>Hindu</option>
					<option>Budha</option>
					<option>Atheis</option>
				</select>
			</p>
			<p>
				<label for="sekolah_asal">Sekolah Asal: </label>
				<input type="text" name="sekolah_asal" placeholder="Sekolah Asal"></input>
			</p>
			<p>
				<input type="submit" value="Daftar" name="Daftar" />
			</p>
		</fieldset>
	</form>

</body>
</html>