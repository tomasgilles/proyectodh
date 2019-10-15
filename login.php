<?php
// require_once "funciones.php";
require_once "init.php";

if ($auth->usuarioLogueado()) {
  header("Location:index.php");
  exit;
}


$emailOk = "";

$errores=[];
if ($_POST) {
  $emailOk = trim($_POST["email"]);
  $errores = Validator :: validarLogin($_POST);

  if (!$errores) {
    $auth->loguearUsuario();
    header("Location: index.php");
  }
}
?>

<html lang="en" dir="ltr">
  <head>
    <?php require_once("configuraciones.php"); ?>
    <title></title>
  </head>
  <body>
    <?php require_once("navbar.php"); ?>
    <div class="techo">
      <h1 id="registerh1">Mi Cuenta</h1>
    </div>
    <div class="cuerpo">
      <div class="cuerpo2">
        <div class="login" id="login">
          <h2 id="loginh2">Login</h2>
          <form method="post" action="login.php">
            <?php if (isset($errores["email"]) && isset($errores["pass"])) : ?>
              <ul class="alert-danger">
                  <li> <?= $errores["email"] ?> </li>
              </ul>
            <?php else: ?>
              <?php if(isset($errores["email"])): ?>
                <ul class="alert-danger">
                    <li> <?= $errores["email"] ?> </li>
                </ul>
              <?php endif ?>
              <?php if (isset($errores["pass"])): ?>
                <ul class="alert-danger">
                    <li> <?= $errores["pass"] ?> </li>
                </ul>
              <?php endif ?>
            <?php endif ?>

            <div class="form-group">
              <?php if(isset($errores["email"])): ?>
                <input type="email" name="email" class="form-control" id="formGroupExampleInput3" placeholder="Email*" value="" required>
              <?php else: ?>
                <input type="email" name="email" class="form-control" id="formGroupExampleInput3" placeholder="Email*" value="<?= $emailOk ?>" required>
              <?php endif ?>
            </div>
            <div class="form-group">
              <input type="password" name="pass" class="form-control" id="formGroupExampleInput4" placeholder= "Password*" required>
            </div>
            <div class="form-group">
                 <div class="form-check">
                   <input type="checkbox" name="rememberMe" class="form-check-input" id="dropdownCheck">
                   <label class="form-check-label" for="dropdownCheck">
                     Remember me
                   </label>
                 </div>
               </div>
            <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Login</button>
          </form>
        </div>
      </div>
    </div>
    <br>
    <br>
    <?php require_once "footer.php" ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
