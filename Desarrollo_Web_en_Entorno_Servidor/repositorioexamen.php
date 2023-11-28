<?php 

//Ejercicio 3 -> Diseñar una funcion que recibe como parámetro un array y un valor numérico.
$array = [5, 3, 9, 1, 7];
$array2 = array("b" => 2, "d" => 1, "a" => 5, "c" => 9);
$valorNumerico = 1;

function ordenaArraysJairo($array, $array2, $valorNumerico) {
    switch ($valorNumerico) {
        case 1: //Ordenacion de menor a mayor
            sort($array);
            print_r($array);
            break;
        case 2: // Ordenacion de mayor a menor
            rsort($array);
            print_r($array);
            break;
        case 3: // Ordenacion por clave de menor a mayor 
            ksort($array2);
            print_r($array2);
            break;
        case 4: // Ordenacion por clave de mayor a menor
            krsort($array2);
            print_r($array2);
            break;
        default: // Muestra Parámetro incorrecto
            echo "Parámetro incorrecto";
            break;
    }
}

//Ejercicio 1 -> Diseñar una funcion que dibuje un arbol de navidad, para ello debemos crear un array siguiendo las siguientes indicaciones: A partir del alto arbol ( que sera un parametro de la funcion) se generará el siguiebte array (ejemplo $altura = 5)
function dibujarArbolNavidad($altura) {
    for ($i = 1; $i <= $altura; $i++) {
        echo str_repeat(' ', $altura - $i);
        echo str_repeat('*', $i);
        echo '/';
        echo str_repeat('*', $i);
        echo "\n";
    }
}
//Ejercicio 4 Realizar una funcion que recibe como parametro una cadena y un valor numerico. La funcion debe devolver una cadena igual que la que se paso por parametro excepto en que se ha eliminado la palabra situada en la posicion que se ha pasado por parametro. Se debe hacer utilizando arrays. Si se especifica un numero de palara que no existe debe escribir un mensaje de error
function eliminarPalabraEnPosicion($cadena, $posicion) {
    $palabras = explode(" ", $cadena); // Convertir la cadena en un array de palabras
    
    if ($posicion < 1 || $posicion > count($palabras)) {
        return "Error: La posición especificada no existe.";
    }

    $posicion--; 
    array_splice($palabras, $posicion, 1); 
    
    $nuevaCadena = implode(" ", $palabras); 
    
    return $nuevaCadena;
}

$cadena = "ME GUSTA MUCHO PHP Y JAVASCRIPT";
$posicionAEliminar = 4;

$resultado = eliminarPalabraEnPosicion($cadena, $posicionAEliminar);
echo $resultado;


//funciones
dibujarArbolNavidad(4);


ordenaArraysJairo($array, $array2, $valorNumerico);

?>