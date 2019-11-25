@extends('layouts.master')

@section('content')

  {{-- @forelse ($botines as $botin)
    <h3>Nombre producto: {{$botin->name}}</h3>
    <p>Precio: ${{$botin->price}}</p>
    <a href="/botines/nike/{{$botin->id}}">
      <img src="/storage/products/{{$botin->main_image}}" alt="">
    </a>
  @empty
    <p>No hay botines</p>
  @endforelse --}}

<div class="cuerpoentero">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="productos.php">Botines</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$marca}}</li>
      </ol>
    </nav>
    <div class="titulo">
      <h1 id="botinestitulo">Botines</h1>
    </div>
    <div class="muestraprincipal">
      <div class="card bg-dark text-white">
        <img src="#" class="card-img" alt
        <div class="card-img-overlay">
          <h5 class="card-title">Nuevos Botines Nike Mercurial</h5>
          <a id="botoncomprar"type="button" class="button-h5 btn btn-outline-dark" href="#">Comprar Ahora</a>
        </div>
      </div>
      <div class="imagenprincipal">
        <img src="" alt="">
      </div>
    </div>
    <div class="cuerpomitad px-3" style="overflow:hidden;">
      <div class="orderby">
        <h3 id="h3nav" >Ordenar por:</h3>
        <select class="form-control form-control-lg" placeholder="Ordenar Por:">
          <option><a class="list-link" href="#">Precio de menor a mayor</a></option>
          <option><a class="list-link" href="#">Precio de mayor a menor</a></option>
          <option><a class="list-link" href="#">En oferta</a></option>
          <option><a class="list-link" href="#">Mas nuevos</a></option>
        </select>
      </div>
      <div class="botines" style="float:left">
        <div class="card-group">
          @foreach ($botines1 as $botin)
            <div id="card{{$botin->id}}" class="card cproduct">
              <div id="carouselExampleControls{{$botin->id}}" class="carousel slide" data-interval="false" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="/storage/products/{{$botin->main_image}}" alt="First slide">
                  </div>
                  @foreach ($botin->images as $image)
                    <div class="carousel-item">
                      <img class="d-block w-100" src="/storage/products/{{$image->image}}" alt="Second slide">
                    </div>
                  @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls{{$botin->id}}" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon controlescarr" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls{{$botin->id}}" role="button" data-slide="next">
                  <span class="carousel-control-next-icon controlescarr" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <div class="card-body">
                <p class="card-text">{{$botin->name}}</p>
                <p class="card-text font-weight-bold">${{$botin->price}}</p>
                <div class="verProducto">
                  <a href="/botines/nike/{{$botin->id}}" class="btn btn-outline-dark vermasbotin">Ver Mas</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="card-group">
          @foreach ($botines2 as $botin)
            <div id="card{{$botin->id}}" class="card cproduct">
              <div id="carouselExampleControls{{$botin->id}}" class="carousel slide" data-interval="false" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="/storage/products/{{$botin->main_image}}" alt="First slide">
                  </div>
                  @foreach ($botin->images as $image)
                    <div class="carousel-item">
                      <img class="d-block w-100" src="/storage/products/{{$image->image}}" alt="Second slide">
                    </div>
                  @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls{{$botin->id}}" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon controlescarr" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls{{$botin->id}}" role="button" data-slide="next">
                  <span class="carousel-control-next-icon controlescarr" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <div class="card-body">
                <p class="card-text">{{$botin->name}}</p>
                <p class="card-text font-weight-bold">${{$botin->price}}</p>
                <div class="verProducto">
                  <a href="/botines/nike/{{$botin->id}}" class="btn btn-outline-dark vermasbotin">Ver Mas</a>
                </div>
              </div>
            </div>
          @endforeach
          {{-- <div id="card5" class="card cproduct">
            <div id="carouselExampleControls5" class="carousel slide" data-interval="false" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeC1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeC2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeC3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeC4.jpg" alt="Fourth slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls5" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon controlescarr" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls5" role="button" data-slide="next">
                <span class="carousel-control-next-icon controlescarr" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="card-body">
              <p class="card-text font-weight-bold">$Precio</p>
              <p class="card-text">Descripcion del botin</p>
              <a href="#" class="btn btn-outline-dark vermasbotin">Ver Mas</a>
            </div>
          </div>
          <div id="card6" class="card cproduct">
            <div id="carouselExampleControls6" class="carousel slide"  data-interval="false" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeD1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeD2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeD3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeD4.jpg" alt="Fourth slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls6" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon controlescarr" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls6" role="button" data-slide="next">
                <span class="carousel-control-next-icon controlescarr" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="card-body">
              <p class="card-text font-weight-bold">$Precio</p>
              <p class="card-text">Descripcion del botin</p>
              <a href="#" class="btn btn-outline-dark vermasbotin">Ver Mas</a>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>

@endsection
