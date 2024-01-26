<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Checkbox</title>
</head>
<body>
    <form method="post" action="procesar_formulario.php">
        <label>
            <input type="checkbox" name="frutas[]" value="manzana"> Manzana
        </label>
        <br>
        <label>
            <input type="checkbox" name="frutas[]" value="banana"> Banana
        </label>
        <br>
        <label>
            <input type="checkbox" name="frutas[]" value="naranja"> Naranja
        </label>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica si la clave 'frutas' existe en el array $_POST
    if (isset($_POST['frutas']) && is_array($_POST['frutas'])) {
        // Recorre las casillas de verificación seleccionadas
        foreach ($_POST['frutas'] as $frutaSeleccionada) {
            // Haz algo con cada valor de casilla de verificación seleccionada
            echo "Fruta Seleccionada: $frutaSeleccionada<br>";
        }
    } else {
        echo "No se seleccionaron frutas.";
    }
} else {
    // Redirige o maneja el caso en el que el formulario no se envió mediante POST
    echo "Formulario no enviado.";
}
?>
