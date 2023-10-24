<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php
    $frase = "No me gusta usar +*[] en cadenas";
    $escaped = preg_replace('/[^a-zA-Z\s]/', ' ', $frase);
    echo $escaped;
    $original = preg_replace('/\s+/', ' ', $escaped);
    echo $original;
        
    ?>
</body>
</html>