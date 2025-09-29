<?php
$daftarNilai = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];

$totalNilai = 0;
$jumlahSiswa = count($daftarNilai);
foreach ($daftarNilai as $siswa) {
    $totalNilai += $siswa[1];
}

$rataRataKelas = $totalNilai / $jumlahSiswa;

echo "Daftar Nilai Siswa:<br>";
echo "Total Nilai Kelas: $totalNilai <br>";
echo "Rata-rata Kelas: " . $rataRataKelas . "<br><br>";

echo "Siswa yang Nilainya di atas Rata-rata ($rataRataKelas):<br>";

foreach ($daftarNilai as $siswa) {
    $nama = $siswa[0];
    $nilai = $siswa[1];

    if ($nilai > $rataRataKelas) {
        echo "- $nama (Nilai: $nilai) <br>";
    }
}
?>