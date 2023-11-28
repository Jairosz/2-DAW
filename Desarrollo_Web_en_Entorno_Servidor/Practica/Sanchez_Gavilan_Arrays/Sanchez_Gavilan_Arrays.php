<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Punto 1: Array de días de la semana
$dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];

// Recorriendo con foreach
foreach ($dias as $indice => $valor) {
    echo "Índice: $indice, Valor: $valor <br>";
}

// Recorriendo con for
$total_dias = count($dias);
for ($i = 0; $i < $total_dias; $i++) {
    echo "Índice: $i, Valor: " . $dias[$i] . "<br>";
}

// Punto 2: Trabajar con arrays de alumnos
$alumnos = ["Juan", "María", "Pedro", "Laura", "Carlos"];

// Mostrar los 3 primeros alumnos
echo "Primeros 3 alumnos: ";
print_r(array_slice($alumnos, 0, 3));

// Mostrar los 2 últimos alumnos
echo "Últimos 2 alumnos: ";
print_r(array_slice($alumnos, -2));

// Punto 3: Array de colores
$colores = [
    "fuertes" => ["Rojo" => "FF0000", "Verde" => "00FF00", "Azul" => "0000FF"],
    "suaves" => ["Rosa" => "FE9ABC", "Amarillo" => "FDF189", "Malva" => "BC8F8F"]
];

// Mostrar la tabla de colores
foreach ($colores as $tipo => $lista_colores) {
    echo "Colores $tipo: ";
    foreach ($lista_colores as $color => $codigo) {
        echo "$color: $codigo ";
    }
    echo "<br>";
}

// Comprobar si ciertos colores están en el array
echo "¿FF88CC está en el array de colores? " . (in_array("FF88CC", $colores["fuertes"]) ? "Sí" : "No") . "<br>";
echo "¿FF0000 está en el array de colores? " . (in_array("FF0000", $colores["fuertes"]) ? "Sí" : "No") . "<br>";

// Punto 5: Trabajar con el array pila
$pila = ["cinco" => 5, "uno" => 1, "cuatro" => 4, "dos" => 2, "tres" => 3];

// Ordenar por valor (ascendente y descendente) manteniendo la asociación clave-valor
asort($pila);
print_r($pila);

arsort($pila);
print_r($pila);

// Ordenar por clave (ascendente)
ksort($pila);
print_r($pila);

// Ordenar por valor (ascendente y descendente) sin mantener la asociación clave-valor
sort($pila);
print_r($pila);

rsort($pila);
print_r($pila);

// Punto 6: Array de países y capitales
$paises_capitales = [
    "España" => "Madrid",
    "Francia" => "París",
    "Alemania" => "Berlín",
    // ...otros países y capitales
];

// Mostrar la frase por país y capital
foreach ($paises_capitales as $pais => $capital) {
    echo "La capital de $pais es $capital. <br>";
}

// Ordenar por nombre del país y luego por nombre de la capital
ksort($paises_capitales);
asort($paises_capitales);
foreach ($paises_capitales as $pais => $capital) {
    echo "La capital de $pais es $capital. <br>";
}

// Punto 7: Contar valores iguales a 2 en un array aleatorio
$array_aleatorio = []; // Aquí deberías generar el array aleatorio de 10 valores

// Simulando valores aleatorios
for ($i = 0; $i < 10; $i++) {
    $array_aleatorio[] = rand(1, 10);
}

// Contar el número de veces que aparece el valor 2 en el array
$numero_de_dos = array_count_values($array_aleatorio)[2];
echo "Número de veces que aparece el valor 2: $numero_de_dos";
?>

</body>
</html>