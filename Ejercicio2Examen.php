<?php
    // JAIRO SÁNCHEZ GAVILÁN 2º DAW
    // EJERCICIO 2 DEL EXAMEN
    $valor = 123;
    $formato = 2; 

    switch ($formato) {
        case 1:
            echo "El valor pasado es $valor en decimal";
            break;
        case 2:
            echo "El valor pasado es " . dechex($valor) . " en hexadecimal";
            break;
        case 3:
            echo "El valor pasado es " . strtoupper(dechex($valor)) . " en hexadecimal ";
            break;
        case 4:
            echo "El valor pasado es ". decoct($valor) . " en octal";
            break;
        case 5:
            echo "El valor pasado es  " . number_format($valor, 2, '.', '') . "e". " en notacion exponencial";
            break;
        case 6:
            echo "El valor pasado es " . decbin($valor)." en binario ";
            break;
        default:
            echo "Formato incorrecto!!!";
    }
    ?>