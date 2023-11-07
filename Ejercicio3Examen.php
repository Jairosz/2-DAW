<?php 
    // JAIRO SÁNCHEZ GAVILÁN 2º DAW
    // EJERCICIO 3 DEL EXAMEN
  
    $email = "jairosg03@gmail.com";
    
    list($usuario, $dominio) = explode("@", $email);
    
    echo "usuario: " . $usuario . "<br>";
    echo "dominio: " . $dominio;
?>