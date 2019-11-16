PROBANDO

  @forelse ($botines as $botin)
    <img src="/storage/products/{{$botin->main_image}}" alt="">
  @empty
    <p>No hay botines</p>
  @endforelse


{{-- @extends('layouts.master')

@section('content')

  EL HTML POSTA
  <div class="cuerpoentero">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="productos.php">Botines</a></li>
        <li class="breadcrumb-item active" aria-current="page">Nike</li>
      </ol>
    </nav>
    <div class="titulo">
      <h1 id="botinestitulo">Botines</h1>
    </div>
    <div class="muestraprincipal">
      <div class="card bg-dark text-white">
        <img src="fotos/botines/nike-mercurial1.jpg" class="card-img" alt="...">
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
          <div id="card1" class="card cproduct">
            <div id="carouselExampleControls2" class="carousel slide" data-interval="false" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeE1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeE2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeE3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeE4.jpg" alt="Fourth slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon controlescarr" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                <span class="carousel-control-next-icon controlescarr" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="card-body">
              <p class="card-text font-weight-bold">$Precio</p>
              <p class="card-text">Descripcion del botin</p>
              <a href="producto.php" class="btn btn-outline-dark vermasbotin">Ver Mas</a>
            </div>
          </div>
          <div id="card2" class="card cproduct">
            <div id="carouselExampleControls1" class="carousel slide" data-interval="false" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeF1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeF2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeF3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeF4.jpg" alt="Fourth slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon controlescarr" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
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
          <div id="card3" class="card cproduct">
            <div id="carouselExampleControls3" class="carousel slide" data-interval="false" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeA1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeA2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeA3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeA4.jpg" alt="Fourth slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon controlescarr" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-slide="next">
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
        </div>
        <div class="card-group">
          <div id="card4" class="card cproduct">
            <div id="carouselExampleControls4" class="carousel slide" data-interval="false" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeB1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeB2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeB3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="fotos/botines/mas-botines/nikeB4.jpg" alt="Fourth slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls4" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon controlescarr" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls4" role="button" data-slide="next">
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
          <div id="card5" class="card cproduct">
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
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection --}}
