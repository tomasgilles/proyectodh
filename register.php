<html lang="en" dir="ltr">
  <head>
    <?php require_once("configuraciones.php"); ?>
    <title></title>
  </head>
  <body>
    <?php include("navbar.php") ?>
    <div class="techo">
      <h1 id="registerh1">Mi Cuenta</h1>
    </div>
    <div class="cuerpo">
      <div class="cuerpo2">
        <div class="registro" id="registro">
          <h2 id="registerh2">Registro</h2>
          <form method="post" action="register.php">
            <div class="form-group">
              <label for="formGroupExampleInput"></label>
              <input type="text" name ="name" class="form-control" id="formGroupExampleInput" placeholder="Nombre*" required>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2"></label>
              <input type="text" name ="name" class="form-control" id="formGroupExampleInput2" placeholder="Apellido*" required>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2"></label>
              <input type="email" name ="email" class="form-control" id="formGroupExampleInput3" placeholder="Email*" required>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2"></label>
              <input type="password" name = "pass" class="form-control" id="formGroupExampleInput4" placeholder= "Password*" required>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2"></label>
              <input type="password" name = "pass2" class="form-control" id="formGroupExampleInput5" placeholder="Confirm password*" required>
            </div>
            <?php
              $errores = [];
              include ("funciones.php");
              if($_POST) {
                $errores = validarRegistro($_POST);
              }
            ?>
            <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Crear Cuenta</button>
          </form>
        </div>
      </div>
    </div>
    <br>
    <br>
    <?php include("footer.php") ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
