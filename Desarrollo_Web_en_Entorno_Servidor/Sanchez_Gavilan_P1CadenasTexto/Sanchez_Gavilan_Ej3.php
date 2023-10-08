<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombreUsuario = "jairo_sg03";

    $longitudMinima = 3;
    $longitudMaxima = 20;

    if (strlen($nombreUsuario) < $longitudMinima || strlen($nombreUsuario) > $longitudMaxima) {
        echo "La longitud del nombre de usuario debe estar entre $longitudMinima y $longitudMaxima caracteres.";
    } else {
        if (preg_match('/^[a-zA-Z0-9-_]+$/', $nombreUsuario)) {
            echo "El nombre de usuario es válido: $nombreUsuario";
        } else {
            echo "El nombre de usuario contiene caracteres no permitidos.";
        }
    }
?>

</body>
</html>