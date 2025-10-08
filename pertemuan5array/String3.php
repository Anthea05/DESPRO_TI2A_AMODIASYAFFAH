<?php

// Langkah 5 (Membalikkan string)
$pesan = "Saya arek malang";
echo strrev($pesan). "<br>";

echo "<hr>";

// Langkah 7 (Membalikkan kata demi kata)
$pesan = "saya arek malang";
$pesanPerKata = explode(" ", $pesan);
$pesanPerKata = array_map(fn ($pesan) => strrev($pesan), $pesanPerKata);
$pesan = implode(" ", $pesanPerKata);

echo $pesan. "<br>";
?>