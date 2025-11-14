<?php
    // $connect adalah variabel dari file koneksi.php
    $query = "CREATE TABLE user (
                id INT(11) PRIMARY KEY,
                username VARCHAR(50),
                password VARCHAR(50)
            )";
    mysqli_query($connect, $query);
?>