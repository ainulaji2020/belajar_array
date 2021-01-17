<?php  

	$nama = $_POST["nama"];

	$kelas = $_POST["kelas"];

	$nilai1 =$_POST["nilai1"];

	$nilai2 = $_POST["nilai2"];

	$jumblah = $nilai1 + $nilai2 ;




	echo "Nama :" .$nama . "<br/>";
	echo "Kelas:" .$kelas ."<br/>";
	echo "Nilai ke 1 :" .$nilai1 ."<br/>";
	echo "Nilai ke 2 :" .$nilai2 ."<br/>";
	echo "Ini hasil penumblahan " .$jumblah ."<br/>";

	echo" Status";

	if ($jumblah == 70) {
		echo "nilai mu A";
	}elseif ($jumblah <70) {
		echo "nilai mu adalah c ";
	}else{
		echo"tidak lulus";
	}

?>