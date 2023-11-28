<?php 


//Ejercicio 3 -> Diseñar una funcion que recibe como parámetro un array y un valor numérico.
$array = [5, 3, 9, 1, 7];
$array2 = array("b" => 2, "d" => 1, "a" => 5, "c" => 9);
$valorNumerico = 1;
    function ordenaArraysJairo ($array, $valorNumerico){
        switch($valorNumerico){
            case 1: //Ordenacion de menor a mayor
                arsort($array);
                print_r($array);
            break;
            case 2: // Ordenacion de mayor a menor
                rsort($Array);
                print_r($Array);
            break;
            case 3: // Ordenacion por clave de mayor a menor 
                ksort($array2);
                print_r($array2);
            break;
            case 4: // Ordenacion por clave de mayor a menor
                krsort($array2);
                print_r($array2);
            break;


            default: // Muestra Parámetro incorrecto


        }
}


?>