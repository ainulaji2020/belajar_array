<html>
<head>
	<title>belajar memasukan nilai </title>
</head>
<style></style>
<body>

	<h2>Menghitung  Nilai Mahasiswa </h2>

	<form action="output_nilai3.php" method="POST">

		<b>Nama Mahasiswa/i<br/></b>
		<input type="text" name="nama" placeholder="isi Nama anda ..."><br/><br/>
		<b>Kelas <br/></b>
		<input type="text" name="kelas" placeholder="isi Kelas anda .."><br/><br/>
		<b>Nilai Absen<br/></b>
		<input type="text" name="absen" placeholder="isi Kelas anda .."><br/><br/>
		<b>Nilai Harian<br/></b>
		<input type="text" name="harian" placeholder="isi Kelas anda .."><br/><br/>
		<b>Nilai UTS<br/></b>
		<input type="text" name="uts" placeholder="isi Kelas anda .."><br/><br/>
		<b>Nilai UAS<br/></b>
		<input type="text" name="uas" placeholder="isi Kelas anda .."><br/><br/>

		<b>Hobi</b><br/>
		<input type="checkbox" name="hobi[]" value="sepakbola">Sepakbola<br>
		<input type="checkbox" name="hobi[]" value="badminton">Badminton<br>
		<input type="checkbox" name="hobi[]" value="futsal">Futsal<br>
		<input type="checkbox" name="hobi[]" value="jalan-jalan">Jalan-jalan<br>

		<input type="submit" name="hasil" value="Masuk">


	</form>


</body>
</html>