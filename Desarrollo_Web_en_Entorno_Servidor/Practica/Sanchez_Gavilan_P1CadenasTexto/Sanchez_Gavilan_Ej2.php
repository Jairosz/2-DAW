<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej2 Jairo Sánchez Gavilán</title>
</head>
<body>
<?php
$cadena = "jairo@gmail.com";
$nombreUsuario = strstr($cadena, '@', true);

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