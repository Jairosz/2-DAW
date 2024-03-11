<?php
session_start();

if (isset($_POST['comprar'])) {
    // Verifica si la cesta ya existe en la sesión
    if (!isset($_SESSION['cesta'])) {
        $_SESSION['cesta'] = array();
    }

    // Agrega el producto y su precio a la cesta
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $_SESSION['cesta'][] = array('producto' => $producto, 'precio' => $precio);

    // Redirige de nuevo a la página de la tienda
    header("Location: mainUsuario.php");
    exit();
} else {
    // Maneja otros casos según sea necesario
}
?>
