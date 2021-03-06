<section class="container-fluid" style="padding-left:0px; padding-right:0px;">
  <div class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php"> <img src="fotos/logo.png" alt=""> </a>
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
              <a class="dropdown-item" href="productos.php">Nike</a>
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
          <?php if($auth->usuarioLogueado()): ?>
            <?php $usuario = $json->buscarUsuarioPorMail($_SESSION["email"]); ?>
            <?php //$nombre = $usuario["nombre"]; ?>
            <?php //$apellido = $usuario["apellido"]; ?>
            <div class="mr-5 font-weight-bold"> <?= "Hola, " . $usuario->getNombre();?> </div>
          <?php endif; ?>
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
            <?php if ($auth->usuarioLogueado() ): ?>
              <a class="btn btn-danger" href="logout.php" role="button">Logout</a>
            <?php else: ?>
              <a id= "btnlogin" class="btn btn-primary" href="login.php" role="button">Login</a>
              <a class="btn btn-primary" href="register.php" role="button">Registrate</a>
            <?php endif; ?>
            <a class="btn btn-primary" href="carrito.php" role="button"><i id= "micarrito" class="fas fa-shopping-cart"></i></i></a>
          </div>
        </div>
    </nav>
  </div>
</section>
