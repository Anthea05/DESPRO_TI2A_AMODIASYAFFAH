<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
    $color = isset($_SESSION["favcolor"]) ? $_SESSION["favcolor"] : "not set";
    $animal = isset($_SESSION["favanimal"]) ? $_SESSION["favanimal"] : "not set";

    echo "Favorite color is " . $color . ".<br>";
    echo "Favorite animal is " . $animal . ".";
?>
</body>
</html>