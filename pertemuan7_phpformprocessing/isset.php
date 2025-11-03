<?php

$umur;
if(isset($umur) && $umur >= 18) {
    echo "anda sudah dewasa.";
} else {
    echo "anda belum, dewasa atau variable 'umur' tidak ditemukan.";

    echo "<br>";

    $data = array("nama" => "jane", "usia" => 25);
    if (isset($data["nama"])) {
        echo "nama: " . $data["nama"];
    } else {
        echo "variable 'nama' tidak ditemukan dalam array.";
    }
}
?>