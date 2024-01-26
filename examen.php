<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Jairo</title>
</head>

<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //Comprobación para ver si los campos están vacíos o no
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
        $dni = isset($_POST['dni']) ? $_POST['dni'] : '';
        $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
        $carnet = isset($_POST['carnet']) ? $_POST['carnet'] : '';
        $pensionista = isset($_POST['pensionista']) ? $_POST['pensionista'] : '';
        $experiencia = isset($_POST['experiencia']) ? $_POST['experiencia'] : '';
        $discapacidad = isset($_POST['discapacidad']) ? $_POST['discapacidad'] : '';
        $pais = isset($_POST['paises']) ? $_POST['paises'] : '';
        $comentario = isset($_POST['comentario']) ? $_POST['comentario'] : '';

        echo "<h2>Resultados del Formulario</h2>";
        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Apellidos:</strong> $apellidos</p>";
        echo "<p><strong>DNI:</strong> $dni</p>";
        echo "<p><strong>Sexo:</strong> $sexo</p>";
        echo "<p><strong>Carnet de conducir B:</strong> $carnet</p>";
        echo "<p><strong>Pensionista:</strong> $pensionista</p>";
        echo "<p><strong>Experiencia:</strong> $experiencia</p>";
        echo "<p><strong>Discapacidad superior al 33%:</strong> $discapacidad</p>";
        echo "<p><strong>País:</strong> $pais</p>";
        echo "<p><strong>Comentario:</strong> $comentario</p>";
    } else {
        echo "<p>No hay resultados para mostrar.</p>";
    }
    ?>

<form name="formularioJairo" action="<?php echo _SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                 <td><label for="nombre">Introduzca su nombre:</label></td>      <!-- NOMBRE -->
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
                    <label for="sexo">Selecciona tu sexo:</label><br>  <!-- SEXO -->
                    <input type="radio" id="hombre" name="sexo" value="hombre">
                    <label for="hombre">Hombre</label><br>
                    <input type="radio" id="mujer" name="sexo" value="mujer">
                    <label for="mujer">Mujer</label><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="carnet">Carnet de conducir B</label> <!-- CARNET DE CONDUCIR B -->
                    <input type="checkbox" id="carnet" name="carnet" value="si">
                </td>
                <td>
                    <label for="pensionista">Pensionista</label>  <!-- PENSIONISTA -->
                    <input type="checkbox" id="pensionista" name="pensionista" value="si">
                </td>
                <td>
                    <label for="experiencia">20 años o más de experiencia</label>   <!-- EXPERIENCIA -->
                    <input type="checkbox" id="experiencia" name="experiencia" value="si">
                </td>
                <td>
                    <label for="discapacidad">Discapacidad superior al 33%</label>  <!-- DISCAPACIDAD -->
                    <input type="checkbox" id="discapacidad" name="discapacidad" value="si">
                </td>
            <tr>
                <td> <label for="paises">Selecciona un país:</label>   <!-- PAÍS -->
                    <select name="paises" id="paises">
                        <option value="españa">España</option>
                        <option value="portugal">Portugal</option>
                        <option value="francia">Francia</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="comentario">Comentarios sobre esta página web:</label></td>   <!-- COMENTARIO -->
                <td><textarea name="comentario" id="comentario" cols="50" rows="10"></textarea></td>
            </tr>
            <td>
                <label for="foto">Sube tu foto carnet:</label>  <!-- FOTRO -->
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
