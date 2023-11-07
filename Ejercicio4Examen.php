<?php 
    // JAIRO SÁNCHEZ GAVILÁN 2º DAW
    // EJERCICIO 4 DEL EXAMEN

    $cad = "hola que tal";
    $n = 2;
    

    $palabras = explode(' ', $cad);
    
    if ($n >= 1 && $n <= count($palabras)) {
        $palabraEnPosicionN = $palabras[$n - 1]; 
        echo $palabraEnPosicionN;
    } else {
        echo "La posición especificada no es válida.";
    }
    

?>