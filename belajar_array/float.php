<html>
	<head>
		<title>belajar float</title>
	</head>
	<style>
		
	</style>
	<body>
		
		<?php 

		$nilaiMatematika = 5.1;
		$nilaiIPA = 6.7;
		$nilaibahasaindonesia = 9.3;


		//hitung nilai rata-rata //

		$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaibahasaindonesia) / 3;


		//menampilkan data //

		echo "menampilkan nilai  matematika :{$nilaiMatematika} <br>";
		echo "menampilkan nilai  ipa :{$nilaiIPA} <br>";
		echo "menampilkan nilai Bahsa indonesai : {$nilaibahasaindonesia} <br>";
		echo "menampilkan nilai rata-rata {$rataRata} <br>";

		//menampilkan data integer//

		var_dump($rataRata);

		 ?>


	</body>
</html>