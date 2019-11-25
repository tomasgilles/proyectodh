@extends('layouts.master')

@section('content')

  <div class="cuerpoentero">
    <div class="parteArriba">
      <div class="">
        <h2 style="padding-top: 3%;">Mi Carrito:</h2>
        <hr class="my-4">
      </div>
    @foreach ($cart as $item)
      <div class="productoCarrito">
        <div class="col-md-7 parteCarrito">
          <div class="imgCarrito">
            <img class="imgsProductoCarrito" src="/storage/products/{{$item->main_image}}" alt="">
          </div>
          <div class="descripcionCarrito">
            <h3>{{$item->name}}</h3>
            <p>Talle: {{$item->size}}</p>
            <p>Cantidad: {{$item->quantity}}</p>
          </div>
        </div>
        <div class="col-md-3 parteCarrito">
          <div class="">
            <button style="width:100%;" type="submit" class="btn btn-outline-dark">Eliminar de Carrito</button>
          </div>
        </div>
        <div class="col-md-2 parteCarrito">
          <p id="precioCarrito">${{$item->price}}</p>
        </div>
      </div>
      <hr class="my-4">
    @endforeach
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




@endsection
