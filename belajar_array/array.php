<html>
	<head>
		<title>belajar array</title>
	</head>
	<style>
		

	</style>
	<body>
		<?php  

			//ini adalah array asosiatif type bagian 2 //
			// $mahasiswa = ['nama' => 'nurul huda', 'domisili' => 'surabaya', 'jenis_kelamin' =>"laki-laki"];

			// echo "nama : {$mahasiswa['nama']}<br>";




			// Dan ini adalah array terindeks bagian 1//

				$listmahasiswa = ["wahid abdulah", "elmobackhtiar" , "lendies fabri" ,"kendol"];

				// echo "Nama saya adalah " .$listmahasiswa[1];

				foreach ($listmahasiswa as $key => $value) {
					echo  $value . "<br>";
					// echo  $listmahasiswa[$key] . "<br>";
				}


		?>
	</body>
</html>
