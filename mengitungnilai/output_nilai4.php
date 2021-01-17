<html>
	<head>
		<title> membeli kendaraan</title>
	</head>

</html>

<?php 

$nama =$_POST["nama"];

$alamat =$_POST["alamat"];

$jenis =$_POST["jenis"];

$menu =$_POST["menu"];

$descmenu ="";




foreach($menu as $key => $value) {
	// echo "ini yang anda beli";
	 $descmenu .=$value ."<br/>";
}

echo "Nama :" .$nama ."<br/>";
echo "Alamat :" .$alamat ."<br/>";
echo "Jenis-jenis :" .$jenis ."<br/>";
echo "Menu motor yang anda beli :" .$descmenu ."<br/>";






 ?>