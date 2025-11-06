<?php
// Menggunakan quantifier {n,m}, contoh {1,2}
$pattern = '/go{1,2}d/'; // 'o' minimal 1 kali, maksimal 2 kali
$text = 'god is good, a good book is a godsend, gd';

if (preg_match_all($pattern, $text, $matches)) {
    echo "Cocokkan ditemukan: " . implode(', ', $matches[0]);
} else {
    echo "Tidak ada yang cocok!";
}
?>