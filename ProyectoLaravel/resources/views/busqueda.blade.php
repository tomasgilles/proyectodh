@extends('layouts.master')

@section('content')
  <div class="techo">
    <h1 id="registerh1">Resultados busqueda</h1>
  </div>

  <div class="cuerpo">
    <div class="container">
      <div class="registro">
        <div id="style-card-group" class="card-group">
          @foreach ($products as $botin)
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
    </div>

  </div>
@endsection
