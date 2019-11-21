<?php

//require_once "funciones.php";
require_once "init.php";


?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php require_once("configuraciones.php"); ?>
  </head>
  <body>
    <!-- NAVBAR -->
    <?php require_once("navbar.php"); ?>
    <div class="cuerpoentero">
      <div class="parteArriba">
        <div class="">
          <h2 style="padding-top: 3%;">Mi Carrito:</h2>
          <hr class="my-4">
        </div>
        <div class="productoCarrito">
          <div class="col-md-7 parteCarrito">
            <div class="imgCarrito">
              <img class="imgsProductoCarrito" src="fotos/botines/mas-botines/nikeE1.jpg" alt="">
            </div>
            <div class="descripcionCarrito">
              <h3>Nombre Producto</h3>
              <p>Talle: #</p>
              <p>Cantidad: #</p>
            </div>
          </div>
          <div class="col-md-3 parteCarrito">
            <div style="margin-bottom:4%;" class="">
              <button style="width:100%;" type="submit" class="btn btn-outline-dark">Comprar Ahora</button>
            </div>
            <div class="">
              <button style="width:100%;" type="submit" class="btn btn-outline-dark">Eliminar de Carrito</button>
            </div>
          </div>
          <div class="col-md-2 parteCarrito">
            <p id="precioCarrito">$Precio</p>
          </div>
        </div>
        <hr class="my-4">
        <div id="totalCarrito" class="">
          <div class="">
            <p>Productos: #</p>
            <p>Total: #</p>
          </div>
          <div class="">
            <button style="width:100%;" type="submit" class="btn btn-outline-dark">Comprar Carrito</button>
          </div>
        </div>
      </div>
      <div class="parteAbajo">

      </div>
    </div>






    <!-- FOOTER -->
    <?php require_once("footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  </html>
