<?php
$errores =[];

if ($_POST) {
  $errores = validarLogin($_POST);

  if (!$errores) {
    loguearUsuario();
    header("Location: register.php");
    exit;
  }
}

?>



<section class="container-fluid">
  <div class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Botines
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Nike</a>
            <a class="dropdown-item" href="#">Adidas</a>
            <a class="dropdown-item" href="#">Puma</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Vestimenta
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Remeras</a>
            <a class="dropdown-item" href="#">Camperas</a>
            <a class="dropdown-item" href="#">Shorts</a>
            <a class="dropdown-item" href="#">Medias</a>
          </div>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Accesorios
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Pelotas</a>
              <a class="dropdown-item" href="#">Otros</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" id="formnavbar">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        </form>
        <div class="dropdown">
          <a class="btn btn-primary" href="login.php" role="button">Login</a>
          <a class="btn btn-primary" href="register.php" role="button">Register</a>
          <a class="btn btn-primary" href="register.php" role="button"><i id= "micarrito" class="fas fa-shopping-cart"></i></i></a>
        </div>
    </div>
  </nav>
  </div>
</section>
