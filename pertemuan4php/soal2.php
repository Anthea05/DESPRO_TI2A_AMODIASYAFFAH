<?php

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$jumlahSiswa = count($nilaiSiswa);
$jumlahNilaiDiabaikan = 4; 
$jumlahNilaiDigunakan = $jumlahSiswa - $jumlahNilaiDiabaikan;

sort($nilaiSiswa); 

$nilaiTerseleksi = array_slice($nilaiSiswa, 2, $jumlahSiswa - 4); 

$totalNilai = 0;
foreach ($nilaiTerseleksi as $nilai) {
    $totalNilai += $nilai;
}

$rataRata = $totalNilai / $jumlahNilaiDigunakan;

echo "Daftar Nilai Siswa (Terurut): " . implode(", ", $nilaiSiswa) . "<br>";
echo "Nilai Terendah yang Diabaikan: " . $nilaiSiswa[0] . ", " . $nilaiSiswa[1] . "<br>";
echo "Nilai Tertinggi yang Diabaikan: " . $nilaiSiswa[$jumlahSiswa - 2] . ", " . $nilaiSiswa[$jumlahSiswa - 1] . "<br>";
echo "Nilai yang Digunakan: " . implode(", ", $nilaiTerseleksi) . "<br>";
echo "Total Nilai yang Digunakan: $totalNilai <br>";
echo "Rata-rata Nilai: " . round($rataRata, 2);
?>