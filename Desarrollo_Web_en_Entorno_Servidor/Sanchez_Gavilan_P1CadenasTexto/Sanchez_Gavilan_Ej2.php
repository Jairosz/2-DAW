<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
<?php
// Cadena que deseas comprobar
$cadena = "jairo@gmail.com";
$nombreUsuario = strstr($cadena, '@', true);

// Comprueba si la cadena contiene "@" y "."
echo "La cadena jairo@gmail.com";

if (strpos($cadena, "@") !== false && strpos($cadena, ".") !== false) {
    echo "La cadena contiene '@' y '.'";
    echo "Nombre de usuario: ";
    echo $nombreUsuario;

} else {
    echo "La cadena no contiene '@' y '.'";
}

?> 
</body>
</html>