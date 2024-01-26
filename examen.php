<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Comprobación para ver si los campos están vacíos o no
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
    $dni = isset($_POST['dni']) ? $_POST['dni'] : '';
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
    $meritos = isset($_POST['meritos']) ? $_POST['meritos'] : array(); // Manejar los méritos como un array
    $pais = isset($_POST['paises']) ? $_POST['paises'] : '';
    $comentario = isset($_POST['comentario']) ? $_POST['comentario'] : '';

    echo "<h2>Resultados del Formulario</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Apellidos:</strong> $apellidos</p>";
    echo "<p><strong>DNI:</strong> $dni</p>";
    echo "<p><strong>Sexo:</strong> $sexo</p>";

    // Mostrar los méritos seleccionados
    echo "<p><strong>Méritos:</strong> " . implode(", ", $meritos) . "</p>";

    echo "<p><strong>País:</strong> $pais</p>";
    echo "<p><strong>Comentario:</strong> $comentario";

    // Verificar si se subió correctamente el archivo
    if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0) {
        $nombreArchivo = $_FILES["foto"]["name"];
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);

        echo "<p>La extensión del archivo es: $extension</p>";
    } else {
        echo "<p>Error: No se ha seleccionado ninguna foto o hubo un problema con la carga.</p>";
    }
}
?>
