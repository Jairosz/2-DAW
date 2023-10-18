<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 relacion 2</title>
</head>
<body>
   <?php
    $frase = "Bienvenidos al a aventura de aprender PHP en 30 horas";

   
    $longitud_frase = strlen($frase);
    $mitad = $longitud_frase / 2;
    $longitud_central = 20;
    $inicio_central = $mitad - ($longitud_central / 2);
    $parte_central = substr($frase, $inicio_central, $longitud_central);
    echo "Parte central de la frase: $parte_central <br>";
    
    $posicion_php = strpos($frase, "PHP");
    if ($posicion_php !== false) {
        echo "La posición de 'PHP' es: $posicion_php <br>";
    } else {
        echo "'PHP' no se encontró en la frase <br>";
    }
    
    $nueva_frase = str_replace("aventura", "<b>misión</b>", $frase);
    echo "Frase con 'aventura' reemplazada: $nueva_frase <br>";
    
   ?> 
</body>
</html>