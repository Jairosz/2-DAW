<?php
$archivoContador = 'contador.txt'; // Debes ajustar el nombre del archivo según tus necesidades

function incrementarContador($archivoContador) {
    if (file_exists($archivoContador)) {
        $contador = (int)file_get_contents($archivoContador);
        $contador++;
    } else {
        $contador = 1;
    }

    file_put_contents($archivoContador, $contador);
    return $contador;
}

$visitas = incrementarContador($archivoContador);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Jairo</title>
</head>

<body>
    <p>Contador de visitas: <?php echo $visitas; ?></p>
    <form name="formularioJairo" action="examen.php" method="POST"
        enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="nombre">Introduzca su nombre:</label></td> <!-- NOMBRE -->
                <td><input type="text" name="nombre" id="nombre"></td>
            </tr>
            <tr>
                <td><label for="apellidos">Introduzca sus apellidos:</label></td> <!-- APELLIDOS -->
                <td><input type="text" name="apellidos" id="apellidos"></td>
            </tr>
            <tr>
                <td><label for="dni">Introduzca su DNI:</label></td> <!-- DNI -->
                <td><input type="text" name="dni" id="dni"></td>
            </tr>
            <tr>
                <td>
                    <label for="sexo">Selecciona tu sexo:</label><br> <!-- SEXO -->
                    <input type="radio" id="hombre" name="sexo" value="hombre">
                    <label for="hombre">Hombre</label><br>
                    <input type="radio" id="mujer" name="sexo" value="mujer">
                    <label for="mujer">Mujer</label><br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" id="carnet" name="meritos[]" value="Carnet de conducir B">
                    <label for="carnet">Carnet de conducir B</label><br>
            
                    <input type="checkbox" id="pensionista" name="meritos[]" value="Pensionista">
                    <label for="pensionista">Pensionista</label><br>
            
                    <input type="checkbox" id="experiencia" name="meritos[]" value="20 años o más de experiencia">
                    <label for="experiencia">20 años o más de experiencia</label><br>
            
                    <input type="checkbox" id="discapacidad" name="meritos[]" value="Discapacidad superior al 33%">
                    <label for="discapacidad">Discapacidad superior al 33%</label><br>
                </td>
            <tr>
                <td> <label for="paises">Selecciona un país:</label> <!-- PAÍS -->
                    <select name="paises" id="paises">
                        <option value="españa">España</option>
                        <option value="portugal">Portugal</option>
                        <option value="francia">Francia</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="comentario">Comentarios:</label></td> <!-- COMENTARIO -->
                <td><textarea name="comentario" id="comentario" cols="50" rows="10"></textarea></td>
            </tr>
            <td>
                <label for="foto">Sube tu foto:</label> <!-- FOTRO -->
                <input type="file" id="foto" name="foto">
            </td>
            </tr>
            <tr>
                <td><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
            </tr>
        </table>
    </form>

</body>
</html>