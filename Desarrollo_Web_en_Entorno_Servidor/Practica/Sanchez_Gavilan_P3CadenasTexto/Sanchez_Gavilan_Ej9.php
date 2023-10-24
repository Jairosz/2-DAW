<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
    $cadena = "Esta es una cadena";
    $escaped = str_replace(["e", "i", "o", "u"], ["\e", "\i", "\o", "\u"], $cadena);
    $original = str_replace(["\e", "\i", "\o", "\u"], ["e", "i", "o", "u"], $escaped);
    ?>
</body>
</html>