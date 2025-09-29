<?php
echo "<h3>4.1 Struktur Kontrol: If, Else If, Else</h3>";
// Langkah 2: If, Else If, Else
$nilai = 85; // Ubah nilai untuk mencoba kondisi lain

if ($nilai > 90) {
    echo "Nilai Anda sangat baik! (A)";
} elseif ($nilai >= 75) {
    echo "Nilai Anda baik! (B)";
} else {
    echo "Nilai Anda kurang. (C)";
}
echo "<hr>";

echo "<h3>4.2 Struktur Kontrol: Switch Case</h3>";
// Langkah 6: Switch Case
$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari ini adalah hari kerja, semangat! (Senin)";
        break;
    case "Sabtu":
    case "Minggu":
        echo "Hari ini adalah hari libur, saatnya bersantai! ($hari)";
        break;
    default:
        echo "Ini adalah hari kerja biasa. ($hari)";
}
echo "<hr>";

echo "<h3>4.3 Struktur Kontrol: For Loop</h3>";
// Langkah 10: For Loop
echo "Perulangan For:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke: $i <br>";
}
echo "<hr>";

echo "<h3>4.4 Struktur Kontrol: While Loop</h3>";
// Langkah 14: While Loop
$counter = 1;
echo "Perulangan While:<br>";
while ($counter <= 5) {
    echo "Perulangan ke: $counter <br>";
    $counter++;
}
echo "<hr>";

echo "<h3>4.5 Struktur Kontrol: Do-While Loop</h3>";
// Langkah 18: Do-While Loop
$i = 1;
echo "Perulangan Do-While:<br>";
do {
    echo "Perulangan ke: $i <br>";
    $i++;
} while ($i <= 5);
echo "<hr>";
?>