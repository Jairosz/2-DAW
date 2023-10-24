<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
    $cadena = "vamos al o'Brian";
    $escaped = addslashes($cadena);
    $original = stripslashes($escaped);
    ?>
</body>
</html>