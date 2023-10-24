<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <?php
    $ip = "192.168.1.1";
    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6)) {
        echo "La cadena contiene una dirección IP válida.";
    } else {
        echo "La cadena no contiene una dirección IP válida.";
    }
    
    ?>
</body>
</html>