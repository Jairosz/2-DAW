<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
   <form name="formulario" action="pagina2.php" method="POST">
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

</html>