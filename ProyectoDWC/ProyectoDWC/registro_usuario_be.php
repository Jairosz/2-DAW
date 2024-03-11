
<?php

include 'conexion_be.php'; // TRAEMOS LA CONEXION A LA DB DESDE OTRO ARCHIVO PHP

$nombre_completo = $_POST['nombre_completo']; // Cogemos la variable NOMBRE del formulario con el método POST
$correo = $_POST['correo']; // Cogemos la variable CORREO del formulario con el método POST
$usuario = $_POST['usuario']; // Cogemos la variable USUARIO del formulario con el método POST
$contrasena = $_POST['contrasena']; // Cogemos la variable CONTRASEÑA del formulario con el método POST
$contrasena = hash('sha512',$contrasena); // MÉTODDO DE ENCRIPTACIÓN DE CONTRASEÑAS



$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)    
              VALUES('$nombre_completo','$correo','$usuario','$contrasena')"; // VARIABLE PARA INSERTAR A LA TABLA NOMBRE - CORREO - USUARIO - PASS
//Control de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' "); // QUERY BÚSQUEDA DE $CORREO dentro de la columna $CORREOS
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' "); // QUERY BÚSQUEDA DE $CORREO dentro de la columna $CORREOS

if (mysqli_num_rows($verificar_correo) > 0) {  //ANTES DE INSERTAR EL CORREO EN LA DB, MIRAMOS SI HAY ALGUNO EXISTENTE YA CON ESA DIRECCIÓN, hace búsqueda y si en la busqueda las filas con ese correo son > 0 ( es decir existen, salimos del codigo)
    echo '
    <script> 
        alert ("El correo está registrado, intenta con otro");
        window.location = "./login.php";
    </script>
    ';
    exit();
}
if (mysqli_num_rows($verificar_usuario) > 0) {  //ANTES DE INSERTAR EL CORREO EN LA DB, MIRAMOS SI HAY ALGUNO EXISTENTE YA CON ESE USUARIO, hace búsqueda y si en la busqueda las filas con ese correo son > 0 ( es decir existen, salimos del codigo)
    echo '
    <script> 
        alert ("El usuario está registrado, intenta con otro");
        window.location = "./login.php";
    </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query); // SI NO EXISTE NINGÚN CORREO IGUAL EN LA DB, EJECUTAMOS LA INSERCCIÓN DE DATOS DENTRO DE LA DB

//LOG IN ACEPTADO
if ($ejecutar) {  // SI SE CONSIGUE REGISTRAR PONEMOS MENSAJE DE ACEPTADO

    echo '
        <script> 
            alert ("Te has registrado exitosamente");
            window.location = "./login.php";
        </script>
    ';
} else { // SI NO SE CONSIGUE REGISTRAR PONEMOS MENSAJE DE DENEGADO
    echo '
    <script> 
        alert ("Intentalo de nuevo, no te has registrado");
        window.location = "./login.php";
    </script>
';
}
mysqli_close($conexion); //CERRAMOS CONEXION
?>