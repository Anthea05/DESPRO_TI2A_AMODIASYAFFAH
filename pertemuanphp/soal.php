<?php
$totalKursi = 45;
$kursiDitempati = 28;

// 1. Hitung jumlah kursi kosong
$kursiKosong = $totalKursi - $kursiDitempati; // 45 - 28 = 17

// 2. Hitung persentase kursi kosong
// Rumus: (Kursi Kosong / Total Kursi) * 100
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total Kursi: $totalKursi <br>";
echo "Kursi Ditempati: $kursiDitempati <br>";
echo "Kursi Kosong: $kursiKosong <br>";
echo "Persentase kursi yang masih kosong: " . round($persentaseKosong, 2) . " %";
?>