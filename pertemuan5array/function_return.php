<?php

function hitungUmur($thn_lahir, $thn_sekarang) {
 $umur = $thn_sekarang - $thn_lahir;
 return $umur;
}

// Langkah 10
echo "Umur saya adalah ". hitungUmur(2000, 2025). " tahun";
echo "<hr>";

// Langkah 14 (Memanggil fungsi di dalam fungsi lain)
function perkenalan_nested ($nama, $salam = "Assalamualaikum") {
 echo $salam.", ";
 echo "Perkenalkan, nama saya ".$nama."<br/>";
 echo "Saya berusia ". hitungUmur(2000, 2025)." tahun<br/>";
 echo "Senang berkenalan dengan anda<br/>";
}

perkenalan_nested ("Fira");

?>