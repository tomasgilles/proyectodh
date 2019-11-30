@extends('layouts.master')

@section('content')

<div class="cuerpoentero">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item breadC"><a style="color: black;" href="/home">Home</a></li>
        <li class="breadcrumb-item breadC"><a style="color: black;" href="/{{$tipoProducto}}/{{$marca}}">{{$tipoProducto}}</a></li>
        <li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize;">{{$marca}}</li>
      </ol>
    </nav>
    <div class="titulo">
      <h1 id="botinestitulo" style="text-transform: capitalize;">{{$tipoProducto}}</h1>
    </div>
    <div class="muestraprincipal">
      <div class="card bg-dark text-white">
          <img src={{$fotoG}} class="card-img">
      </div>
      <div class="imagenprincipal">
      </div>
    </div>
    <div class="cuerpomitad px-3" style="overflow:hidden;">
      <div class="orderby">
        <h3 id="h3nav" >Ordenar por:</h3>
        <form class="" action="/{{$botines1[0]->product_type}}/{{$botines1[0]->brand}}" method="post">
          @csrf
          <select class="form-control form-control-lg" name="orderby" placeholder="Ordenar Por:">
            <option value="p_men_a_may">Precio de menor a mayor</option>
            <option value="p_may_a_men">Precio de mayor a menor</option>
            <option value="nuevos">Agregados recientemente</option>
            <option value="viejos">Proctos más viejos</option>
          </select>
          <button type="submit" name="button">Ordenar</button>
        </form>
      </div>
      <div class="botines" style="float:left">
        <div class="card-group">
          @foreach ($botines1 as $botin)
            <div id="card{{$botin->id}}" class="col-md-4 card cproduct" style="margin:10px;
            border-radius: 20px;
            padding-top: 21px;
            padding-left: 10px;
            padding-right: 10px;">
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
                  <a href="/{{$botin->product_type}}/{{$botin->brand}}/{{$botin->id}}" class="btn btn-outline-dark vermasbotin">Ver Mas</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="card-group">
          @foreach ($botines2 as $botin)
            <div id="card{{$botin->id}}" class="col-md-4 card cproduct" style="margin:10px;
            border-radius: 20px;
            padding-top: 21px;
            padding-left: 10px;
            padding-right: 10px;">
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
                  <a href="/{{$botin->product_type}}/{{$botin->brand}}/{{$botin->id}}" class="btn btn-outline-dark vermasbotin">Ver Mas</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="card-group">
          @foreach ($botines3 as $botin)
            <div id="card{{$botin->id}}" class="col-md-4 card cproduct3 cproduct" style="margin:10px;
            border-radius: 20px;
            padding-top: 21px;
            padding-left: 10px;
            padding-right: 10px;">
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
                  <a href="/{{$botin->product_type}}/{{$botin->brand}}/{{$botin->id}}" class="btn btn-outline-dark vermasbotin">Ver Mas</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

@endsection
