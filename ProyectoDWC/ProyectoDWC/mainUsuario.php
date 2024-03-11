 <?php
  session_start();
  if (empty($_SESSION['USER'])) {
    header("location: ./login.php");
    exit();
  }
  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <title>Title</title>
   <!-- Required meta tags -->
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

   <!-- Bootstrap CSS v5.2.1 -->

   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
   <link rel="stylesheet" href="./assets/css/estilosIndex.css" />
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
     <!-- Contenido de la tienda -->
     <div class="row mt-4">
       <!-- Primera fila de tarjetas -->
       <div class="col-md-4 mb-4">
         <form action="procesar_compra.php" method="post">
           <div class="card">
             <img src="imagen1.jpg" class="card-img-top" alt="Producto 1">
             <div class="card-body">
               <h5 class="card-title">Nike Low Vis</h5>
               <p class="card-text">Precio 89,99€</p>
               <!-- Campos ocultos para la información del producto -->
               <input type="hidden" name="producto" value="Nike Low Vis">
               <input type="hidden" name="precio" value="89,99">
               <!-- Botón de compra -->
               <button type="submit" class="btn btn-primary" name="comprar">Comprar</button>
             </div>
           </div>
         </form>
       </div>
       <div class="col-md-4 mb-4">
         <form action="procesar_compra.php" method="post">
           <div class="card">
             <img src="imagen2.jpg" class="card-img-top" alt="Producto 2">
             <div class="card-body">
               <h5 class="card-title">Nike Air Max</h5>
               <p class="card-text">Precio 69,99€</p>
               <!-- Campos ocultos para la información del producto -->
               <input type="hidden" name="producto" value="Nike Air Max">
               <input type="hidden" name="precio" value="69.99">
               <!-- Botón de compra -->
               <button type="submit" class="btn btn-primary" name="comprar">Comprar</button>
             </div>
           </div>
         </form>
       </div>
       <div class="col-md-4 mb-4">
         <form action="procesar_compra.php" method="post">
           <div class="card">
             <img src="imagen3.jpg" class="card-img-top" alt="Producto 3">
             <div class="card-body">
               <h5 class="card-title">Nike Vapor Max</h5>
               <p class="card-text">Precio 99,99€</p>
               <!-- Campos ocultos para la información del producto -->
               <input type="hidden" name="producto" value="Nike Vapor Max">
               <input type="hidden" name="precio" value="99.99">
               <!-- Botón de compra -->
               <button type="submit" class="btn btn-primary" name="comprar">Comprar</button>
             </div>
           </div>
         </form>
       </div>
     </div>
     <!-- Segunda fila de tarjetas -->
     <div class="row">
       <div class="col-md-4 mb-4">
         <form action="procesar_compra.php" method="post">
           <div class="card">
             <img src="imagen4.jpg" class="card-img-top" alt="Producto 4">
             <div class="card-body">
               <h5 class="card-title">Nike Air Force 1</h5>
               <p class="card-text">Precio 109,99€</p>
               <!-- Campos ocultos para la información del producto -->
               <input type="hidden" name="producto" value="Nike Air Force 1">
               <input type="hidden" name="precio" value="109.99">
               <!-- Botón de compra -->
               <button type="submit" class="btn btn-primary" name="comprar">Comprar</button>
             </div>
           </div>
         </form>
       </div>
       <div class="col-md-4 mb-4">
         <form action="procesar_compra.php" method="post">
           <div class="card">
             <img src="imagen5.jpg" class="card-img-top" alt="Producto 5">
             <div class="card-body">
               <h5 class="card-title">Nike Air Jordan</h5>
               <p class="card-text">Precio 89,99€</p>
               <!-- Campos ocultos para la información del producto -->
               <input type="hidden" name="producto" value="Nike Air Jordan">
               <input type="hidden" name="precio" value="89.99">
               <!-- Botón de compra -->
               <button type="submit" class="btn btn-primary" name="comprar">Comprar</button>
             </div>
           </div>
         </form>
       </div>
       <div class="col-md-4 mb-4">
         <form action="procesar_compra.php" method="post">
           <div class="card">
             <img src="imagen6.jpg" class="card-img-top" alt="Producto 6">
             <div class="card-body">
               <h5 class="card-title">Nike Huarache</h5>
               <p class="card-text">Precio 69,99€</p>
               <!-- Campos ocultos para la información del producto -->
               <input type="hidden" name="producto" value="Nike Huarache">
               <input type="hidden" name="precio" value="69.99">
               <!-- Botón de compra -->
               <button type="submit" class="btn btn-primary" name="comprar">Comprar</button>
             </div>
           </div>
         </form>
       </div>
     </div>
     <!-- Cesta de la compra -->
     <div class="row mt-4">
       <div class="col-md-12">
         <h3>Cesta de la Compra</h3>
         <?php
          if (isset($_SESSION['cesta']) && !empty($_SESSION['cesta'])) {
            echo '<ul>';
            foreach ($_SESSION['cesta'] as $item) {
              echo '<li>' . $item['producto'] . ' - ' . $item['precio'] . '</li>';
            }
            echo '</ul>';
          } else {
            echo '<p>La cesta está vacía.</p>';
          }
          ?>
       </div>
     </div>
   </div>
 </body>

 </html>