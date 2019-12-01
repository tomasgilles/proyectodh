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
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="productos.php">Botines</a></li>
          <li class="breadcrumb-item"><a href="productos.php">Nike</a></li>
          <li class="breadcrumb-item active" aria-current="page">Promo Kit</li>
        </ol>
      </nav>
      <div class="parteArriba">
        <div class="col-md-7 imagenProducto">
          <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-interval="false" data-ride="carousel">
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
              <div id="carouselHover" class="carousel-item active">
                <img class="d-block w-100 imgsProducto" src="fotos/camisetas/camiseta-barca1.jpg"
                  alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="fotos/camisetas/camiseta-barca2.jpg"
                  alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="fotos/shorts/short-barca3.jpg"
                  alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="fotos/medias/medias-barca.jpg"
                  alt="Fourth slide">
              </div>
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-thumb" style="height:75%;" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon controlescarr" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-thumb" style="height:75%;" role="button" data-slide="next">
              <span class="carousel-control-next-icon controlescarr" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
            <div class="carousel-indic">
              <div class="indicators-carr">
                <div data-target="#carousel-thumb" data-slide-to="0" class="listProducto active">
                  <img class="imgsProducto" src="fotos/camisetas/camiseta-barca1.jpg" width="100">
                </div>
                <div data-target="#carousel-thumb" data-slide-to="1" class="listProducto">
                  <img class="imgsProducto" src="fotos/camisetas/camiseta-barca2.jpg" width="100">
                </div>
                <div data-target="#carousel-thumb" data-slide-to="2" class="listProducto">
                  <img class="imgsProducto" src="fotos/shorts/short-barca3.jpg" width="100">
                </div>
                <div data-target="#carousel-thumb" data-slide-to="3" class="listProducto">
                  <img class="imgsProducto" src="fotos/medias/medias-barca.jpg" width="100">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 infoProducto">
          <h3>Nombre Producto</h3>
          <p class='precioProducto'>$Precio</p>
          <form class="" action="index.html" method="post">
            <p class='talleProducto'>Talle:</p>
            <div class="talles">
              <div class="talle">
                <input type="radio" id="radioTalle1" class="radioTalle" name="drone" value="talle1">
                  <label for="talle1">41</label>
              </div>
              <div class="talle">
                <input type="radio" id="radioTalle2" class="radioTalle" name="drone" value="talle2">
                  <label for="talle2">43</label>
              </div>
              <div class="talle">
                <input type="radio" id="radioTalle3" class="radioTalle" name="drone" value="talle3">
                  <label for="talle3">45</label>
              </div>
            </div>
            <div id="cantidades" class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Cantidad</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="3">4</option>
              </select>
            </div>
            <div class="comparAhora">
              <button id="comprarAP" type="submit" class="btn btn-outline-dark">Comprar Ahora</button>
            </div>
            <div class="agregarCarrito">
              <button id="agregarC" type="submit" class="btn btn-outline-dark">Agregar a Carrito</button>
            </div>
          </form>
        </div>
        <div class="col-md-10 descripcionProducto" style="max-width:100%;">
          <h2>Descripcion Producto</h2>
          <p>Los X son más que un botín. Son la certeza de que la velocidad es para dejar atrás a los defensores, y no para correr sin objetivo. Si no podés liderar el ataque con tu aceleración explosiva, seguí buscando. Pero si estás listo para superar tus límites, seguí leyendo. Estos botines presentan un exterior de malla ligero y cómodo que te ayuda a conseguir un toque perfecto y mayor velocidad en la cancha. El diseño de corte bajo y el ajuste de sujeción aportan mayor estabilidad durante los movimientos explosivos.</p>
        </div>
      </div>
      <div class="parteAbajo">
        <div class="otrosProductos">
          <h2 id="productosG">Otros productos que quizas te gusten</h2>
          <div class="container my-4">

                <hr class="my-4">

                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                  <!--Slides-->
                  <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">

                      <div class="row">

                        <div class="col-md-4 clearfix d-none d-md-block">
                          <div class="card.index mb-2">
                            <img class="card-img-top" src="fotos/camisetas/carousel/camiseta-juventus1.jpg"
                              alt="Card image cap">
                            <div class="card-body">
                              <h4 class="card-title" style="height: 54px;" >Camiseta Juventus</h4>
                              <p class="card-text">$Precio</p>
                              <a id="juventus" class="btn btn-outline-dark">Comprar ahora</a>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="card.index mb-2">
                            <img class="card-img-top" src="fotos/camisetas/carousel/camiseta-barca1.jpg"
                              alt="Card image cap">
                            <div class="card-body">
                              <h4 class="card-title correccion" style="height: 54px;" >Camiseta Barcelona</h4>
                              <p class="card-text correccion2">$Precio</p>
                              <a id="barcelona" class="btn btn-outline-dark">Comprar ahora</a>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                          <div class="card.index mb-2">
                            <img class="card-img-top" src="fotos/camisetas/carousel/camiseta-real1.jpg"
                              alt="Card image cap">
                            <div class="card-body">
                              <h4 id="realmadridcorreccion"class="card-title" style="height: 54px;" >Camiseta Real Madrid</h4>
                              <p class="card-text correccion2">$Precio</p>
                              <a id="realmadrid" class="btn btn-outline-dark">Comprar ahora</a>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">

                      <div class="row">
                        <div class="col-md-4">
                          <div class="card.index mb-2">
                            <img class="card-img-top" src="fotos/camisetas/carousel/camiseta-argentina1.jpg"
                              alt="Card image cap">
                            <div class="card-body">
                              <h4 class="card-title correccion" style="height: 54px;" >Camiseta Argentina</h4>
                              <p class="card-text correccion2">$Precio</p>
                              <a id="argentina" class="btn btn-outline-dark">Comprar ahora</a>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                          <div class="card.index mb-2">
                            <img class="card-img-top" src="fotos/camisetas/carousel/camiseta-ajax1.jpg"
                              alt="Card image cap">
                            <div class="card-body">
                              <h4 class="card-title" style="height: 54px;">Camiseta Ajax</h4>
                              <p class="card-text">$Precio</p>
                              <a id="ajax" class="btn btn-outline-dark">Comprar ahora</a>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                          <div class="card.index mb-2">
                            <img class="card-img-top" src="fotos/camisetas/carousel/camiseta-napoli1.jpg"
                              alt="Card image cap">
                            <div class="card-body">
                              <h4 class="card-title" style="height: 54px;" >Camiseta Napoli</h4>
                              <p class="card-text">$Precio</p>
                              <a id="napoli" class="btn btn-outline-dark">Comprar ahora</a>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <!--/.Second slide-->

                  </div>
                  <div class="controls-bottom">
                    <div id="controls" class="controls">
                      <a type="button" class="btn-floating btn-lg btn-dark" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                      <a type="button" class="btn-floating btn-lg btn-dark" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
                <!--/.Carousel Wrapper-->

              </div>
        </div>
      </div>


    </div>


    <!-- FOOTER -->
    <?php require_once("footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
