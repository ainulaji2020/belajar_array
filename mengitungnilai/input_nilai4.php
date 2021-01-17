<html>
	<head>
		<title>belajar menghitung nilai</title>
	</head>
	<style>
		.margin{
			margin-left: 100px;
		}

	</style>
	<body>
		
		<h1>MEMBELI KENDARAAN DI MALL dilarang <del style="color: red">mengutang !!!</del></h1>
		<h4>Dengan atas nama </h4>

		<form action="output_nilai4.php" method="POST">
			Nama :
			<input type="text" name="nama"><br/><br/>
			Alamat:
			<textarea name="alamat"></textarea><br/><br/>
			Jenis-jenis :<br/>
			<input type="radio" name="jenis" value="Honda">Honda
			<input style="margin-left: 32px;" type="checkbox" name="menu" value="Beat">Beat<br/>
			<input class="margin" type="checkbox" name="menu[]" value="vario">vario<br/>
			<input class="margin" type="checkbox" name="menu[]" value="vario125">vario125<br/><br/>


			<input type="radio" name="jenis" value="Yamaha">Yamaha
			<input style="margin-left:22px; " type="checkbox" name="menu[]" value="Mio Soul">Mio Soul<br/>
			<input class="margin" type="checkbox" name="menu[]" value="Mio J">Mio J<br/>
			<input class="margin" type="checkbox" name="menu[]" value="Mio GT120">Mio GT120<br/><br/>



			<input type="radio" name="jenis" value="Kawasaki">Kawasaki
			<input style="margin-left: 12px;" type="checkbox" name="menu[]" value="Ninja">Ninja <br/>
			<input class="margin" type="checkbox" name="menu[]" value="Poswan">Poswan<br/>
			<input class="margin" type="checkbox" name="menu[]" value="Ninja 250 cbr">Ninja 250 cbr<br/><br/>



			<input type="radio" name="jenis" value="Mishubishi">Mishubishi
			<input type="checkbox" name="menu[]" value="jess">jass<br/>
			<input style="margin-left: 100px;" type="checkbox" name="menu[]" value="pajero">pajero<br/>
			<input style="margin-left: 100px;" type="checkbox" name="menu[]" value="jip">jip<br/><br/>

			<input type="submit" name="hasil" value="SIMPAN">



			




		</form>



	</body>
</html> 