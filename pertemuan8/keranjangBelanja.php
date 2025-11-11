<?php
    // Periksa apakah cookie 'beliNovel' ada. Jika ada, gunakan nilainya. Jika tidak, beri nilai 0.
    $beliNovel = isset($_COOKIE['beliNovel']) ? $_COOKIE['beliNovel'] : 0;

    // Lakukan hal yang sama untuk 'beliBuku'
    $beliBuku = isset($_COOKIE['beliBuku']) ? $_COOKIE['beliBuku'] : 0;

    echo "Jumlah Novel : " . $beliNovel . "<br>";
    echo "Jumlah Buku : " . $beliBuku ;
?>