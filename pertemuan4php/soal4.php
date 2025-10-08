<?php
$poinPemain = 650;
$batasHadiah = 500;

$statusHadiah = ($poinPemain > $batasHadiah) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: $poinPemain <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? ($statusHadiah)";
?>