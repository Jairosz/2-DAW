<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
   $cadena = "Jairo";
   $cadena_rellena_inicio = str_pad($cadena, 20, '#', STR_PAD_LEFT);
   $cadena_rellena_final = str_pad($cadena, 20, '#', STR_PAD_RIGHT);
   $cadena_rellena_ambos = str_pad($cadena, 20, '#', STR_PAD_BOTH);
   
   echo "Rellenado al inicio: $cadena_rellena_inicio<br>";
   echo "Rellenado al final: $cadena_rellena_final<br>";
   echo "Rellenado en ambos lugares: $cadena_rellena_ambos<br>";
   
    ?>
</body>
</html>