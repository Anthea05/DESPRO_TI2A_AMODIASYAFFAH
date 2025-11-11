<?php
// 1. Menyertakan file koneksi database
include "koneksi.php";

// 2. Perintah SQL untuk membuat tabel user
$sql = "CREATE TABLE user (
    id INT(11) PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
)";

// 3. Menjalankan query menggunakan mysqli_query()
$hasil = mysqli_query($connect, $sql);

// 4. (Opsional) Memberi pesan berhasil atau gagal
if ($hasil) {
    echo "Tabel user berhasil dibuat";
} else {
    echo "Tabel user gagal dibuat: " . mysqli_error($connect);
}

// 5. Menutup koneksi
mysqli_close($connect);
?>