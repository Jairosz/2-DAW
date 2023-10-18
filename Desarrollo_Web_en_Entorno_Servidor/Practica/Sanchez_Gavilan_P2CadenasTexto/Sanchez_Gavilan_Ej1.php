<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 relacion 2</title>
</head>
<body>
    <?php
    $frase = "Esta cadena tiene muchas letras";

    // La posición de la primera ocurrencia de la letra 'a'.
    $posicion_a = strpos($frase, 'a');
    echo "La posición de la primera 'a' es: $posicion_a <br>";
    
    // La posición de la primera ocurrencia de la letra 'm'.
    $posicion_m = strpos($frase, 'm');
    echo "La posición de la primera 'm' es: $posicion_m <br>";
    
    // La posición de la primera ocurrencia de la palabra "tiene".
    $posicion_tiene = strpos($frase, 'tiene');
    echo "La posición de 'tiene' es: $posicion_tiene <br>";
    
    // La primera ocurrencia desde el final de la letra 'a'.
    $posicion_a_final = strrpos($frase, 'a');
    echo "La posición de la última 'a' desde el final es: $posicion_a_final <br>";
    
    // La frase desde la aparición de la palabra "cadena" hasta el final.
    $posicion_cadena = strpos($frase, 'cadena');
    if ($posicion_cadena !== false) {
        $cadena_desde_cadena = substr($frase, $posicion_cadena);
        echo "Frase desde 'cadena' hasta el final: $cadena_desde_cadena <br>";
    }
    
    // La cadena desde el carácter 12 hasta el final.
    $string_desde_12 = substr($frase, 12);
    echo "Cadena desde el carácter 12 hasta el final: $string_desde_12 <br>";
    
    // La cadena devolviendo 6 caracteres desde el carácter 18.
    $string_6_caracteres_desde_18 = substr($frase, 18, 6);
    echo "Cadena de 6 caracteres desde el carácter 18: $string_6_caracteres_desde_18 <br>";
    
    // La cadena devolviendo los 6 últimos caracteres.
    $ultimos_6_caracteres = substr($frase, -6);
    echo "Los últimos 6 caracteres: $ultimos_6_caracteres <br>";
    
    // La cadena desde la posición 26, contando desde atrás, 6 caracteres.
    $string_desde_atras = substr($frase, -26, 6);
    echo "Cadena desde la posición 26 desde atrás, 6 caracteres: $string_desde_atras <br>";
    
    // La cadena empezando en el carácter 4 y terminando en el 7 desde atrás.
    $string_personalizado = substr($frase, 4, -7);
    echo "Cadena personalizada: $string_personalizado <br>";
    ?>
</body>
</html>