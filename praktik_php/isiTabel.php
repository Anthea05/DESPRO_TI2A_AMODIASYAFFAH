<?php
    // $connect adalah variabel dari file koneksi.php
    // Query ini memasukkan data admin dengan password '123' yang dienkripsi MD5
    $query = "INSERT INTO user (id, username, password) 
              VALUES (1, 'admin', MD5('123'))";
    mysqli_query($connect, $query);
?>