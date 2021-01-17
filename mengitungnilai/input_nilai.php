<html>
<head>
	<title>input nilai </title>

		<style type="text/css">
	.mhs{
	margin :10px;
}

</style>
</head>
<body>

	<h2>Menhitung Nilai Siswa/i yang lulus dan tidak lulus </h2>
	<form action="output_nilai.php" method="POST">
		Nama  :
		<input style="padding-top:5px; padding-bottom: 5px;" class="mhs" type="text" name="nama" placeholder="isi nama anda ..."><br>
		Kelas :
		<input class="mhs ngitung" type="text" name="kelas" placeholder="isi kelas anda.."><br>
		nilai1 :
		<input class="mhs"  type="text" name="nilai1" placeholder="masukan nilai..."><br>
		nilai2   :
		<input class="mhs" type="text" name="nilai2"  placeholder="masukan nilai..."><br>

		<input class="mhs" type="submit" value="simpan">
		
	</form>

</body>
</html>