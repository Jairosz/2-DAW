<?php
function calculaCantidad($anios, $deposito, $interes) {
    $cantidad = $deposito * (1 + $interes / 100) ** $anios;
    return number_format($cantidad, 2, '.', '');
}

function informacionPais($pais, $capital = 'Madrid', $habitantes = 'muchos') {
    echo "La capital de $pais es $capital y tiene $habitantes habitantes.<br>";
}

function diasASegundos($dias) {
    return $dias * 24 * 60 * 60;
}

function escribirEncabezadoHTML($titulo) {
    echo "<html><head><title>$titulo</title></head><body>";
}

function semisuma($num1, $num2) {
    return ($num1 + $num2) / 2;
}

function enNegrita($texto) {
    return "<b>$texto</b>";
}

function cuadrado($numero) {
    return $numero * $numero;
}

function cubo($numero) {
    return $numero * $numero * $numero;
}

function sumatorio($numero) {
    return ($numero * ($numero - 1)) / 2;
}

$interes = 5;
echo "<p><b>El interés actual es $interes%.</b></p>";
echo "<p>Si usted deposita 100 &#x20AC; hoy, sus ahorros crecerán a " .
    calculaCantidad(5, 100, $interes) . "&#x20AC; en 5 años.</p>";
echo "<p>Si usted deposita 1.500&#x20AC; hoy, sus ahorros crecerán a " .
    calculaCantidad(20, 1500, $interes) . "&#x20AC; después de 20 años.</p>";

informacionPais("España");
informacionPais("Portugal", "Lisboa");
informacionPais("Francia", "Paris", 6000000);

echo "Número de segundos en 10 días: " . diasASegundos(10) . "<br>";

escribirEncabezadoHTML("Título de la Página");

echo "Semisuma de 5 y 8: " . semisuma(5, 8) . "<br>";
echo "Texto en negrita: " . enNegrita("Hola, Mundo") . "<br>";
echo "Cuadrado de 4: " . cuadrado(4) . "<br>";
echo "Cubo de 3: " . cubo(3) . "<br>";
echo "Sumatorio de 4: " . sumatorio(4) . "<br>";

echo "</body></html>";
