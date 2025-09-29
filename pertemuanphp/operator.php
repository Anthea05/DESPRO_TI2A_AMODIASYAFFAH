<?php
$a = 10;
$b = 5;

echo "Nilai awal: \$a = $a, \$b = $b<br>";
echo "<hr>";

// Langkah 3.1: Operator Aritmatika dan Pemangkatan (Langkah 2)
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "OPERATOR ARITMATIKA & PEMANGKATAN <br>";
echo "Penjumlahan (\$a + \$b): $hasilTambah<br>"; // 15
echo "Pengurangan (\$a - \$b): $hasilKurang<br>"; // 5
echo "Perkalian (\$a * \$b): $hasilKali<br>"; // 50
echo "Pembagian (\$a / \$b): $hasilBagi<br>"; // 2
echo "Sisa Bagi (\$a % \$b): $sisaBagi<br>"; // 0
echo "Pemangkatan (\$a ** \$b): $pangkat<br>"; // 100000
echo "<hr>";

// Langkah 3.2: Operator Pembanding (Langkah 5)
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "OPERATOR PEMBANDING (Output True=1, False=Kosong) <br>";
echo "Sama Dengan (\$a == \$b): " . (int)$hasilSama . "<br>"; // 0 (False)
echo "Tidak Sama Dengan (\$a != \$b): " . (int)$hasilTidakSama . "<br>"; // 1 (True)
echo "Lebih Kecil (\$a < \$b): " . (int)$hasilLebihKecil . "<br>"; // 0 (False)
echo "Lebih Besar (\$a > \$b): " . (int)$hasilLebihBesar . "<br>"; // 1 (True)
echo "Lebih Kecil Sama (\$a <= \$b): " . (int)$hasilLebihKecilSama . "<br>"; // 0 (False)
echo "Lebih Besar Sama (\$a >= \$b): " . (int)$hasilLebihBesarSama . "<br>"; // 1 (True)
echo "<hr>";

// Langkah 3.3: Operator Logika (Langkah 8)
// Untuk tujuan demonstrasi logika, kita anggap $a (10) dan $b (5) sebagai TRUE
$hasilAnd = $a && $b; // True AND True -> True (1)
$hasilOr = $a || $b; // True OR True -> True (1)
$hasilNotA = !$a; // NOT True -> False (Kosong)
$hasilNotB = !$b; // NOT True -> False (Kosong)

echo "OPERATOR LOGIKA <br>";
echo "AND (\$a && \$b): " . (int)$hasilAnd . "<br>";
echo "OR (\$a || \$b): " . (int)$hasilOr . "<br>";
echo "NOT \$a (!\$a): " . (int)$hasilNotA . "<br>";
echo "NOT \$b (!\$b): " . (int)$hasilNotB . "<br>";
echo "<hr>";

// Langkah 3.4: Operator Penugasan (Langkah 11)
// Catatan: Operasi ini mengubah nilai dari $a secara berurutan.
echo "OPERATOR PENUGASAN (Nilai awal \$a=10) <br>";

$a += $b; // $a = $a + $b (10 + 5) -> $a = 15
echo "Penugasan Penjumlahan (\$a += \$b): \$a sekarang = $a<br>";

$a -= $b; // $a = $a - $b (15 - 5) -> $a = 10
echo "Penugasan Pengurangan (\$a -= \$b): \$a sekarang = $a<br>";

$a *= $b; // $a = $a * $b (10 * 5) -> $a = 50
echo "Penugasan Perkalian (\$a *= \$b): \$a sekarang = $a<br>";

$a /= $b; // $a = $a / $b (50 / 5) -> $a = 10
echo "Penugasan Pembagian (\$a /= \$b): \$a sekarang = $a<br>";

$a %= $b; // $a = $a % $b (10 % 5) -> $a = 0
echo "Penugasan Sisa Bagi (\$a %= \$b): \$a sekarang = $a<br>";

// Kembalikan nilai $a dan $b ke awal untuk operasi selanjutnya
$a = 10;
$b = 5;
echo "<hr>";

// Langkah 3.5: Operator Identik (Langkah 14)
$hasilIdentik = $a === $b; // Membandingkan nilai (10 == 5) DAN tipe data (int === int)
$hasilTidakIdentik = $a !== $b; // Membandingkan nilai (10 != 5) ATAU tipe data (int !== int)

echo "OPERATOR IDENTIK <br>";
echo "Identik (\$a === \$b): " . (int)$hasilIdentik . "<br>"; // 0 (False)
echo "Tidak Identik (\$a !== \$b): " . (int)$hasilTidakIdentik . "<br>"; // 1 (True)
echo "<hr>";
?>