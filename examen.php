<?php
$archivoContador = 'contador_visitas.txt';

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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // comprobacion de los campos submiteados por el usuario.
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
    $dni = isset($_POST['dni']) ? $_POST['dni'] : '';
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
    $meritos = isset($_POST['meritos']) ? $_POST['meritos'] : array();  //********* IMPORTANTE (SELECCIÓN MÚLTIPLE) **********
    $pais = isset($_POST['paises']) ? $_POST['paises'] : '';
    $comentario = isset($_POST['comentario']) ? $_POST['comentario'] : '';
    // mostrar campos del formulario subimeados del susuario.
    echo "<h2>Resultados del Formulario</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Apellidos:</strong> $apellidos</p>";
    echo "<p><strong>DNI:</strong> $dni</p>";
    echo "<p><strong>Sexo:</strong> $sexo</p>";
    echo "<p><strong>Méritos:</strong> " . implode(", ", $meritos) . "</p>";
    echo "<p><strong>País:</strong> $pais</p>";
    echo "<p><strong>Comentario:</strong> $comentario";
    $contadorVisitas = incrementarContador($archivoContador);
    echo "<p><strong>Visitas a esta página:</strong> $contadorVisitas</p>";

    if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0) {
        $nombreArchivo = $_FILES["foto"]["name"];
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);

        echo "<p>La extensión dela foto es: $extension</p>";
    } else {
        echo "<p>no has sleccionado ninguna foto, o no ha cargado correctamente</p>";
    }
}
?>