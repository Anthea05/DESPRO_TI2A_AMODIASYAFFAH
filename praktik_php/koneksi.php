<?php
    $namaHost = "localhost";
    $username = "root"; // Username default MySQL di Laragon adalah "root"
    $password = "";     // Password default MySQL di Laragon adalah KOSONG
    $database = "prakwebdb"; // Nama database yang Anda buat di Bagian 1

    // Membuat koneksi
    $connect = mysqli_connect($namaHost, $username, $password, $database);

    // Cek koneksi
    if (!$connect) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>