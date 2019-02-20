<?php
$angka_a='200';
$angka_b='21';

$kali = $angka_a * $angka_b;
$bagi = $angka_a / $angka_b;
$Tambah = $angka_a + $angka_b;
$kurang = $angka_a - $angka_b;
$mod =$angka_a % $angka_b;

echo "<h3> Hasil operasi menggunakan operator Aritmatika</h3>";
echo"perkalian".$angka_a." * ".$angka_b." =  " .$kali."<br>";
echo"pembagian".$angka_a." / ".$angka_b." =  " .$bagi."<br>";
echo"penjumlahan".$angka_a." + ".$angka_b." =  " .$Tambah."<br>";
echo"pengurangan".$angka_a." - ".$angka_b." =  " .$kurang."<br>";
echo"modolus atau sisa hasil bagi ".$angka_a." / " .$angka_b. "=" .$mod."<br>";
?>