<!DOCTYPE html>
<html>
<head>
    <title>HTML Injection Aman</title>
</head>
<body>
    <h2>Form Anti HTML Injection</h2>
    <form method="post" action="">
        <label for="input">Input Berbahaya:</label>
        <input type="text" name="input" id="input" style="width: 300px;">
        <input type="submit" value="Submit">
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['input'])) {
        echo "<h3>Hasil Input Setelah Sanitasi:</h3>";
        $input = $_POST['input'];
        $safe_input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        echo $safe_input;
    }
    ?>
</body>
</html>