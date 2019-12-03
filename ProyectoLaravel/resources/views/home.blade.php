@extends('layouts.master')

@section('content')

  @if (session('message'))
    <div class="">
      {{session('message')}}
    </div>
  @endif

  <div class="container-fluid main"> <!-- GENERAL -->

     <div class="first container-fluid px-0">  <!-- FOTO ESTADIO + GIF ANIMADO-->

      <div class="foto-estadio">
        <img src="img/estadio.jpg" alt="" class="img-responsive w-100">
      </div>

      <div class="gif-animado col-md-8 h-50 w-50"> <!-- gif animado -->
          <img class="mx-auto d-block h-100 py-3 img-fluid" src="img/gif.gif" alt="Gif con botines">
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
              <a href="/botines/adidas/id-botin"><img src="img/adidas-nemeziz1.jpg" class="d-block w-100" alt="..."></a>
              <div class="carousel-caption d-none d-md-block">
                <h5 class="h5-carousel" id="nemeziz">Botines Adidas New Generation Nemeziz</h5>
                <a type="button" class="button-h5 btn btn-outline-dark" href="/botines/adidas">Ver Mas</a>
              </div>
            </div>
            <div class="carousel-item">
              <a href="/botines/puma/id-botin"><img src="img/puma-carrousel.jpg" class="d-block w-100" alt="..."></a>
              <div id="carousel-adizero"class="carousel-caption d-none d-md-block">
                <h5 class="h5-carousel" id="adizero">Botines Puma Adizero</h5>
                <a type="button" class="button-h5 btn btn-outline-dark" href="/botines/puma">Ver Mas</a>
              </div>
            </div>
            <div class="carousel-item">
              <a href="/botines/nike/id-botin"><img src="img/nike-mercurial1.jpg" class="d-block w-100" alt="..."></a>
              <div class="carousel-caption d-none d-md-block">
                <h5 class="h5-carousel" id="mercurial">Nuevos Botines Nike Mercurial</h5>
                <a type="button" class="button-h5 btn btn-outline-dark" href="/botines/nike">Ver Mas</a>
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
    @if($kit)
      <h1 class="text-center pt-2">{{$kit->name}}</h1>
    @else
      <h1 class="text-center pt-2">PROMO KIT BARCELONA</h1>
    @endif
    <hr id="borderpromo"class="mt-0 border border-dark">
    <div class="parrafopromo" style="margin: auto;
      width:100%;">
      <p></p>
    </div>
    <div id="imagenpromo"class="imagen-parrafo" style="width: 50%;
    margin: auto; float: none;">
      @if($kit)
        <img id="imgpromo"src="/storage/products/{{$kit->main_image}}" alt="" class="img-fluid">
      @else
        <img id="imgpromo"src="img/promo-barcelona.jpg" alt="" class="img-fluid">
      @endif
    </div>
    <div style="overflow:hidden; width:fit-content; margin:auto"class="">
      @if($kit)
        <a type="button" class="button-h5 btn btn-outline-dark" href="/{{$kit->product_type}}/{{$kit->brand}}/{{$kit->id}}">Ver Mas</a>
      @else
        <a type="button" class="button-h5 btn btn-outline-dark btn-danger">SOLD OUT</a>
      @endif
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
                @if($camiseta1)
                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card.index mb-2">
                      <img class="card-img-top" src="/storage/products/{{$camiseta1->main_image}}"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title" style="height: 54px;">{{$camiseta1->name}}</h4>
                        <p class="card-text">${{$camiseta1->price}}</p>
                        <a id="juventus" class="btn btn-outline-dark" href="/{{$camiseta1->product_type}}/{{$camiseta1->brand}}/{{$camiseta1->id}}">Comprar ahora</a>
                      </div>
                    </div>
                  </div>
                @else
                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card.index mb-2">
                      <img class="card-img-top" src="img/carousel/camiseta-juventus1.jpg"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title" style="height: 54px;" >Camiseta Juventus</h4>
                        <a id="juventus" class="btn btn-outline-dark" href="/vestimenta/remeras">Comprar ahora</a>
                      </div>
                    </div>
                  </div>
                @endif

                @if($camiseta2)
                  <div class="col-md-4">
                    <div class="card.index mb-2">
                      <img class="card-img-top" src="/storage/products/{{$camiseta2->main_image}}"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title correccion" style="height: 54px;">{{$camiseta2->name}}</h4>
                        <p class="card-text correccion2">${{$camiseta2->price}}</p>
                        <a id="barcelona" class="btn btn-outline-dark" href="/{{$camiseta2->product_type}}/{{$camiseta2->brand}}/{{$camiseta2->id}}">Comprar ahora</a>
                      </div>
                    </div>
                  </div>
                @else
                  <div class="col-md-4">
                    <div class="card.index mb-2">
                      <img class="card-img-top" src="img/carousel/camiseta-barca1.jpg"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title correccion" style="height: 54px;" >Camiseta Barcelona</h4>
                        <a id="barcelona" class="btn btn-outline-dark" href="/vestimenta/remeras">Comprar ahora</a>
                      </div>
                    </div>
                  </div>
                @endif

                @if($camiseta3)
                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card.index mb-2">
                      <img class="card-img-top" src="/storage/products/{{$camiseta3->main_image}}"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 id="realmadridcorreccion"class="card-title" style="height: 54px;">{{$camiseta3->name}}</h4>
                        <p class="card-text correccion2">${{$camiseta3->price}}</p>
                        <a id="realmadrid" class="btn btn-outline-dark" href="/{{$camiseta3->product_type}}/{{$camiseta3->brand}}/{{$camiseta3->id}}">Comprar ahora</a>
                      </div>
                    </div>
                  </div>
                @else
                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card.index mb-2">
                      <img class="card-img-top" src="img/carousel/camiseta-real1.jpg"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 id="realmadridcorreccion"class="card-title" style="height: 54px;" >Camiseta Real Madrid</h4>
                        <a id="realmadrid" class="btn btn-outline-dark" href="/vestimenta/remeras">Comprar ahora</a>
                      </div>
                    </div>
                  </div>
                @endif
                </div>

            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">

              <div class="row">

                @if($camiseta4)
                  <div class="col-md-4">
                    <div class="card.index mb-2">
                      <img class="card-img-top" src="/storage/products/{{$camiseta4->main_image}}"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title correccion" style="height: 54px;">{{$camiseta4->name}}</h4>
                        <p class="card-text correccion2">${{$camiseta4->price}}</p>
                        <a id="argentina" class="btn btn-outline-dark" href="/{{$camiseta4->product_type}}/{{$camiseta4->brand}}/{{$camiseta4->id}}">Comprar ahora</a>
                      </div>
                    </div>
                  </div>
                @else
                  <div class="col-md-4">
                    <div class="card.index mb-2">
                      <img class="card-img-top" src="img/carousel/camiseta-argentina1.jpg"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title correccion" style="height: 54px;" >Camiseta Argentina</h4>
                        <a id="argentina" class="btn btn-outline-dark" href="/vestimenta/remeras">Comprar ahora</a>
                      </div>
                    </div>
                  </div>
                @endif

                @if($camiseta5)
                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card.index mb-2">
                      <img class="card-img-top" src="/storage/products/{{$camiseta5->main_image}}"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title" style="height: 54px;">{{$camiseta5->name}}</h4>
                        <p class="card-text">${{$camiseta5->price}}</p>
                        <a id="ajax" class="btn btn-outline-dark" href="/{{$camiseta5->product_type}}/{{$camiseta5->brand}}/{{$camiseta5->id}}">Comprar ahora</a>
                      </div>
                    </div>
                  </div>
                @else
                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card.index mb-2">
                      <img class="card-img-top" src="img/carousel/camiseta-ajax1.jpg"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title" style="height: 54px;">Camiseta Ajax</h4>
                        <a id="ajax" class="btn btn-outline-dark" href="/vestimenta/remeras">Comprar ahora</a>
                      </div>
                    </div>
                  </div>
                @endif

                @if($camiseta6)
                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card.index mb-2">
                      <img class="card-img-top" src="/storage/products/{{$camiseta6->main_image}}"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title" style="height: 54px;">{{$camiseta6->name}}</h4>
                        <p class="card-text">${{$camiseta6->price}}</p>
                        <a id="napoli" class="btn btn-outline-dark" href="/{{$camiseta6->product_type}}/{{$camiseta6->brand}}/{{$camiseta6->id}}">Comprar ahora</a>
                      </div>
                    </div>
                  </div>
                @else
                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card.index mb-2">
                      <img class="card-img-top" src="img/carousel/camiseta-napoli1.jpg"
                        alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title" style="height: 54px;" >Camiseta Napoli</h4>
                        <a id="napoli" class="btn btn-outline-dark" href="/vestimenta/remeras">Comprar ahora</a>
                      </div>
                    </div>
                  </div>
                @endif
              </div>

            </div>

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


@endsection
