@extends('layouts.master')

@section('content')

  <div class="cuerpoentero">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item breadC"><a style="color: black;" href="/home">Home</a></li>
        <li class="breadcrumb-item breadC"><a style="color: black;" href="/botines/kit">Kit</a></li>
        <li class="breadcrumb-item active" aria-current="page">Barcelona</li>
      </ol>
    </nav>
    <div class="parteArriba">
      <div class="col-md-7 imagenProducto">
        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-interval="false" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div id="carouselHover" class="carousel-item active">
              <img class="d-block w-100 imgsProducto" src="/storage/products/{{$botin->main_image}}"
                alt="First slide">
            </div>
            @foreach ($botin->images as $image)
              <div class="carousel-item">
                <img class="d-block w-100" src="/storage/products/{{$image->image}}"
                  alt="Second slide">
              </div>
            @endforeach
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
                <img class="imgsProducto" src="/storage/products/{{$botin->main_image}}" width="100">
              </div>
              @php $num = 1; @endphp
              @foreach ($botin->images as $image)
                <div data-target="#carousel-thumb" data-slide-to="{{$num}}" class="listProducto">
                  <img class="imgsProducto" src="/storage/products/{{$image->image}}" width="100">
                </div>
                @php $num = $num + 1; @endphp
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 infoProducto">
        <h3>{{$botin->name}}</h3>
        <p class='precioProducto'>${{$botin->price}}</p>
        <form class="" action="/cartadd" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$botin->id}}">
          <div id="cantidades" class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Talle</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="size" required>
              <option value="">Seleccione un talle</option>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
          </div>
          <div id="cantidades" class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Cantidad</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="quantity" required>
              <option value="">Seleccione una cantidad</option>
              @for ($i=1; $i<$botin->stock; $i++)
                @if ($i>5)
                  @break
                @endif
                <option value="{{$i}}">{{$i}}</option>
              @endfor
            </select>
          </div>
          <div class="comparAhora">
          </div>
          <div class="agregarCarrito">
            <button id="agregarC" type="submit" class="btn btn-outline-dark">Agregar a Carrito</button>
          </div>
        </form>
      </div>
      <div class="col-md-10 descripcionProducto" style="max-width:100%;">
        <h2>Descripcion Producto</h2>
        <p style="font-size:80%";>{{$botin->description}}</p>
      </div>
    </div>
    <div class="parteAbajo">
      <div class="otrosProductos">
        <h2 id="productosG">Otros productos que quizas te gusten</h2>
        <div class="container my-4">
              <hr class="my-4">
              <!--Carousel Wrapper-->
              <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                  <!--First slide-->
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="card.index mb-2">
                          <img class="card-img-top" src="/storage/products/{{$botinRand1->main_image}}" alt="Card image cap">
                          <div class="card-body">
                            <h4 class="card-title" style="height: 54px;" >{{$botinRand1->name}}</h4>
                            <p class="card-text">${{$botinRand1->price}}</p>
                            <div class="verMasC">
                              <a class="btn btn-outline-dark" href="/botines/{{$botinRand1->brand}}/{{$botinRand1->id}}">Ver Mas</a>
                            </div>

                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="card.index mb-2">
                          <img class="card-img-top" src="/storage/products/{{$botinRand2->main_image}}" alt="Card image cap">
                          <div class="card-body">
                            <h4 class="card-title correccion" style="height: 54px;">{{$botinRand2->name}}</h4>
                            <p class="card-text correccion2">${{$botinRand2->price}}</p>
                            <div class="verMasC">
                              <a class="btn btn-outline-dark" href="/botines/{{$botinRand2->brand}}/{{$botinRand2->id}}">Ver Mas</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="card.index mb-2">
                          <img class="card-img-top" src="/storage/products/{{$botinRand3->main_image}}" alt="Card image cap">
                          <div class="card-body">
                            <h4 class="card-title" style="height: 54px;" >{{$botinRand3->name}}</h4>
                            <p class="card-text correccion2">${{$botinRand3->price}}</p>
                            <div class="verMasC">
                              <a class="btn btn-outline-dark" href="/botines/{{$botinRand3->brand}}/{{$botinRand3->id}}">Ver Mas</a>
                            </div>
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
                          <img class="card-img-top" src="/storage/products/{{$botinRand4->main_image}}" alt="Card image cap">
                          <div class="card-body">
                            <h4 class="card-title correccion" style="height: 54px;" >{{$botinRand4->name}}</h4>
                            <p class="card-text correccion2">${{$botinRand4->price}}</p>
                            <div class="verMasC">
                              <a class="btn btn-outline-dark" href="/botines/{{$botinRand4->brand}}/{{$botinRand4->id}}">Ver Mas</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="card.index mb-2">
                          <img class="card-img-top" src="/storage/products/{{$botinRand5->main_image}}" alt="Card image cap">
                          <div class="card-body">
                            <h4 class="card-title" style="height: 54px;">{{$botinRand5->name}}</h4>
                            <p class="card-text">${{$botinRand5->price}}</p>
                            <div class="verMasC">
                              <a class="btn btn-outline-dark" href="/botines/{{$botinRand5->brand}}/{{$botinRand5->id}}">Ver Mas</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="card.index mb-2">
                          <img class="card-img-top" src="/storage/products/{{$botinRand6->main_image}}" alt="Card image cap">
                          <div class="card-body">
                            <h4 class="card-title" style="height: 54px;" >{{$botinRand6->name}}</h4>
                            <p class="card-text">${{$botinRand6->price}}</p>
                            <div class="verMasC">
                              <a class="btn btn-outline-dark" href="/botines/{{$botinRand6->brand}}/{{$botinRand6->id}}">Ver Mas</a>
                            </div>
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


@endsection
