<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej5 Jairo Sánchez Gavilán</title>
</head>
<body>
    <?php 
            $frase = "Tres tristes tigres comen trigo en un trigal";
            $fraselower = strtolower($frase);
        
            $numeroDeTR = substr_count($frase, 'tr');
            echo "<p> FRASE: $frase";
            echo "<p>El número de letras 'tr' en la frase es: $numeroDeTR</p>";
    ?>
</body>
</html>