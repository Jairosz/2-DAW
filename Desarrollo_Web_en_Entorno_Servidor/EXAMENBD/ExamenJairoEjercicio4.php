<?php 

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


?>