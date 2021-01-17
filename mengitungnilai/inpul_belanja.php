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
			text-align: center;
			box-sizing: border-box;
		}

		.b{
			padding-right: 20px;
		}

		h1{
			text-align: center;
		}
	</style>
	<body style="background-color:#dfd9d0">
		
		<h1 style="text-align: center;" >PENERIMAAN SISWA/I SMKN 1 TANGERANG SELATAN</h1>
		<!-- <p>mari belanja di ucok dari manaa</p> -->
		<form  action="output_belanja.php" method="POST">
			<div class="countainer">
				<div class="center">
					<h1>-Isi Data-data anda-</h1>
					<hr/>
					<b class="b">Nama</b>
					<input type="text" name="nama"><br/><br/>
					<b>Asal Sekolah</b>
					<input type="text" name="asal"><br/><br/>
					<b class="b">Email</b>
					<input type="text" name="email"><br/><br/>
					<b class="b">Alamat</b>
					<input type="area" name="alamat"><br/><br/>

					<h3>Pilih Jurusan Yang Anda diinginkan</h3>
					<hr/>
					Jurusan
					<input type="radio" name="email"><br/><br/>
					Teknik Elektro
					<input type="checkbox" name="email"><br/><br/>
					Teknik Listrik
					<input type="checkbox" name="email"><br/><br/>
					Tata Boga
					<input type="checkbox" name="email"><br/><br/>
					Akutansi
					<input type="checkbox" name="email"><br/><br/>


				</div>
			</div>
			



		</form>



	</body>
</html>