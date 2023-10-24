<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    $cadena = "NO VOY A DIMITIR";
    if (preg_match("/[aeiouAEIOU]/", $cadena)) {
        echo "La cadena contiene al menos una vocal.";
    } else {
        echo "La cadena no contiene vocales.";
    }
    ?> 
</body>
</html>