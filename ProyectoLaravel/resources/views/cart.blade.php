@extends('layouts.master')

@section('content')

  <div class="cuerpoentero">
    <div class="parteArriba">
      <div class="">
        <h2 style="padding-top: 3%;">Mi Carrito:</h2>
        <hr class="my-4">
      </div>
      @php
        $precioTotal = 0;
        $cantidad = 0;
      @endphp
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
            <form class="/cartdelete" action="/cartdelete" method="post">
              @csrf
              <input type="hidden" name="id" value="{{$item->id}}">
              <button style="width:100%;" type="submit" class="btn btn-outline-dark">Eliminar de Carrito</button>
            </form>
          </div>
        </div>
        <div class="col-md-2 parteCarrito">
          <p id="precioCarrito">${{$item->price}}</p>
        </div>
      </div>
      <hr class="my-4">
      @php
        $cantidad += $item->quantity;
        $precioTotal += $item->price*$item->quantity;
      @endphp
    @endforeach
      <div id="totalCarrito" class="">
        <div class="">
          <p>Productos: {{$cantidad}}</p>
          <p>Total a pagar: ${{$precioTotal}}</p>
        </div>
        <div class="">
          <form class="" action="/cartclose" method="post">
            @csrf
            <button style="width:100%;" type="submit" class="btn btn-outline-dark">Comprar Carrito</button>
          </form>
        </div>
      </div>
    </div>
    <div class="parteAbajo">

    </div>
  </div>




@endsection
