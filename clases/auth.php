<?php

/**
 *
 */
class Auth
{

  function __construct()
  {
    session_start();
  }

  public function loguearUsuario(){
    $_SESSION["email"] = $_POST["email"];

    // if (isset($_POST["rememberMe"])) {
    //   setcookie("email", $email, time()+60*60);
    // }
  }

  public function usuarioLogueado(){
    return isset($_SESSION["email"]);
  }

}
?>
