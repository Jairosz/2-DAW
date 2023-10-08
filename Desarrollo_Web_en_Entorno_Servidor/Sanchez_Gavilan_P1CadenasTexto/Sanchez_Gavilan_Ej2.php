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

// Comprueba si la cadena contiene "@" y "."
if (strpos($cadena, "@") !== false && strpos($cadena, ".") !== false) {
    echo "La cadena contiene '@' y '.'";
} else {
    echo "La cadena no contiene '@' y '.'";
}
?> 
</body>
</html>