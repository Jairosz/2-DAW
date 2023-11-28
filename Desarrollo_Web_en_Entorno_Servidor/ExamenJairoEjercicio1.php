
<?php 

//Ejercicio 1 -> Diseñar una funcion que dibuje un arbol de navidad, para ello debemos crear un array siguiendo las siguientes indicaciones: A partir del alto arbol ( que sera un parametro de la funcion) se generará el siguiebte array (ejemplo $altura = 5). Donde el "*" representa la nieve y el caracter "\" el arbol A continuacion deberás generar una
// tabla en html que escriba el contenido del array. La nieve se scribira en color blanco sobre azul y el arbol en verde sobre azul
function dibujarArbolNavidad($altura) {
    $arbol = [];

    for ($i = 1; $i <= $altura; $i++) {
        $espacios = str_repeat("&nbsp;", $altura - $i);
        $arbol[] = $espacios . str_repeat('\\', 2 * $i - 1);
    }

    return $arbol;
}

// Probando la función con altura 5
$alturaArbol = 5;
$contenidoArbol = dibujarArbolNavidad($alturaArbol);

// Mostrar el contenido del array en una tabla HTML
echo '<table border="">';
foreach ($contenidoArbol as $linea) {
    echo '<tr>';
    echo '<td bgcolor="#00FFFF"><span>\\</span></td>';
    echo '<td>' . $linea . '</td>';
    echo '</tr>';
}
echo '</table>';


?>