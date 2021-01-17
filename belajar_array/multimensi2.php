<html>
	<head>
		<title>belajar multidimensi array tipe2</title>
	</head>
	<style></style>
	<body>
		
		<?php 

			$arraymuldimensi = [

				[1,2,3,4,5],

				"nurul huda",

				"ledis febri",

				[6,7,8,9,10,11],

				true,
				false

				

			];

			foreach ($arraymuldimensi as $key => $value) {

				if(is_array($value)){
				echo "ini array = <br />";
					foreach ($value as $key2 => $value2) {
						echo" -_- " .$value2 ."<br />";
					}
					echo "ini adalah array = <br>";



				}else{
					echo $value . "<br />";
				}
				

				
			}
		 ?>

	</body>
</html>