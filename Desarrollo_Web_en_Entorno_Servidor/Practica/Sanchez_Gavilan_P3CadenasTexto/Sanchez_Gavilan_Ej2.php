<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        $email = "jairosg03@gmail.com";
        list($usuario, $dominio) = explode('@', $email);
        echo "Usuario: $usuario, Dominio: $dominio";  
    ?>
</body>
</html>