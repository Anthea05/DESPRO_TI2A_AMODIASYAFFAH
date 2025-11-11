<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
    // Periksa apakah session 'favcolor' ada, jika tidak, beri nilai default
    $color = isset($_SESSION["favcolor"]) ? $_SESSION["favcolor"] : "not set";
    
    // Periksa apakah session 'favanimal' ada, jika tidak, beri nilai default
    $animal = isset($_SESSION["favanimal"]) ? $_SESSION["favanimal"] : "not set";

    echo "Favorite color is " . $color . ".<br>";
    echo "Favorite animal is " . $animal . ".";
?>
</body>
</html>