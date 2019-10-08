<?php
require_once "funciones.php";

// var_dump($_COOKIE);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title></title>
    <?php require_once("configuraciones.php"); ?>
    <?php require_once("funciones.php") ?>
  </head>
  <body>

    <!-- NAVBAR -->
    <?php require_once("navbar.php"); ?>

    <div class="container-fluid main"> <!-- GENERAL -->

       <div class="first container-fluid px-0">  <!-- FOTO ESTADIO + GIF ANIMADO-->

        <div class="foto-estadio">
          <img src="fotos/estadio.jpg" alt="" class="img-responsive w-100">
        </div>

        <div class="gif-animado col-md-8 h-50 w-50"> <!-- gif animado -->
            <img class="mx-auto d-block h-100 py-3 img-fluid" src="fotos/botines/gif/gif.gif" alt="Gif con botines">
        </div>

      </div>

      <div class="carousel">
      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="fotos/botines/adidas-nemeziz1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="h5-carousel" id="nemeziz">Botines Adidas New Generation Nemeziz</h5>
                <a type="button" class="button-h5 btn btn-outline-dark" href="#">Comprar Ahora</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="fotos/botines/adidas-adizero1.jpg" class="d-block w-100" alt="...">
              <div id="carousel-adizero"class="carousel-caption d-none d-md-block">
                <h5 class="h5-carousel" id="adizero">Botines Adidas Adizero</h5>
                <a type="button" class="button-h5 btn btn-outline-dark" href="#">Comprar Ahora</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="fotos/botines/nike-mercurial1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="h5-carousel" id="mercurial">Nuevos Botines Nike Mercurial</h5>
                <a type="button" class="button-h5 btn btn-outline-dark" href="#">Comprar Ahora</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>

    <div class="promo container-fluid mt-3"> <!-- PROMO KIT BARCELONA -->
      <h1 class="text-center pt-2">PROMO KIT BARCELONA</h1>
      <hr id="borderpromo"class="mt-0 border border-dark">
      <div class="parrafopromo" style="margin: auto;
        width:100%;">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div id="imagenpromo"class="imagen-parrafo" style="width: 70%;
      margin: auto; float: none;">
      <img src="fotos/promo-barcelona.jpg" alt="" class="img-fluid">
      </div>
    </div>
  <div class="container my-4">

        <hr class="my-4">

        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

          <!--Controls-->

          <!--/.Controls-->

          <!--Slides-->
          <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

              <div class="row">

                <div class="col-md-4 clearfix d-none d-md-block">
                  <div class="card mb-2">
                    <img class="card-img-top" src="fotos/camisetas/carousel/camiseta-juventus1.jpg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title" style="height: 54px;" >Camiseta Juventus</h4>
                      <p class="card-text">$Precio</p>
                      <a id="juventus" style="margin-left: 15%" class="btn btn-outline-dark">Comprar ahora</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card mb-2">
                    <img class="card-img-top" src="fotos/camisetas/carousel/camiseta-barca1.jpg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title" style="height: 54px;" >Camiseta Barcelona</h4>
                      <p class="card-text">$Precio</p>
                      <a id="barcelona" style="margin-left: 15%" class="btn btn-outline-dark">Comprar ahora</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                  <div class="card mb-2">
                    <img class="card-img-top" src="fotos/camisetas/carousel/camiseta-real1.jpg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title" style="height: 54px;" >Camiseta Real Madrid</h4>
                      <p class="card-text">$Precio</p>
                      <a id="realmadrid" style="margin-left: 21%" class="btn btn-outline-dark">Comprar ahora</a>
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
                  <div class="card mb-2">
                    <img class="card-img-top" src="fotos/camisetas/carousel/camiseta-argentina1.jpg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title" style="height: 54px;" >Camiseta Argentina</h4>
                      <p class="card-text">$Precio</p>
                      <a id="argentina" style="margin-left: 15%" class="btn btn-outline-dark">Comprar ahora</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                  <div class="card mb-2">
                    <img class="card-img-top" src="fotos/camisetas/carousel/camiseta-ajax1.jpg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title" style="height: 54px;">Camiseta Ajax</h4>
                      <p class="card-text">$Precio</p>
                      <a id="ajax" style="margin-left: 6%" class="btn btn-outline-dark">Comprar ahora</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                  <div class="card mb-2">
                    <img class="card-img-top" src="fotos/camisetas/carousel/camiseta-napoli1.jpg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title" style="height: 54px;" >Camiseta Napoli</h4>
                      <p class="card-text">$Precio</p>
                      <a id="napoli" style="margin-left: 12%" class="btn btn-outline-dark">Comprar ahora</a>
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


    <!-- FOOTER -->
    <?php require_once("footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
