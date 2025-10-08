<?php

function perkenalan(){
 echo "Assalamualaikum, ";
 echo "Perkenalkan, nama saya Fira<br/>";
 echo "Senang berkenalan dengan Anda<br/>";
}

// Langkah 1
perkenalan();

// Pertanyaan No 4 (Ubah agar tampil 2 kali)
echo "<hr>";
perkenalan();

// Langkah 3 & 4 (Fungsi dengan Parameter)
function perkenalan_param ($nama, $salam){
 echo $salam.", ";
 echo "Perkenalkan, nama saya ".$nama."<br/>";
 echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan_param ("Hamdana", "Hallo");
echo "<hr>";
$saya = "Fira";
$ucapanSalam = "Selamat pagi";

perkenalan_param ($saya, $ucapanSalam);

// Langkah 6 & 7 (Fungsi dengan Parameter dan Nilai Default)
function perkenalan_default ($nama, $salam = "Assalamualaikum"){
 echo $salam.", ";
 echo "Perkenalkan, nama saya ".$nama."<br/>";
 echo "Senang berkenalan dengan Anda<br/>";
}

echo "<hr>";
perkenalan_default("Hamdana", "Hallo");
echo "<hr>";
$saya = "Fira";
perkenalan_default($saya);
?>