<?php 


$conexion = mysqli_connect("localhost", "root","","login_register_db");


if ($conexion){
    echo 'conectado a db';
}else{
    echo 'no se pudo conectar a la db';
}









?>