<html>
	<head>
		<title>belajar input nilai</title>
	</head>
	<style>
		.siswa{
			margin: 10px;
		}
	</style>
	<body>
		<h2>Menghitung nilai siswa/i SMK</h2>
		<form action="output_nilai2.php" method="POST">

			Nama : 
			<input class="siswa" type="text" name="nama"><br />
			kelas :
			<input class="siswa" type="text" name="kelas"><br />
			Nilai1 :
			<input class="siswa" type="text" name="nilai1"><br />
			Nilai2 :
			<input class="siswa" type="text" name="nilai2"><br />


			<input type="submit" name="hasil" >


			


		</form>
	</body>
</html>