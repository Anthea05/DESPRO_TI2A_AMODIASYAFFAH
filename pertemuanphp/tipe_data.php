<?php

$a = 10;
$b = 5;
$c = $a + 5; // 15
$d = $b + (10 * 5); // 55
$e = $d - $c; // 40

echo "TIPE DATA INTEGER <br>";
echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

var_dump($e);

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

echo "TIPE DATA FLOAT <br>";
echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";
var_dump($rataRata); // Menampilkan tipe data dan nilai (float(7.0333...))
echo "<hr>";

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

echo "TIPE DATA BOOLEAN <br>";
var_dump($apakahSiswaLulus); // Menampilkan tipe data dan nilai (bool(true))
echo "<br>";
var_dump($apakahSiswaSudahUjian); // Menampilkan tipe data dan nilai (bool(false))
echo "<hr>";

$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang; // Menggunakan operator concatenation (.)

echo "TIPE DATA STRING <br>";
echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: ' . $namaBelakang . ' <br>';
echo "Nama Lengkap (Kurung Kurawal): $namaLengkap <br>";
echo "Nama Lengkap 2 (Operator Titik): $namaLengkap2 <br>";
echo "<hr>";

$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];

echo "TIPE DATA ARRAY <br>";
echo "Nama Mahasiswa indeks ke-0: " . $listMahasiswa[0] . "<br>";
echo "Nama Mahasiswa indeks ke-1: " . $listMahasiswa[1] . "<br>";
echo "Nama Mahasiswa indeks ke-2: " . $listMahasiswa[2] . "<br>";
?>