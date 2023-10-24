<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
    $cadena1 = "No voy a dimitir";
    $cadena2 = "No voy a dimitir no voy a dimitir";
    
    if ($cadena1 < $cadena2) {
        echo "La cadena 1 es menor.";
    } elseif ($cadena1 > $cadena2) {
        echo "La cadena 2 es menor.";
    } else {
        echo "Las cadenas son iguales.";
    }
    ?>
</body>
</html>