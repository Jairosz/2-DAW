<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
<?php 
    $palabra1 = "roma";
    $palabra2 = "geroma";
    $palabra13ultimas = substr($palabra1,-3);
    $palabra23ultimas = substr($palabra2,-3);
    $palabra12ultimas = substr($palabra1,-2);
    $palabra22ultimas = substr($palabra2,-2);

    echo "Las palabras utilizadas son: ";
    echo "roma y geroma";

    if ($palabra13ultimas === $palabra23ultimas) {
        echo " Estas palabras riman";
    } else if ($palabra12ultimas === $palabra22ultimas) {
        echo " Estas palabras riman un poco";
    } else {
        echo " Estas no riman";
    }
?>

</body>
</html>