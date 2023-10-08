<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej7 Jairo Sánchez Gavilán</title>
</head>
<body>
    <?php 
        $frase = "Mi carro me lo robaron, estando de romería. Mi carro me lo robaron, de noche cuando dormía. ¿Dónde estará mi carro? ¿dónde estará mi carro?";

        $fraseRepetida = "";
        for ($i = 0; $i < strlen($frase); $i++) {
            if (ctype_alpha($frase[$i])) {
                $fraseRepetida .= str_repeat($frase[$i], 2);
            } else {
                $fraseRepetida .= $frase[$i];
            }
        }
        
        echo $fraseRepetida;
    ?>
</body>
</html>