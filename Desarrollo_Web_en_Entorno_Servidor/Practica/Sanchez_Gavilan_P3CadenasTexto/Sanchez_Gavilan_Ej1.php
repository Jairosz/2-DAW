<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 </title>
</head>
<body>
    <?php
        $frase = "NO VOY A DIMITIR";
        $palabras = explode(" ", $frase);
        $ultima_palabra = end($palabras);
        echo $ultima_palabra;  
    ?>
</body>
</html>