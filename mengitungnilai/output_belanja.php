<?php  

	$nama =$_POST["nama"];
	$asal =$_POST["asal"];
	$email =$_POST["email"];
	$alamat =$_POST["alamat"];
	$jurusan =$_POST["fakultas"];
	$descjurus ="";


	foreach($jurusan as $key => $value) {
		$descjurus .=$value ."<br/>";
	}

	echo "Nama :".$nama."<br/>";
	echo "Asal Sekolah :".$asal."<br/>";
	echo "Email :".$email ."<br/>";
	echo "Alamat :".$alamat."<br/>";
	echo "Jurusan yang di pilih :".$descjurus."<br/>";

	


?>