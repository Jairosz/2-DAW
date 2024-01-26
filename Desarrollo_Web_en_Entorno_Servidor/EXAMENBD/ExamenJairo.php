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

//Ejercicio 1 -> Diseñar una funcion que dibuje un arbol de navidad, para ello debemos crear un array siguiendo las siguientes indicaciones: A partir del alto arbol ( que sera un parametro de la funcion) se generará el siguiebte array (ejemplo $altura = 5). Donde el "*" representa la nieve y el caracter "\" el arbol A continuacion deberás generar una
// tabla en html que escriba el contenido del array. La nieve se scribira en color blanco sobre azul y el arbol en verde sobre azul
function dibujarArbolNavidad($altura) {
    $arbol = [];

    for ($i = 1; $i <= $altura; $i++) {
        $espacios = str_repeat("&nbsp;", $altura - $i);
        $nieve = str_repeat('<span style="color: white; background-color: blue;">*</span>', 2 * $i - 1);
        $arbol[] = $espacios . $nieve;
    }

    return $arbol;
}

// Probando la función con altura 5
$alturaArbol = 5;
$contenidoArbol = dibujarArbolNavidad($alturaArbol);

// Mostrar el contenido del array en una tabla HTML
echo '<table border="0" cellpadding="5" style="font-family: monospace;">';
foreach ($contenidoArbol as $linea) {
    echo '<tr>';
    echo '<td><span style="color: green; background-color: blue;">\\</span></td>';
    echo '<td>' . $linea . '</td>';
    echo '</tr>';
}
echo '</table>';



//Ejercicio 2 -> Diseñe una funcion que reciba como parametro un array y escriba en la pagina web de forma tabulada el contenido de ese array sin importar el numero de dimensiones que tenga.
//Ejercicio 4 Realizar una funcion que recibe como parametro una cadena y un valor numerico. La funcion debe devolver una cadena igual que la que se paso por parametro excepto en que se ha eliminado la palabra situada en la posicion que se ha pasado por parametro. Se debe hacer utilizando arrays. Si se especifica un numero de palara que no existe debe escribir un mensaje de error
function eliminarPalabra($cadena, $posicion) {
    $palabras = explode(" ", $cadena); // (ARRAY) paso de cadena a ARRAY.
    
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

$resultado = eliminarPalabra($cadena, $posicionAEliminar);
echo $resultado;
ordenaArraysJairo($array, $array2, $valorNumerico);

?>