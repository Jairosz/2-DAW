<!DOCTYPE html>
<html>
<head>
    <title>Ejercicios en PHP</title>
</head>
<body>
    <!-- Ejercicio 1: Comprobar si dos palabras riman -->
    <?php
    $palabra1 = "gato"; // Definir una palabra de ejemplo 1
    $palabra2 = "patio"; // Definir una palabra de ejemplo 2

    $palabra1 = strtolower($palabra1); // Convertir la palabra a minúsculas para comparar sin distinción de mayúsculas y minúsculas.
    $palabra2 = strtolower($palabra2);

    if (substr($palabra1, -3) == substr($palabra2, -3)) {
        echo "Las palabras riman."; // Si las últimas 3 letras son iguales, las palabras riman.
    } elseif (substr($palabra1, -2) == substr($palabra2, -2)) {
        echo "Las palabras riman un poco."; // Si las últimas 2 letras son iguales, las palabras riman un poco.
    } else {
        echo "Las palabras no riman."; // En otros casos, las palabras no riman.
    }
    ?>

    <!-- Ejercicio 2: Validar una dirección de correo electrónico -->
    <?php
    $correo = "ejemplo@dominio.com"; // Definir una dirección de correo electrónico de ejemplo

    if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        list($nombre, $dominio) = explode('@', $correo); // Separar el nombre de usuario y el dominio usando el carácter '@'.
        echo "Nombre de usuario: $nombre<br>";
        echo "Dominio: $dominio";
    } else {
        echo "La dirección de correo no es válida.";
    }
    ?>

    <!-- Ejercicio 3: Validar un nombre de usuario -->
    <?php
    $nombre_usuario = "usuario123"; // Definir un nombre de usuario de ejemplo

    if (strlen($nombre_usuario) >= 3 && strlen($nombre_usuario) <= 20) { // Comprobar la longitud del nombre de usuario (entre 3 y 20 caracteres).
        if (preg_match('/^[a-zA-Z0-9-_]+$/', $nombre_usuario)) { // Utilizar una expresión regular para validar el nombre de usuario.
            echo "El nombre de usuario es válido.";
        } else {
            echo "El nombre de usuario contiene caracteres no permitidos.";
        }
    } else {
        echo "La longitud del nombre de usuario no es válida.";
    }
    ?>

    <!-- Ejercicio 4: Mostrar las dos primeras palabras de una frase -->
    <?php
    $frase = "Esta es una frase de ejemplo"; // Definir una frase de ejemplo
    $palabras = explode(' ', $frase); // Dividir la frase en palabras utilizando el espacio como separador.

    if (count($palabras) >= 2) {
        echo "Las dos primeras palabras son: " . $palabras[0] . " " . $palabras[1]; // Mostrar las dos primeras palabras si existen.
    } else {
        echo "La frase no contiene al menos dos palabras."; // Mostrar un mensaje si no hay al menos dos palabras.
    }
        
    ?>
    
    <!-- Ejercicio 5: Contar las letras 'a' en una frase y mostrar un array de conteo -->
    <?php
    $frase = "Esta es una frase de ejemplo con muchas letras"; // Definir una frase de ejemplo
    $letra_a = 'a';
    $conteo_a = substr_count(strtolower($frase), $letra_a); // Contar las letras 'a' en la frase (ignorando mayúsculas y minúsculas).
    
    echo "Número de letras 'a' en la frase: $conteo_a<br>";

    $letras = str_split(preg_replace('/[^a-z]/i', '', strtolower($frase)); // Extraer solo las letras de la frase y convertirlas a minúsculas.
    $conteo_letras = array_count_values($letras); // Contar la frecuencia de cada letra.

    echo "Array de conteo de letras:<br>";
    print_r($conteo_letras); // Mostrar el array de conteo de letras.
    ?>

    <!-- Ejercicio 6: Mostrar un número en binario y en octal -->
    <?php
    $numero = 42;
    printf("Número en binario: %b<br>", $numero); // Mostrar el número en binario.
    printf("Número en octal: %o", $numero); // Mostrar el número en octal.
    ?>

    <!-- Ejercicio 7: Repetir todos los caracteres de una frase -->
    <?php
    $frase = "Frase de ejemplo"; // Definir una frase de ejemplo
    $frase_repetida = preg_replace('/\s/', '', implode('', array_map(function($c) { return str_repeat($c, 2); }, str_split($frase)))); // Duplicar todos los caracteres de la frase.

    echo $frase_repetida; // Mostrar la frase con caracteres duplicados.
    ?>
       <!-- Ejercicio 8: Manipulación de cadenas -->
       <h2>Ejercicio 8</h2>
    <?php
    $frase = "Esta cadena tiene muchas letras";

    // Posición de la primera ocurrencia de la letra 'a'.
    $posicion_a = strpos($frase, 'a');

    // Posición de la primera ocurrencia de la letra 'm'.
    $posicion_m = strpos($frase, 'm');

    // Posición de la primera ocurrencia de la palabra "tiene".
    $posicion_tiene = strpos($frase, 'tiene');

    // Primera ocurrencia desde el final de la letra 'a'.
    $posicion_a_reversa = strrpos($frase, 'a');

    // Frase desde la aparición de la palabra "cadena" hasta el final.
    $posicion_cadena = strpos($frase, 'cadena');
    $substring_cadena = substr($frase, $posicion_cadena);

    // Cadena desde el carácter 12 hasta el final.
    $substring_desde_12 = substr($frase, 12);
    
    // Cadena devolviendo 6 caracteres desde el carácter 18.
    $substring_desde_18 = substr($frase, 18, 6);

    // Cadena devolviendo los 6 últimos caracteres.
    $substring_ultimos_6 = substr($frase, -6);

    // Cadena desde la posición 26, contando desde atrás, 6 caracteres.
    $substring_desde_atras_26 = substr($frase, -26, 6);

    // Cadena empezando en el carácter 4 y terminando en el 7 desde atrás.
    $substring_desde_4_hasta_atras_7 = substr($frase, 4, -7);

    // Mostrar resultados
    echo "Posición de la primera 'a': $posicion_a<br>";
    echo "Posición de la primera 'm': $posicion_m<br>";
    echo "Posición de la palabra 'tiene': $posicion_tiene<br>";
    echo "Primera ocurrencia desde el final de 'a': $posicion_a_reversa<br>";
    echo "Frase desde 'cadena' hasta el final: $substring_cadena<br>";
    echo "Cadena desde el carácter 12 hasta el final: $substring_desde_12<br>";
    echo "Cadena desde el carácter 18 con 6 caracteres: $substring_desde_18<br>";
    echo "Los 6 últimos caracteres: $substring_ultimos_6<br>";
    echo "Cadena desde la posición 26, contando desde atrás, con 6 caracteres: $substring_desde_atras_26<br>";
    echo "Cadena desde el carácter 4 hasta el 7 desde atrás: $substring_desde_4_hasta_atras_7";
    ?>

    <!-- Ejercicio 9: Manipulación de cadenas -->
    <h2>Ejercicio 9</h2>
    <?php
    $frase = "Bienvenidos al a aventura de aprender PHP en 30 horas";

    // Mostrar la parte central de la frase
    $longitud = strlen($frase);
    $inicio = ($longitud / 2) - 10; // Inicio de la parte central
    $parte_central = substr($frase, $inicio, 20); // 20 caracteres centrados

    // Averiguar la posición de la palabra "PHP"
    $posicion_php = strpos($frase, "PHP");

    // Reemplazar la palabra "aventura" por la cadena "<b>misión</b>"
    $frase_modificada = str_replace("aventura", "<b>misión</b>", $frase);

    // Mostrar resultados
    echo "Parte central de la frase: $parte_central<br>";
    echo "Posición de la palabra 'PHP': $posicion_php<br>";
    echo "Frase modificada: $frase_modificada";
    ?>

    <!-- Ejercicio 10: Generar fragmento HTML con sentencia PHP -->
    <h2>Ejercicio 10</h2>
    <?php
    echo '<a href="/arbol/prueba.php" class="prueba" onmouseOver="status=\'hola\'; return trae;">pruebade\\enlace</a>';
    ?>
    <?php
// 1. Obtener la última palabra de una frase
$frase = "Esta es una frase de ejemplo";
$palabras = explode(" ", $frase);
$ultima_palabra = end($palabras);
echo "1. Última palabra: $ultima_palabra<br>";

// 2. Separar un correo electrónico en usuario y dominio
$correo = "correo@ejemplo.com";
$correo = strtolower($correo);
list($usuario, $dominio) = explode('@', $correo);
echo "2. Usuario: $usuario<br>";
echo "   Dominio: $dominio<br>";

// 3. Comprobar si una cadena contiene alguna vocal
$cadena = "Ejemplo de cadena";
if (preg_match('/[aeiouAEIOU]/', $cadena)) {
    echo "3. La cadena contiene al menos una vocal.<br>";
} else {
    echo "   La cadena no contiene ninguna vocal.<br>";
}

// 4. Comparar dos cadenas y determinar cuál es menor
$cadena1 = "Hola 9";
$cadena2 = "Hola 10";

if (strcmp($cadena1, $cadena2) < 0) {
    echo "4. Cadena 1 es menor (comparación de cadenas).<br>";
} else {
    echo "   Cadena 2 es menor (comparación de cadenas).<br>";
}

if (strnatcmp($cadena1, $cadena2) < 0) {
    echo "   Cadena 1 es menor (comparación natural).<br>";
} else {
    echo "   Cadena 2 es menor (comparación natural).<br>";
}

// 5. Cambiar vocales minúsculas por mayúsculas y viceversa en una cadena
$cadena = "Hola Mundo";
$cadena_modificada = strtr($cadena, 'aeiouAEIOU', 'AEIOUaeiou');
echo "5. Cadena modificada: $cadena_modificada<br>";

// 6. Eliminar espacios y puntos antes y después de una cadena
$cadena = " ... Hola a todos ... ";
$cadena_sin_espacios = trim($cadena, ' .');
echo "6. Cadena sin espacios y puntos: $cadena_sin_espacios<br>";

// 7. Rellenar una cadena con "#" hasta que tenga 20 caracteres
$cadena = "Hola";
$cadena_rellenada_inicio = str_pad($cadena, 20, '#', STR_PAD_LEFT);
$cadena_rellenada_final = str_pad($cadena, 20, '#', STR_PAD_RIGHT);
$cadena_rellenada_ambos = str_pad($cadena, 20, '#', STR_PAD_BOTH);
echo "7. Cadena rellenada al inicio: $cadena_rellenada_inicio<br>";
echo "   Cadena rellenada al final: $cadena_rellenada_final<br>";
echo "   Cadena rellenada en ambos lugares: $cadena_rellenada_ambos<br>";


// 8. Escapar caracteres problemáticos en una cadena y luego revertir el proceso
$cadena_original = "vamos al o'Brian";
$cadena_escaped = addslashes($cadena_original);
$cadena_original_original = stripslashes($cadena_escaped);
echo "8. Cadena escapada: $cadena_escaped<br>";
echo "   Cadena original restaurada: $cadena_original_original<br>";

// 9. Escapar todas las vocales excepto la "a" en una cadena y luego revertir el proceso
$cadena_original = "Ejemplo de cadena";
$cadena_escaped = preg_replace_callback('/[aeiouAEIOU]/', function ($match) {
    return $match[0] == 'a' ? 'a' : '*';
}, $cadena_original);
$cadena_original_original = str_replace('*', 'a', $cadena_escaped);
echo "9. Cadena con vocales escapadas: $cadena_escaped<br>";
echo "   Cadena original restaurada: $cadena_original_original<br>";

// 10. Escapar caracteres que no sean letras ni espacios en una cadena
$cadena_original = "No me gusta usar +*[] en cadenas";
$cadena_escaped = preg_replace('/[^a-zA-Z\s]/', '', $cadena_original);
echo "10. Cadena con caracteres escapados: $cadena_escaped<br>";

// 11. Convertir una cadena en un array de caracteres
$cadena = "Hola";
$caracteres = str_split($cadena);
echo "11. Array de caracteres: ";
print_r($caracteres);

// 12. Comprobar si una cadena contiene una dirección IP válida
$cadena = "192.168.1.1";
if (filter_var($cadena, FILTER_VALIDATE_IP)) {
    echo "12. La cadena contiene una dirección IP válida.<br>";
} else {
    echo "   La cadena no contiene una dirección IP válida.<br>";
}
?>

</body>
</html>