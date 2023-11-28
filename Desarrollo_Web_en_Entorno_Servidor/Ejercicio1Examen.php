<?php 
    // JAIRO SÁNCHEZ GAVILÁN 2º DAW
    // EJERCICIO 1 DEL EXAMEN
    $modo = 1;
    switch ($modo) {
        case 1: // COMPARAR CADENAS $MOD0 = 1 
            $cadena1 = "Hola Mundo";
            $cadena2 = "Hola, cómo estás";
            
            $longitud1 = strlen($cadena1);
            $longitud2 = strlen($cadena2);
            
            if ($longitud1 === $longitud2) {
                echo "Las cadenas tienen la misma longitud";
            } elseif ($longitud1 > $longitud2) {
                echo "La cadena '$cadena1' es más larga que '$cadena2'.";
            } else {
                echo "La cadena '$cadena2' es más larga que '$cadena1'.";
            }
            
        case 2: // cOMPARAR CADENAS CASE SENSITIVE  $MOD0 = 2 
        if (strcasecmp($palabra1, $palabra2) === 0) {
                echo $palabra1." es igual a " . $palabra2;
        } else {
                echo "las cadenas no son iguales";
        }
            break;
        case 3: // comparacion natural  $MODO = 3
        
            break;
        case 4: // COMPARACION N-PRIMEROS CARACTERES $MODO = 4
            $cadena3 = "Jairo";
            $cadena4 = "Jairo Sanchez";
            
            $n = 4; 
            
            if (strncmp($cadena1, $cadena2, $n) === 0) {
                echo $cadena1 . " es igual que " . $cadena2 ;
            } else {
                echo "las cadenas no son iguales en las primeras $n letras";
            }
            
            break;
        default:
    }









?>