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
    $escaped = preg_replace('/[eiou]/i', '', $cadena);
    echo $escaped;
    
    $original = preg_replace('/\e|\i|\o|\u/i', 'a', $escaped);
    echo $original;
        
    ?>
</body>
</html>