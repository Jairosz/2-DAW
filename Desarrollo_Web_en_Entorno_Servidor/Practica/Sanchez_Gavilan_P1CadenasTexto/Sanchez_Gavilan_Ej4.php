<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej4 Jairo Sánchez Gavilán</title>
</head>
<body>
    <? 
    $cadena = "hola soy jairo";

    $palabras = explode(" ", $cadena);
    
    for ($i = 0; $i < 2 && $i < count($palabras); $i++) {
        echo $palabras[$i];
    }
    

    
    ?>
</body>
</html>