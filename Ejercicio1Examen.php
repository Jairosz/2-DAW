<?php 
    $modo = 3;
    switch ($modo) {
        case 1: // COMPARAR CADENAS $MOD0 = 1 
            $cadena1 = "Hola Mundo";
            $cadena2 = "hola mundo";
            
            if ($cadena1 === $cadena2) {
                echo "Las cadenas son iguales (sensible a mayúsculas y minúsculas)";
            } else {
                echo "Las cadenas son diferentes";
            }
            
        case 2: // cOMPARAR CADENAS CASE SENSITIVE  $MOD0 = 2 
        if (strcasecmp($palabra1, $palabra2) === 0) {
                echo "";
        } else {
                echo "";
        }
            break;
        case 3: // comparacion natural 
        
            break;
        case 4: // strncmp(string $str1, string $str2, int $len): int
            $cadena3 = "Jairo";
            $cadena4 = "Jairo como estás";
            
            $n = 5; 
            
            if (strncmp($cadena1, $cadena2, $n) === 0) {
                echo "Las primeras $n letras de las cadenas son iguales";
            } else {
                echo "Las cadenas difieren en las primeras $n letras";
            }
            
            break;
        default:
    }









?>