<?php
$hargaProduk = 120000;
$minimumDiskon = 100000;
$persentaseDiskon = 0.20; 

if ($hargaProduk > $minimumDiskon) {

    $jumlahDiskon = $hargaProduk * $persentaseDiskon;
    $hargaBayar = $hargaProduk - $jumlahDiskon;
    $statusDiskon = "Dapat Diskon";
} else {
 
    $jumlahDiskon = 0;
    $hargaBayar = $hargaProduk;
    $statusDiskon = "Tidak Dapat Diskon";
}

$hargaProduk_rp = number_format($hargaProduk, 0, ',', '.');
$jumlahDiskon_rp = number_format($jumlahDiskon, 0, ',', '.');
$hargaBayar_rp = number_format($hargaBayar, 0, ',', '.');

echo "Harga Produk: Rp $hargaProduk_rp <br>";
echo "Kondisi Diskon: Pembelian di atas Rp " . number_format($minimumDiskon, 0, ',', '.') . " mendapat 20% <br>";
echo "Status: $statusDiskon <br>";
echo "Jumlah Diskon: Rp $jumlahDiskon_rp <br>";
echo "Harga yang Harus Dibayar: **Rp $hargaBayar_rp**";
?>