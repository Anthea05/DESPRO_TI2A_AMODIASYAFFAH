<?php

$pattern = '/[a-z]/';
$text = 'This is a Sample Text.';

if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

echo "<br>";

// Soal 5.5: Mengubah kuantifier dari '*' menjadi '?'
$pattern = '/go?d/';
$text = 'god is good.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan (go?d): " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}