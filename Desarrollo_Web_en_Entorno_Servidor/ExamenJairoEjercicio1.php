
<?php 

//Ejercicio 1 -> Diseñar una funcion que dibuje un arbol de navidad, para ello debemos crear un array siguiendo las siguientes indicaciones: A partir del alto arbol ( que sera un parametro de la funcion) se generará el siguiebte array (ejemplo $altura = 5). Donde el "*" representa la nieve y el caracter "\" el arbol A continuacion deberás generar una
// tabla en html que escriba el contenido del array. La nieve se scribira en color blanco sobre azul y el arbol en verde sobre azul
function dibujarArbolNavidad($altura) {
    $arbol = [];

    for ($i = 1; $i <= $altura; $i++) {
        $asteriscos = str_repeat('*', $altura - $i);
        $contenido = str_repeat('\\', 2 * $i - 1);
        $arbol[] = $asteriscos . $contenido . $asteriscos;
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
    echo '<td>' . $linea . '</td>';
    echo '</tr>';
}
echo '</table>';


?>