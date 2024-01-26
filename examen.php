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