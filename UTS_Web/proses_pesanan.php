<?php

session_start(); //menyimpan data di array

//menangkap data dari form post
if ($_SERVER["REQUEST_METHOD"] == "POST") { //mengecek request 
    $nama = trim($_POST['nama']); //mengahapus spasi
    $email = trim($_POST['email']); 
    $kota = trim($_POST['kota']);
    $pesan = trim($_POST['pesan']);
    $keranjang = json_decode($_POST['keranjang_data'], true);
    //mengubah data json dari form menjadi array 

    // Validasi server 
    if (!empty($nama) && !empty($email) && !empty($kota) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($keranjang)) {
        
        $pesananBaru = [
            'nama' => htmlspecialchars($nama),
            'email' => htmlspecialchars($email),
            'kota' => htmlspecialchars($kota),
            'pesan' => htmlspecialchars($pesan),
            'keranjang' => $keranjang
        ];

        if (!isset($_SESSION['semua_pesanan'])) {
            $_SESSION['semua_pesanan'] = [];
        }

        $_SESSION['semua_pesanan'][] = $pesananBaru;
        $_SESSION['status'] = 'sukses'; // Tandai sebagai sukses

    } else {
        // Jika validasi server gagal
        $_SESSION['status'] = 'error'; // Tandai sebagai error
    }
    
    // Alihkan ke halaman hasil untuk menampilkan status (sukses atau error)
    header('Location: hasil.php');
    exit();
}
?>