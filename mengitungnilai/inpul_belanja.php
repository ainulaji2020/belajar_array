<html>
	<head>
		<title>menghitung belanja</title>
	</head>
	<style>
		body{
			color: #fff;
			font-family: arial;
			background-image: url('../../img/toga.jpg');
			background-repeat: no-repeat;
			background-size: 100% 100%;
			background-position:center center;
		}
		.countainer{
			/*background-color:#dfd9d0;*/
			
		}

		.center{
			width: 50%;
			margin-left: 300px;
			margin-right: 300px;
			/*text-align: center;*/
			box-sizing: border-box;
		}

		.in-center{
			width: 50%;
			padding-top: 20px;
		}

		.b{
			padding-right: 20px;
		}

		h1{
			text-align: center;
		}
	</style>
	<body style="background-color:#dfd9d0">
		
		<h1 style="text-align: center;"  >PENERIMAAN SISWA/I SMKN 1 TANGERANG SELATAN</h1>
		<form  action="output_belanja.php" method="POST">
			<div class="countainer">
				<div class="center">
					<h1><ins>Isi Data-Data Anda</ins></h1>
					<hr/>
					<div class="in-center">
						<b style="padding-right: 56px;" class="b">Nama</b>
						<input type="text" name="nama"><br/><br/>

						<b>Asal Sekolah</b>
						<input type="text" name="asal"><br/><br/>

						<b style="padding-right: 56px;" class="b">Email</b>
						<input type="text" name="email"><br/><br/>

						<b  style="padding-right: 45px;" class="b">Alamat</b>
						<input type="area" name="alamat"><br/><br/>
					</div>
					<h3>Pilih Jurusan Yang Anda diinginkan</h3>
					<hr/>
					<div class="in-center">
						Jurusan
						<input type="radio" name="jurusan" value="jurusan"><br/>
						<input type="checkbox" name="fakultas[]" value="Tenik Elektro">Teknik Elektro<br/>
						
						<input type="checkbox" name="fakultas[]" value="Teknik Mesin">Teknik Mesin<br/>
						
						<input type="checkbox" name="fakultas[]" value="Teknik Listrik">Teknik Listrik<br/>
						
						<input type="checkbox" name="fakultas[]" value="Tata boga">Tata Boga<br/>
						
						<input type="checkbox" name="fakultas[]" value="Akutansi">Akutansi<br/><br/>
					</div>
					<input type="submit" name="hasil" value="SIMPAN">

				</div>
			</div>
		</form>



	</body>
</html>