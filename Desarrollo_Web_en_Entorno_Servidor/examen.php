<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
   <form name="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
       <table>
           <tr>
               <td><label for="nombre">Introduzca su nombre:</label></td>
               <td><input type="text" name="nombre" id="nombre"></td>
           </tr>
           <tr>
               <td><label for="comentario">Comentarios sobre esta página web:</label></td>
               <td><textarea name="comentario" id="comentario" cols="50" rows="10"></textarea></td>
           </tr>
           <tr>
               <td> 
                   <label for="fruta">Selecciona una fruta:</label>
                   <select name="fruta" id="fruta">
                       <option value="manzana">Manzana</option>
                       <option value="banana">Banana</option>
                       <option value="naranja">Naranja</option>
                   </select>
               </td>
           </tr>
           <tr>
               <td>
                   <label for="suscripcion">¿Quieres suscribirte?</label>
                   <input type="checkbox" name="suscripcion" id="suscripcion" value="si">
               </td>
           </tr>
           <tr>
               <td><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
           </tr>
       </table>
   </form>
   
</body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica si el formulario se ha enviado por POST

    // Recupera los datos del formulario
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $comentario = isset($_POST['comentario']) ? $_POST['comentario'] : '';
    $fruta = isset($_POST['fruta']) ? $_POST['fruta'] : '';
    $suscripcion = isset($_POST['suscripcion']) ? $_POST['suscripcion'] : 'No suscrito';

    // Muestra los resultados
    echo "<h2>Resultados del Formulario</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Comentario:</strong> $comentario</p>";
    echo "<p><strong>Fruta seleccionada:</strong> $fruta</p>";
    echo "<p><strong>Suscripción:</strong> $suscripcion</p>";
} else {
    // Si el formulario no se ha enviado por POST, muestra un mensaje indicando que no hay resultados
    echo "<p>No hay resultados para mostrar.</p>";
}
?>

</html>