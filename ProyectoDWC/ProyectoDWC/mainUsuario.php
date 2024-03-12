<!DOCTYPE html>
<html lang="en">

<head>
  <title>Lista de Productos</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="./assets/css/estilosIndex.css" />
  <style>
    h1 {
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <header>
      <nav class="navbar navbar-expand-md navbar-light banner-color">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item nav-item-separation">
                <a class="nav-link nav-item-color" href="#">Compras</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <?php
    // Realiza la conexión a la base de datos
    include 'C:\xampp\htdocs\ProyectoDWC\conexion_be.php'; // TRAEMOS LA CONEXION A LA DB DESDE OTRO ARCHIVO PHP

    // Consulta para obtener todos los productos
    $query = "SELECT * FROM productos";
    $result = mysqli_query($conexion, $query);

    // Verifica si la consulta fue exitosa
    if ($result) {
    ?>
      <div class="container">
        <br>
        <h1>Lista de Productos</h1>
        <div class="row">
          <?php
          // Recorre los resultados y muestra los productos
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="<?php echo $row['imagen']; ?>" class="card-img-top" alt="<?php echo $row['nombre']; ?>">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
                  <p class="card-text">Precio <?php echo $row['precio']; ?>€</p>
                  <form action="" method="post">
                    <!-- Campos ocultos para la información del producto -->
                    <input type="hidden" name="producto" value="<?php echo $row['nombre']; ?>">
                    <input type="hidden" name="precio" value="<?php echo $row['precio']; ?>">
                    <!-- Botón de compra -->
                    <button type="submit" class="btn btn-primary" name="comprar">Añadir al Carrito</button>
                    <?php
                    // Inicia la sesión
                    session_start();

                    // Verifica si se ha hecho clic en el botón de compra
                    if (isset($_POST['comprar'])) {
                      // Recoge los datos del producto seleccionado
                      $nombreProducto = $_POST['producto'];
                      $precioProducto = $_POST['precio'];

                      // Añade el producto al carrito (almacenado en la sesión)
                      $_SESSION['carrito'][] = array('nombre' => $nombreProducto, 'precio' => $precioProducto);
                    }
                    ?>
                  </form>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
        <!-- Mostrar productos en el carrito -->
        <h2>Carrito de Compras</h2>
        <?php
        if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
          foreach ($_SESSION['carrito'] as $item) {
            echo '<p>' . $item['nombre'] . ' - Precio: ' . $item['precio'] . '€</p>';
          }
        } else {
          echo '<p>El carrito está vacío.</p>';
        }
        ?>
      </div>
    <?php
    } else {
      // Maneja el caso en que la consulta falla
      echo "Error en la consulta SQL: " . mysqli_error($conexion);
    }

    // Cierra la conexión
    mysqli_close($conexion);
    ?>

  </div>
</body>

</html>