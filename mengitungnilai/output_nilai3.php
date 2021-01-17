<?php 

	$nama =$_POST["nama"];

	$kelas =$_POST["kelas"];

	$absen =$_POST["absen"];

	$harian =$_POST["harian"];

	$uts =$_POST["uts"];

	$uas =$_POST["uas"];

	$hobi =$_POST["hobi"];

	$descHoby = "";
	// print_r($hobi);
	// die();


	//menghitung nilai yang akan kita input //

	$nilai_absen =$absen * 0.1;

	$nilai_harian =$harian * 0.2;

	$nilai_uts =$uts * 0.3;

	$nilai_uas =$uas * 0.4;


	//penjumblahan nilai-nilai yang sudah di input //

	$nilai_akhir =$nilai_absen + $nilai_harian + $nilai_uts * $nilai_uas;

	//menampilkan hasil dari nilai yang sudah di input berdasarkan nilai akhir //

	



	if ($nilai_akhir>=80) {
		$grade ="A";
	}elseif ($nilai_akhir>=70) {
		$grade ="B";
	}elseif ($nilai_akhir>=50) {
		$grade ="C";
	}elseif ($nilai_akhir>=40) {
		$grade ="D";
	}else{
		$grade ="E";
	}


	foreach ($hobi as $key => $value) {
		$descHoby .= $value ."<br/>";
	}

	echo"

	<h1>Menghitung nilai mahasiswa</h1>

	Nama mahasiswa : $nama <br/>
	kelas : $kelas <br/>
	Nilai Absen : $absen<br/>
	Nilai Harian : $harian<br/>
	Nilai UTS : $uts<br/>
	Nilai UAS : $uas<br/>
	Hobi yang anda suka adalah  :<br/>$descHoby<br/>


	<h4>Nilai Akhir : $nilai_akhir</h4>

	<h4>Grade :$grade<h4>


	";



 ?>