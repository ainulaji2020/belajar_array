<html>
	<head>
		<title>from</title>
	</head>
	<body>
		<h2>FROM PENDAFTARAN</h2>

		<form action="proses.php" method="POST">
			<label for="fname">Nama :</label><br>
			<input type="text" id="fname" name="fname" /><br>

			<label for="kelas">kelas </label><br>
			<input type="text" id="kelas" name="kelas"/><br>

			<label for="alamat">Alamat :</label><br>
			<textarea name="Alamat"> </textarea><br>

			<label for="agama">Agama :</label><br>

			<input type="radio" id="islam" name="agama" value="islam">
			<label for="agama">Islam</label><br>
			<input type="radio" id="islam" name="agama" value="islam">

			<label for="agama">Kristen</label><br>
			<input type="radio" id="Kristen" name="agama" value="Kristen">

			<label for="agama">Budha</label><br>
			<input type="radio" id="Budha" name="agama" value="Budha">

			<label for="agama">Khatolik</label><br>
			<input type="radio" id="Khatolik" name="agama" value="Khatolik">
			<label for="Kongucu">Kongucu</label><br>
			<!-- <input type="radio" id="Kongucu" name="radio"> -->

			<label for="jenis_kelamin">Jenis kelamin :</label>
			<input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="laki-laki">
			<label for="jenis_kelamin">laki-laki</label><br>
			<input style="margin-left:7.8%;" type="radio" name="jenis_kelamin" value="Perempuan">
			<label for="jenis_kelamin">Perempuan</label> 
			<br>
			<input style="margin-left:15px;" type="submit" value="submit">	
		</form>

		<p> Tolonog diisi dengan data- data yang benar , jika salah maka data tersebut tidak bisa diubah kembali  </p>
	</body>
</html>