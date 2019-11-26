<!DOCTYPE html>
<html lang="en" dir="ltr">

  <!-- configuraciones traidas -->
  <head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <link rel="stylesheet" href="{{ asset('css/estilosnav.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" integrity="sha256-piqEf7Ap7CMps8krDQsSOTZgF+MU/0MPyPW2enj5I40=" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/css/uikit.min.css" />
  </head>

  <body>
    <!-- NAVBAR -->
    <section class="container-fluid" style="padding-left:0px; padding-right:0px;">
      <div class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="/home"> <img src="/img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Botines
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/botines/nike">Nike</a>
                  <a class="dropdown-item" href="/botines/adidas">Adidas</a>
                  <a class="dropdown-item" href="/botines/puma">Puma</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Vestimenta
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Remeras</a>
                  <a class="dropdown-item" href="#">Camperas</a>
                  <a class="dropdown-item" href="#">Medias</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Accesorios
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Pelotas</a>
                  <a class="dropdown-item" href="#">Otros</a>
                </div>
              </li>
            </ul>
            @if (Auth::user())
              <div class="mr-5 font-weight-bold"> Hola, {{Auth::user()->name}}</div>
            @endif
              <form id="form-inline" class="form-inline my-2 my-lg-0" id="formnavbar" class= "form">
                <div id="input-group" class="input-group">
                  <input type="text" class="form-control" placeholder="Busqueda">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
              <div class="dropdown">
                @if(Auth::user())
                  <a class="btn btn-danger" href="{{ route('logout') }}" role="button" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                @else
                  <a id= "btnlogin" class="btn btn-primary" href="{{ route('login') }}" role="button">Login</a>
                  <a class="btn btn-primary" href="{{ route('register') }}" role="button">Registrate</a>
                @endif

                <a class="btn btn-primary" href="/cart" role="button"><i id= "micarrito" class="fas fa-shopping-cart"></i></i></a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </section>

  @yield('content')

    {{-- FOOTER --}}
    <section class="mt-5 container-fluid">
      <container>
        <!-- Footer -->
        <footer class="page-footer font-small blue-grey lighten-5">

          <div style="background-color: #2982F1;">
            <div class="container">

              <!-- Grid row-->
              <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                  <h6 class="mb-0" style="color: #FFFFFF;">Conectate con cualquiera de nuestras redes!</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right iconos-footer">

                  <!-- Facebook -->
                  <a class="fb-ic" href="https://www.facebook.com/">
                    <i class="fab fa-facebook-f white-text mr-4"> </i>
                  </a>
                  <!-- Twitter -->
                  <a class="tw-ic" href="https://twitter.com">
                    <i class="fab fa-twitter white-text mr-4"> </i>
                  </a>
                  <!-- Google +-->
                  <a class="gplus-ic" href="https://www.google.com.ar/">
                    <i class="fab fa-google-plus-g white-text mr-4"> </i>
                  </a>
                  <!--Linkedin -->
                  <a class="li-ic" href="https://ar.linkedin.com/">
                    <i class="fab fa-linkedin-in white-text mr-4"> </i>
                  </a>
                  <!--Instagram-->
                  <a class="ins-ic" href="https://www.instagram.com">
                    <i class="fab fa-instagram white-text"> </i>
                  </a>

                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row-->

            </div>
          </div>

          <!-- Footer Links -->
          <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3 dark-grey-text">

              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">Nombre Compañia</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                  consectetur
                  adipisicing elit.</p>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Productos</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                  <a class="dark-grey-text" href="#!">Botines</a>
                </p>
                <p>
                  <a class="dark-grey-text" href="#!">Vestimenta</a>
                </p>
                <p>
                  <a class="dark-grey-text" href="#!">Accesorios</a>
                </p>
                <p>
                  <a class="dark-grey-text" href="#!">Novedades</a>
                </p>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Links Utiles</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                  <a class="dark-grey-text" href="#!">Logueate</a>
                </p>
                <p>
                  <a class="dark-grey-text" href="#!">Registrate</a>
                </p>
                <p>
                  <a class="dark-grey-text" href="#!">Mapa De Sitio</a>
                </p>
                <p>
                  <a class="dark-grey-text" href="#!">Ayuda</a>
                </p>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Contacto</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                  <i class="fas fa-home mr-3"></i> Buenos Aries, BA 10012, AR</p>
                <p>
                  <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                <p>
                  <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                <p>
                  <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Footer Links -->

          <!-- Copyright -->
          <div class="footer-copyright text-center text-black-50 py-3">© 2019 Copyright:
            <a class="dark-grey-text" href="https://mdbootstrap.com/education/bootstrap/"> nuestrositio.com</a>
          </div>
          <!-- Copyright -->

        </footer>
        <!-- Footer -->
      </container>
    </section>
  </body>
  <!-- UIkit JS -->
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit-icons.min.js"></script>  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
