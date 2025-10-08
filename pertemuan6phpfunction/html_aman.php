<!DOCTYPE html>
<html>
<head>
    <title>Pencegahan HTML Injection</title>
</head>
<body>
    <h2>Uji Pencegahan HTML Injection</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Input Teks:</label>
        <input type="text" name="input" id="input"><br><br>
        
        <label for="email">Input Email:</label>
        <input type="text" name="email" id="email"><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    $input = "";
    $email = "";
    $pesan = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // --- Langkah 2 ---
        if (isset($_POST['input'])) {
            $input = $_POST['input'];
            $input_aman = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
            $pesan .= "Input Teks yang Aman: " . $input_aman . "<br>";
        }

        // --- Langkah 6 ---
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $pesan .= "Email Awal: " . $email . "<br>";
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $pesan .= "Email: " . $email . " (Valid dan Aman untuk diproses)";
            } else {
                $pesan .= "Email: " . $email . " (Tidak Valid, tangani input yang tidak valid)";
            }
        }
        
        echo "<hr><h3>Hasil Pemrosesan:</h3>";
        echo $pesan;
    }
    ?>
</body>
</html>