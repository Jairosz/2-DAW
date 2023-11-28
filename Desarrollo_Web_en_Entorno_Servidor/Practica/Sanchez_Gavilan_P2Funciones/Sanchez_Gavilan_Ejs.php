<?php
function intercambio(&$num1, &$num2) {
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
}

$a = 3;
$b = 7;
intercambio($a, $b);

echo "Después de intercambiar, \$a = $a y \$b = $b";
?>
<?php
function mediaAritmetica() {
    $numeros = func_get_args(); 
    $total = count($numeros);

    if ($total > 0) {
        $suma = array_sum($numeros);
        return $suma / $total;
    } else {
        return "No se proporcionaron números.";
    }
}

echo "La media es: " . mediaAritmetica(2, 4, 6, 8);
?>
<?php
function mediaAritmeticaV2(...$numeros) {
    $total = count($numeros);

    if ($total > 0) {
        $suma = array_sum($numeros);
        return $suma / $total;
    } else {
        return "No se proporcionaron números.";
    }
}

echo "La media es: " . mediaAritmeticaV2(2, 4, 6, 8);
?>
