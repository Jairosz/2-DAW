<?php

include 'C:\xampp\htdocs\ProyectoDWC\conexion_be.php'; // TRAEMOS LA CONEXION A LA DB DESDE OTRO ARCHIVO PHP

$usuario =  $_POST['usuario']; // COGEMOS USUARIO DESDE FORMULARIO CON MÉTODO POST
$contrasena =  $_POST['contrasena'];  // COGEMOS CONTRASEÑA DESDE FORMULARIO CON MÉTODO POST

$contrasena = hash('sha512', $contrasena); // MÉTODDO DE ENCRIPTACIÓN DE CONTRASEÑAS



$queryResult = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario ='$usuario' and contrasena = '$contrasena'");





if (mysqli_num_rows($queryResult) > 0) {
    $usuarioData = mysqli_fetch_assoc($queryResult);

    session_start();
    $_SESSION['USER'] = $usuarioData;

    if ($usuarioData['es_admin'] == 1) {
        // Usuario es administrador
        header("location: ./mainAdmin.php");
    } else {
        // Usuario normal
        header("location: ./mainUsuario.php");
    }
    exit();
} else {
    header("location: ./login.php");
    exit();
}
 
?>


