<?php
echo "<h3>5.1 Array Satu Dimensi</h3>";
// Langkah 2: Array Satu Dimensi
$mahasiswa = ["Wahid", "Elmo", "Lendis", "Fabri"];

// Mengakses dan menampilkan semua elemen array
echo "Daftar Mahasiswa:<br>";
echo "1. " . $mahasiswa[0] . "<br>";
echo "2. " . $mahasiswa[1] . "<br>";
echo "3. " . $mahasiswa[2] . "<br>";
echo "4. " . $mahasiswa[3] . "<br>";
echo "<hr>";

echo "<h3>5.2 Array Dua Dimensi (Implicit)</h3>";
// Langkah 6: Array Dua Dimensi
// [Baris][Kolom]
$matriks = [
    [1, 2, 3], // Baris 0
    [4, 5, 6], // Baris 1
    [7, 8, 9]  // Baris 2
];

// Mengakses nilai: $matriks[baris][kolom]
echo "Nilai di Baris 1, Kolom 2 (\$matriks[0][1]): " . $matriks[0][1] . "<br>"; // Output: 2
echo "Nilai di Baris 3, Kolom 3 (\$matriks[2][2]): " . $matriks[2][2] . "<br>"; // Output: 9

echo "Tampilan Matriks:<br>";
// Iterasi menggunakan Nested For Loop
for ($i = 0; $i < 3; $i++) { // Loop Baris
    for ($j = 0; $j < 3; $j++) { // Loop Kolom
        echo $matriks[$i][$j] . " ";
    }
    echo "<br>";
}
echo "<hr>";

echo "<h3>5.3 Array Asosiatif</h3>";
// Langkah 10: Array Asosiatif
$mahasiswaAssociative = [
    "nim" => "A11.2023.12345",
    "nama" => "Budi Santoso",
    "semester" => 3,
    "ipk" => 3.90
];

// Mengakses nilai menggunakan key
echo "NIM: " . $mahasiswaAssociative["nim"] . "<br>";
echo "Nama: " . $mahasiswaAssociative["nama"] . "<br>";
echo "IPK: " . $mahasiswaAssociative["ipk"] . "<br>";

echo "<br>Iterasi dengan Foreach:<br>";
// Iterasi menggunakan foreach
foreach ($mahasiswaAssociative as $key => $value) {
    echo "$key: $value <br>";
}
echo "<hr>";
?>