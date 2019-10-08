<html lang="en" dir="ltr">
  <head>
    <title></title>
    <?php require_once("configuraciones.php"); ?>
    <?php require_once("funciones.php") ?>
  </head>
  <body>

    <!-- NAVBAR -->
    <?php require_once("navbar.php"); ?>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Botines</a></li>
        <li class="breadcrumb-item active" aria-current="page">Nike</li>
      </ol>
    </nav>
    <div class="titulo">
      <h1>Botines</h1>
    </div>
    <div class="muestraprincipal">
      <div class="card bg-dark text-white">
        <img src="..." class="card-img" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text">Last updated 3 mins ago</p>
        </div>
      </div>
      <div class="imagenprincipal">
        <img src="" alt="">
      </div>
    </div>
    <div class="orderby">
      <h3>Ordenar por:</h3>
      <ul class="list-group list-group-horizontal-sm">
        <li class="list-group-item">Precio de menor a mayor</li>
        <li class="list-group-item">Precio de mayor a menos</li>
        <li class="list-group-item">En oferta</li>
        <li class="list-group-item">Mas vendidos</li>
        <li class="list-group-item">Mas nuevos</li>
      </ul>
    </div>
    <div class="botines">
      <div class="card-group">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="#" class="btn btn-primary">Comprar Ahora</a>
          </div>
        </div>
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Comprar Ahora</a>
          </div>
        </div>
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <a href="#" class="btn btn-primary">Comprar Ahora</a>
          </div>
        </div>
      </div>
      <div class="card-group">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="#" class="btn btn-primary">Comprar Ahora</a>
          </div>
        </div>
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Comprar Ahora</a>
          </div>
        </div>
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <a href="#" class="btn btn-primary">Comprar Ahora</a>
          </div>
        </div>
      </div>
    </div>

    <?php require_once("footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
 </html>
