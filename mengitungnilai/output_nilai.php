<?php 
 // $nama  =$_POST["nama"];
 $kelas  =$_POST["kelas"];
 $nilai1  =$_POST["nilai1"];
 $nilai2  =$_POST["nilai2"];
 $jumblah =$nilai1 + $nilai2;
 $keterangan = " <h1>ini adalah hasil perhitungan</h1>";



 echo "Nama : " .$nama ."<br>";
 echo "kelas :" .$kelas ."<br>";
 echo "nilai1 :" .$nilai1 . "<br>";
 echo "nilai2 :" .$nilai2 ."<br>";
 echo "jumblah :" .$jumblah . "<br>";
 echo $keterangan;
?>